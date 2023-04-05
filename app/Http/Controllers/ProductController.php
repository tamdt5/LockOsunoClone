<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\BaseController;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends BaseController
{
    public function __construct ()
    {
        parent::__construct('products');
    }

    public function create(){
        $products= DB::table('product')->get();
        $categories=DB::table('category')->where('type','sanpham')->get();
        return $this->view_admin('create')->with(['products' => $products ,
                                                   'categories' => $categories]);
    }

    public function store(ProductRequest $request){
        $image_path = public_path('images/sanpham') . "/" . $request->hinhanhsanpham;
        if (!is_null($request->hinhanhsanpham) && file_exists($image_path)) {
            unlink($image_path);
        }
        $imageName = time().'-'.$request->hinhanhsanpham->getClientOriginalName();  
        $request->hinhanhsanpham->move(public_path('images/sanpham'), $imageName);
        $data=$request->except('_token');
        $data['hinhanhsanpham'] = $imageName;
        $data['created_at'] = new \DateTime();
        DB::table('product')->insert($data);
        return $this->route_admin('index', [] ,['success' => 'Tạo sản phẩm mới thành công']);
    }

    public function index(){
        $data['products']=DB::table('product')->select('*','product.id as productid')
                ->join('category','product.theloai','category.id')->where('product.delete',0)->get();
        // $data['products']=DB::table('product')->get();
        return $this->view_admin('index',$data);
    }

    public function edit($id){
        
        $products=DB::table('product')->where('id',$id);
        $categories=DB::table('category')->where('type','sanpham')->get();
        if ($products->exists()) {
            $products = $products->first();
            return $this->view_admin('edit')->with( [
                                                'products' => $products,
                                                'categories' => $categories]);
        } else {
            abort(404);
        }
    }
    public function update(Request $request, $id){
        $data_current = DB::table('product')->where('id',$id)->first();
        $data = $request->except('_token');
        if (empty($request->hinhanhsanpham)) {
            $data['hinhanhsanpham'] = $data_current->hinhanhsanpham; 
        } else {
            $image_path = public_path('images/sanpham') . "/" . $data_current->hinhanhsanpham;
            if (!is_null($data_current->hinhanhsanpham) && file_exists($image_path)) {
                unlink($image_path);
            }

            $imageName = time().'-'.$request->hinhanhsanpham->getClientOriginalName();  
            $request->hinhanhsanpham->move(public_path('images/sanpham'), $imageName);
            $data['hinhanhsanpham'] = $imageName;
        }
        $data['updated_at'] = new \DateTime();
        DB::table('product')->where('id', $id)->update($data);
        return $this->route_admin('index', [] ,['success' => 'Sửa đổi thông tin sản phẩm thành công']);
    }

    public function destroy($id){
        $data = DB::table('product')->where('id', $id);

        if ($data->exists()) {
            $data->update(['delete'=>1]);
            return $this->route_admin('index', [] ,['success' => 'Xóa sản phẩm thành công']);
        } else {
            abort(404);
        }
    }
    
}

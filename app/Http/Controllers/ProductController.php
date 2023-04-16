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

        $image_path2 = public_path('images/sanpham') . "/" . $request->hinhanhsanpham2;
        if (!is_null($request->hinhanhsanpham2) && file_exists($image_path2)) {
            unlink($image_path2);
        }
        $imageName2 = time().'-'.$request->hinhanhsanpham2->getClientOriginalName();  
        $request->hinhanhsanpham2->move(public_path('images/sanpham'), $imageName2);

        $image_path3 = public_path('images/sanpham') . "/" . $request->hinhanhsanpham3;
        if (!is_null($request->hinhanhsanpham3) && file_exists($image_path3)) {
            unlink($image_path3);
        }
        $imageName3 = time().'-'.$request->hinhanhsanpham3->getClientOriginalName();  
        $request->hinhanhsanpham3->move(public_path('images/sanpham'), $imageName3);

        $image_path4 = public_path('images/sanpham') . "/" . $request->hinhanhsanpham4;
        if (!is_null($request->hinhanhsanpham4) && file_exists($image_path4)) {
            unlink($image_path4);
        }
        $imageName4 = time().'-'.$request->hinhanhsanpham4->getClientOriginalName();  
        $request->hinhanhsanpham4->move(public_path('images/sanpham'), $imageName4);

        $data=$request->except('_token');
        $data['hinhanhsanpham'] = $imageName;
        $data['hinhanhsanpham2'] = $imageName2;
        $data['hinhanhsanpham3'] = $imageName3;
        $data['hinhanhsanpham4'] = $imageName4;
        $data['created_at'] = new \DateTime();
        $feedback['comment'] = 'Hi';
        $feedback['hoten'] = 'Administrator';
        $feedback['danhgia'] = 5;
        $feedback['email'] = 'admin@gmail.com';
        DB::table('product')->insert($data);
        $idproduct = DB::table('product')->select('id')->where('tensanpham',$data['tensanpham'])->first();
        $feedback['sanpham'] = $idproduct->id;
        DB::table('feedback')->insert($feedback);
        return $this->route_admin('index', [] ,['success' => 'Tạo sản phẩm mới thành công']);
    }

    public function index(){
        $data['products']=DB::table('product')->select('*','product.id as productid')
                ->join('category','product.theloai','category.id')
                ->where('product.delete',0)->get();
        // $data['products']=DB::table('product')->get();
        return $this->view_admin('index',$data);
    }

    public function edit($id){
        $averageStar= DB::table('feedback')
                        ->where('sanpham',$id)
                        ->avg('feedback.danhgia');
        $countingRating= DB::table('feedback')->join('product','feedback.sanpham','product.id')
        ->where('product.id',$id)->count();
        $products=DB::table('product')->where('id',$id);
        $categories=DB::table('category')->where('type','sanpham')->get();
        if ($products->exists()) {
            $products = $products->first();
            return $this->view_admin('edit')->with( [
                                                'products' => $products,
                                                'categories' => $categories,
                                                'averageStar' => $averageStar,
                                                'countingRating' => $countingRating]);
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

        if (empty($request->hinhanhsanpham2)) {
            $data['hinhanhsanpham2'] = $data_current->hinhanhsanpham2; 
        } else {
            $image_path2 = public_path('images/sanpham') . "/" . $data_current->hinhanhsanpham2;
            if (!is_null($data_current->hinhanhsanpham2) && file_exists($image_path2)) {
                unlink($image_path2);
            }

            $imageName2 = time().'-'.$request->hinhanhsanpham2->getClientOriginalName();  
            $request->hinhanhsanpham2->move(public_path('images/sanpham'), $imageName2);
            $data['hinhanhsanpham2'] = $imageName2;
        }

        if (empty($request->hinhanhsanpham3)) {
            $data['hinhanhsanpham3'] = $data_current->hinhanhsanpham3; 
        } else {
            $image_path3 = public_path('images/sanpham') . "/" . $data_current->hinhanhsanpham3;
            if (!is_null($data_current->hinhanhsanpham3) && file_exists($image_path2)) {
                unlink($image_path3);
            }

            $imageName3 = time().'-'.$request->hinhanhsanpham3->getClientOriginalName();  
            $request->hinhanhsanpham3->move(public_path('images/sanpham'), $imageName3);
            $data['hinhanhsanpham3'] = $imageName3;
        }

        if (empty($request->hinhanhsanpham4)) {
            $data['hinhanhsanpham4'] = $data_current->hinhanhsanpham4; 
        } else {
            $image_path4 = public_path('images/sanpham') . "/" . $data_current->hinhanhsanpham4;
            if (!is_null($data_current->hinhanhsanpham4) && file_exists($image_path4)) {
                unlink($image_path4);
            }

            $imageName4 = time().'-'.$request->hinhanhsanpham4->getClientOriginalName();  
            $request->hinhanhsanpham4->move(public_path('images/sanpham'), $imageName4);
            $data['hinhanhsanpham4'] = $imageName4;
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

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\BaseController;
use App\Http\Requests\CategoryRequest;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class CategoryController extends BaseController
{
    public function __construct ()
    {
        parent::__construct('categories');
    }

    public function create(){
        return $this->view_admin('create');
    }

    public function store(CategoryRequest $request){
        $data = $request->except('_token');
        if($data['type']=='sanpham')
        {
            $data['icon']='fa-cart-shopping';
        }
        if($data['type']=='others')
        {
            $data['icon']='fa-bars';
        }
        $data['created_at'] = new \DateTime();
        DB::table('category')->insert($data);
        return $this->route_admin('index', [] ,['success' => 'Tạo danh mục mới thành công']);
    }

    public function index(){
        $data['categories']=DB::table('category')->where('delete',0)->get();
        // $data['products']=DB::table('product')->get();
        return $this->view_admin('index',$data);
    }

    public function edit($id){
        
        $data['categories']=DB::table('category')->where('id',$id);
        if ($data['categories']->exists()) {
            $data['categories'] = $data['categories']->first();
            return $this->view_admin('edit', $data);
        } else {
            abort(404);
        }
    }
    public function update(Request $request, $id){
        $data = $request->except('_token');
        $data['updated_at'] = new \DateTime();
        DB::table('category')->where('id', $id)->update($data);
        return $this->route_admin('index', [] ,['success' => 'Sửa đổi danh mục thành công']);
    }

    public function destroy($id){
        $data = DB::table('category')->where('id', $id);

        if ($data->exists()) {
            $data->update(['delete'=>1]);
            return $this->route_admin('index', [] ,['success' => 'Xóa danh mục thành công']);
        } else {
            abort(404);
        }
    }
    
}

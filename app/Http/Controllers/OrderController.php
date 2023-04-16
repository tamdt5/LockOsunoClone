<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\BaseController;
use App\Http\Requests\OrderRequest;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class orderController extends BaseController
{
    public function __construct ()
    {
        parent::__construct('order');
    }

    public function create(){
        return $this->view_admin('create');
    }

    public function store(OrderRequest $request){
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
        DB::table('order')->insert($data);
        return $this->route_admin('index', [] ,['success' => 'Tạo danh mục mới thành công']);
    }

    public function index(){
        $data['order']=DB::table('order')->get();
        // $data['products']=DB::table('product')->get();
        $list=[];
        foreach($data['order'] as $key)
        {
            $tensanpham = json_decode($key->tensanpham);
            $quantity = json_decode($key->quantity);
            $price = json_decode($key->price);
            $bill['id']=$key->id;
            $bill['hoten']=$key->hoten;
            $bill['tensanpham']=$tensanpham;
            $bill['quantity']=$quantity;
            $bill['price']=$price;
            $bill['diachi']=$key->diachi;
            $bill['sdt']=$key->sdt;
            $bill['email']=$key->email;
            $bill['totalprice']=$key->totalprice;
            $bill['status']=$key->status;
            $bill['created_at']=$key->created_at;
            $bill['updated_at']=$key->updated_at;
            $list[]=$bill;
        }
        // dd($list);
        return view('admin.modules.order.index')->with(['order' => $list]);
    }

    public function edit($id){
        
        $data['order']=DB::table('order')->where('id',$id);
        if ($data['order']->exists()) {
            $data['order'] = $data['order']->first();
            $tensanpham = json_decode($data['order']->tensanpham);
            $quantity = json_decode($data['order']->quantity);
            $price = json_decode($data['order']->price);
            $bill['id']=$data['order']->id;
            $bill['hoten']=$data['order']->hoten;
            $bill['tensanpham']=$tensanpham;
            $bill['quantity']=$quantity;
            $bill['price']=$price;
            $bill['diachi']=$data['order']->diachi;
            $bill['sdt']=$data['order']->sdt;
            $bill['note']=$data['order']->note;
            $bill['email']=$data['order']->email;
            $bill['totalprice']=$data['order']->totalprice;
            $bill['status']=$data['order']->status;
            $bill['created_at']=$data['order']->created_at;
            $bill['updated_at']=$data['order']->updated_at;
            $data['order'] =$bill;
            return $this->view_admin('edit', $data);
        } else {
            abort(404);
        }
    }
    public function update(Request $request, $id){
        $data = $request->except('_token');
        $data['updated_at'] = new \DateTime();
        if($data['status']==1)
        {
            
            $tensanpham = json_decode($data['tensanpham']);
        }
        DB::table('order')->where('id', $id)->update($data);
        return $this->route_admin('index', [] ,['success' => 'Sửa đổi danh mục thành công']);
    }

    public function destroy($id){
        $data = DB::table('order')->where('id', $id);

        if ($data->exists()) {
            $data->update(['delete'=>1]);
            return $this->route_admin('index', [] ,['success' => 'Xóa danh mục thành công']);
        } else {
            abort(404);
        }
    }
    
}

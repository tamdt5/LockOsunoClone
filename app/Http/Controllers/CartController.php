<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaymentRequest;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart() {
        $sanphamyeuthich = DB::table('product')->first();
        $cateMenu = DB::table('category')->where('type','sanpham')->limit(9)->get();
        $cart = Cart::content();
        return view('website.modules.cart.giohang')->with(['cateMenu' => $cateMenu,
                                                            'cart' => $cart,
                                                            'favorite' => $sanphamyeuthich]);
    }

    public function updateCart(Request $request) {
        foreach($request->quantity as $key => $quantity)
        {
            Cart::update($key,$quantity);
        }
        return redirect()->back();
    }

    public function payment(){
        $cateMenu = DB::table('category')->where('type','sanpham')->limit(9)->get();
        $cart = Cart::content();

        return view ('website.modules.cart.payment')->with(['cateMenu' => $cateMenu,
                                                            'cart' => $cart]);
    }

    public function removeItem($rowId){
        Cart::remove($rowId);
        return redirect()->back();
    }

    function addtoCart($id, $quantity = 1)
    {
        $product = DB::table('product')->where('id',$id)->first();
        Cart::add(['id' => $product->id, 'name' => $product->tensanpham, 'qty' => $quantity, 'price' => $product->giasanpham, 'weight' => 0, 'options' => ['image' => $product->hinhanhsanpham]]);

        return redirect()->route('website.cart');
    }

    function PostOrder(PaymentRequest $request){
        $cart=$request->except('_token');
        $tensanpham=json_encode($cart['tensanpham']);
        $quantity=json_encode($cart['quantity']);
        $price=json_encode($cart['price']);
        $cart['tensanpham'] =$tensanpham;
        $cart['quantity']=$quantity;
        $cart['price']=$price;
        $cart['created_at'] = new \DateTime();

        
        DB::table('order')->insert($cart);
        
        // Cart::destroy();
        return redirect()->route('website.index')->with(['payment_success' => 'Thông tin đã được gửi đến tổng đài viên, cảm ơn quý khách']);
    }
}

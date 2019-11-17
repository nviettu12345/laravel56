<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Cart;
use Illuminate\Http\Request;

class ShoppingCartController extends FrontendController
{
    // them gio hang
    public function addProduct(Request $request,$id)
    {
        $product=Product::select('pro_name','id','pro_price','pro_sale','pro_avatar')->find($id);
        if(!$product) redirect()->route('/');

        $cart=[
            'id'   =>$id,
            'name' => $product->pro_name,
            'qty'  => 1,
            'price'=> $product->pro_price,
            'options' => [
                'avatar' => $product->pro_avatar
                ]
        ];

       Cart::add($cart);
    
        return redirect()->back();
    }
    // danh sach gio hang
    public function getListShoppingCart()
    {
        $products=\Cart::content();
        return view('shopping.index',compact('products'));

    }

    // form thanh toan
    public function getFormPay()
    {
        $products=\Cart::content();
        return view('shopping.pay',compact('products'));
    }
}

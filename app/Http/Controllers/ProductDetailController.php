<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductDetailController extends FrontendController
{
    public function productDetail(Request $request)
    {
        $url=$request->segment(2);
        $url=explode('-',$url);
        if($id=array_pop($url))
        {
            $productDetail=Product::where([
                'pro_active'=>1
            ])->find($id);
            $viewData=[
                'productDetail' => $productDetail
            ];

            return view('product.detail',$viewData);
        }
       
    }
}

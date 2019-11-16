<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends FrontendController
{
    public function getListProduct(Request $request)
    {
      
        $url=$request->segment(2);
        $url=explode('-',$url);
        if($id=array_pop($url))
        {
            $products=Product::where([
                'pro_active'=>1,
                'pro_category_id'=>$id
            ])->orderBy('id','DESC')->paginate(10);

            $cateProduct=Category::find($id);
            
            $viewData=[
                'products'       => $products,
                'cateProduct' => $cateProduct

            ];

            return view('product.index',$viewData);    
        }
        
        // return redirect('/');
    }
}

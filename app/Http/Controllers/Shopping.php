<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class Shopping extends Controller
{
    public function index(Request $request){
        return view('shopping.landingpage');
       }

       public function electric(){ $product = products::where('categoryy', 'الأجهزة')->get(); // تصفية المنتجات حسب الفئة 
        return view('shopping.electric', ['product' => $product]); }
    
 public function productdetails($id)
         {
             
             $producdetails=DB::table('products')
             ->join('products__details','products.id','=','products__details.id_products')
             ->where('products.id','=',$id)
             ->first();
     
             return view('shopping.product_details',['prod'=>$producdetails]);
         
}

public function furniture(){ $product = products::where('categoryy', 'الأثاث')->get(); // تصفية المنتجات حسب الفئة 
  return view('shopping.furniture', ['product' => $product]); }





  public function decor(){ $product = products::where('categoryy', 'الديكور')->get(); // تصفية المنتجات حسب الفئة 
    return view('shopping.decor', ['product' => $product]); }



         public function add_to_cart()
         {
           $count=session::get('counter');
           $count++;
           session::put('counter',$count);
           return view('shopping.landingpage');
     
         }

}

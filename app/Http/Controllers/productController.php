<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;
class productController extends Controller
{
   public function index(){
   	return view('products.create');
   }

   public function saveproduct(Request $request){
   	 $data=array();
    	$data['id']=$request->product_id;
    	$data['product_name']=$request->product_name;
    	$data['product_variants']=$request->product_variants;
    	$data['product_price']=$request->product_price;

    	$image=$request->file('product_image');
    	if($image){
    	$image_name=Str::random(40);
    	$ext=strtolower($image->getClientOriginalExtension());
    	$iamge_full_name=$image_name.'.'.$ext;
    	$upload_path='image/';
    	$image_url=$upload_path.$iamge_full_name;
    	$success=$image->move($upload_path,$iamge_full_name);
    	return Redirect::to('/home');
    	}

    	$data['product_image']='';
    	DB::table('products')->insert($data);
    	return Redirect::to('/home');
   }
   public function edit($id){
       $edit_product=DB::table('products')
       ->where('id',$id)
       ->first();
       return View('produts.edit')->with('edit_product',$);
   }
    public function update(Request $request, Product $product)
    {   
      

        $product->update([
            'product_name' => $request->product_name,
            'product_variantsproduct_price' => $request->product_variantsproduct_price,
            'product_price' => $request->product_price,
           product_price
        ]);

        if($request->product_price){
            $imageName = time().'_'. uniqid() .'.'.$request->product_price->getClientOriginalExtension();
            $request->product_price->move(public_path('storage/product'), $imageName);
            $product->product_price = '/storage/product/' . $imageName;
            $product->save();
        }

        	return Redirect::to('/home');
}
 
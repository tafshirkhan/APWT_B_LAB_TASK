<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        return view('system.product');
    }

    public function existproduct(){

        $product = Product::all();

        return view('system.product.existing_product')->with('productlist', $product);
    }

    public function editproduct($id){
        $product = Product::where('product_id', $id)
                            ->first();
        return view('system.product.edit')->with('product', $product);
    }

    public function updateproduct(Request $req,$id){

        $product = Product::where('product_id', $id)
                            ->first();
                           
        //  $product = Product::find($req->$id);
        //$product = new Product;

        $product->productname = $req->pname;
        $product->producttype = $req->ptype;
        $product->productquantity = $req->pquantity;  
        
        $product->save();


        return redirect()->route('product.existproduct');
    }

    public function productdetails($id){
        $product = Product::where('product_id', $id)
                            ->first();
        return view('system.product.details')->with('product', $product);
    }

    public function deleteproduct($id){
        $product = Product::where('product_id', $id)
                           ->first();
        return view('system.product.delete')->with('product', $product);
    }

    public function destroyproduct($id){
        $product = Product::where('product_id', $id);
        $product->delete();
        return redirect()->route('product.existproduct');
    }

    public function addproduct(){
        return view('system.product.add_product');
    }

    public function insertproduct(Request $req){
        $product = new Product;
        $product->productname = $req->pname;
        $product->producttype = $req->ptype;
        $product->productquantity = $req->pquantity;
        $product->productprice = $req->pprice;

        $product->save();
        return redirect()->route('product.existproduct');
    }


}

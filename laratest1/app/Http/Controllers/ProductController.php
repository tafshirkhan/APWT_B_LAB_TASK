<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function list(){
        $product = Product::all();

        return view('product.list')->with('productList', $product);
    }

    public function details($id){

        //$product = Product::find($id);
        $product = Product::where('product_id', $id)
                           ->first();
           
        //echo "Product: ".$product;

        return view('product.details')->with('product', $product);
    }

    public function index(){

        return view('product.add');
    }

    public function insert(Request $req){
        $product = new Product;

        $product->productname = $req->pname;
        $product->producttype = $req->ptype;
        $product->productquantity = $req->pquantity;

        $product->save();
        return redirect()->route('product.list');
    }

    public function delete($id){
        // $product = Product::find($id);
        $product = Product::where('product_id',$id)
                           ->first();

        return view('product.delete')->with('product', $product);
    }

    public function destroy($id){

    //    $product = Product::where('product_id', $id)
    //                        ->first();
    // // //    $product->destroy($id);

     $product = Product::where('product_id', $id);
     $product->delete();

        return redirect()->route('product.list');
    }

    public function edit($id){
        $product = Product::where('product_id', $id)
                            ->first();
        return view('product.edit')->with('product', $product);
    }

    public function update(Request $req, $id){

         $product = Product::where('product_id', $id)
                            ->first();
                           
        //  $product = Product::find($req->$id);
        //$product = new Product;

        $product->productname = $req->pname;
        $product->producttype = $req->ptype;
        $product->productquantity = $req->pquantity;  
        
        $product->save();


        return redirect()->route('product.list');
    }

    
}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>EXISTING PRODUCTS</h2>
   <table border="1">

         <tr>
                 <td>Product Id</td>
                 <td>Product Name</td>
                 <td>Product Type</td>
                 <td>Product Quantity</td>   
                 <td>Action</td>
                  
         </tr>
         
         @foreach($productlist as $product)
        <tr>
             
             <td>{{$product['product_id']}}</td>
             <td>{{$product['productname']}}</td>
             <td>{{$product['producttype']}}</td>
             <td>{{$product['productquantity']}}</td>

             <!-- <td>{{$product->product_id}}</td>
             <td>{{$product->productname}}</td>
             <td>{{$product->producttype}}</td>
             <td>{{$product->productquantity}}</td> -->

             <td>
                 <a href="/system/product/details/{{$product['product_id']}}">Details</a> ||
                 <a href="/system/product/delete/{{$product['product_id']}}">Delete</a> ||
                 <a href="/system/product/edit/{{$product['product_id']}}">Edit</a>
                 
             </td>


        </tr>
        @endforeach
   </table>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCT LIST</title>
</head>
<body>
<h1>Product List</h1>
   
     <table border="2">
        <tr>

        <td>Product Id</td>
        <td>Product Name</td>
        <td>Product Type</td>
        <td>Product Quantity</td>
        <td>Action</td>

        </tr>

        @foreach($productList as $product)
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
                 <a href="/product/details/{{$product['product_id']}}">Details</a> ||
                 <a href="/product/delete/{{$product['product_id']}}">Delete</a> ||
                 <a href="/product/edit/{{$product['product_id']}}">Edit</a>
                 
             </td>


        </tr>
        @endforeach

     </table>
    
</body>
</html>
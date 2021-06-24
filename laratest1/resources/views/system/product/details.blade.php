<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCT DETAILS</title>
</head>
<body>
<h2>PRODUCT DETAILS</h2>
            
<table border="2">
   
   <tr>
         <td>Product Id</td>
         <td>{{$product->product_id}}</td>
   </tr>
   <tr>
         <td>Product Name</td>
         <td>{{$product->productname}}</td>
   </tr>
   <tr>
         <td>Product Type</td>
         <td>{{$product->producttype}}</td>
   </tr>
   <tr>
         <td>Product Status</td>
         <td>{{$product->productstatus}}</td>
   </tr>
   <tr>
         <td>Product Quantity</td>
         <td>{{$product->productquantity}}</td>
   </tr>
   <tr>
         <td>Product Price</td>
         <td>{{$product->productprice}}</td>
   </tr>
</table>
<button><a href="/system/product/existing_product">Back</a></button>
    
</body>
</html>
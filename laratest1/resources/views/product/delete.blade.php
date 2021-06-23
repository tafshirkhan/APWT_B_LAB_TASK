<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Product</title>
</head>
<body>
<h2>Delete Product</h2>
<form method="post"> 

<table border="2">
  @csrf
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
         <td>{{$product['producttype']}}</td>
   </tr>
   <tr>
         <td>Product Quantity</td>
         <td>{{$product->productquantity}}</td>
   </tr>
   <tr>
         <td><h3>Are you sure!</h3></td>
         <td></td>
   </tr>
   <tr>
         <td> <input type="submit" name="submit" value="submit"> </td>
         <td></td>
   </tr>
  </table>
</form> 

</body>
</html>
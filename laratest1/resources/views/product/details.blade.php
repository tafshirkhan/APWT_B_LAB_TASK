<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prouct Details</title>
</head>
<body>
<h2>Product Details</h2>
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
            <td>Product Quantity</td>
            <td>{{$product->productquantity}}</td>
      </tr>
</table>
    
</body>
</html>
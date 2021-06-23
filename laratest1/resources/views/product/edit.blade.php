<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
</head>
<body>
<h2>Update Product Details</h2>
<form method="post">
  
     <table border="2">

        @csrf
        <tr>
           <td>Product Name</td>
           <td><input type="text" name="pname" value="{{$product['productname']}}"></td>
        </tr>

        <tr>
           <td>Product Type</td>
           <td><input type="text" name="ptype" value="{{$product['producttype']}}"></td>
        </tr>
        <tr>
           <td>Product Quantity</td>
           <td><input type="text" name="pquantity" value="{{$product['productquantity']}}"></td>
        </tr>
        <tr>
          <td></td>
          <td><h3>Are you sure</h3></td>
       </tr>
        <tr>
           <td></td>
           <td><input type="submit" name="Update" value=" Update"></td>
        </tr>
     </table>
  </form>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPCOMING PRODUCT</title>
</head>
<body>
<h2>UPCOMING PRODUCT</h2>
<form method="post">
    <table>
        @csrf
        <tr>
           <td>Product Name</td>
           <td><input type="text" name="pname" value="{{$product['productname']}}"></td>
        </tr>

        <tr>
           <!-- <td>Product Type</td>
           <td><input type="text" name="ptype" value="{{$product['producttype']}}"></td> -->
           <td>Product Type</td>
           <td>
           <select name="type">
                        <option></option>
                        <option value="Grocery">Grocery</option>
                        <option value="Medical">Medical</option>
                        <option value="Stationary">Stationary</option>
                        <option value="Electronic">Electronic</option>
                    </select>
           </td>
        </tr>
        <tr>
           <td>Product Quantity</td>
           <td><input type="text" name="pquantity" value="{{$product['productquantity']}}"></td>
        </tr>
        <tr>
           <td>Product Price</td>
           <td><input type="text" name="pprice" value="{{$product['productprice']}}"></td>
        </tr>

        <tr>
           <td></td>
           <td><input type="submit" name="Update" value="Update"></td>
        </tr>
    </table>
   
</form>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT PRODUCT</title>
</head>
<body>
<h2>EDIT PRODUCT DETAILS</h2>
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
           
           <td>Product Status</td>
           <td>
           <select name="pstatus">
                        <option></option>
                        <option value="Upcoming">Upcoming</option>
                        <option value="Existing">Existing</option>
                        
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
    <button><a href="/system/product/existing_product">Back</a></button>
   
</form>
    
</body>
</html>
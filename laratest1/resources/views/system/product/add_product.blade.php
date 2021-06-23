<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD PRODUCT</title>
</head>
<body>
   <h2>ADD NEW PRODUCT</h2>
   <form method="post">
   <table>

        @csrf
        <tr>
           <td>Product Name</td>
           <td><input type="text" name="pname"></td>
        </tr>

        <!-- <tr>
           <td>Product Type</td>
           <td><input type="text" name="ptype"></td>
        </tr> -->
        <tr>
           <td>Product Type</td>
           <td>
        <select name="ptype">
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
           <td><input type="text" name="pquantity"></td>
        </tr>
        <tr>
           <td>Product Price</td>
           <td><input type="text" name="pprice"></td>
        </tr>

        <tr>
           <td></td>
           <td><input type="submit" name="Add" value=" Add"></td>
        </tr>
     </table>
   
</form>
    
</body>
</html>
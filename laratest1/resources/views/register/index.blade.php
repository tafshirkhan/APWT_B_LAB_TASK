<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER PAGE</title>
</head>
<body>
<h1>Register Here</h1>
<form method="post">
    <table>
        @csrf
        <tr>
           <td>Firstname</td>
           <td><input type="text" name="fname"></td>
        </tr>
        <tr>
           <td>Username</td>
           <td><input type="text" name="uname"></td>
        </tr>
        <tr>
           <td>Email</td>
           <td><input type="email" name="email"></td>
        </tr>
        <tr>
           <td>Password</td>
           <td><input type="password" name="password"></td>
        </tr>
        <tr>
           <td>Confirm Password</td>
           <td><input type="password" name="cpassword"></td>
        </tr>

        <tr>
           <td>Address</td>
           <td><input type="text" name="address"></td>
        </tr>
        <tr>
           <td>Company Name</td>
           <td><input type="text" name="company"></td>
        </tr>
        <tr>
           <td>Phone Number</td>
           <td><input type="number" name="phone"></td>
        </tr>
        <tr>
           <td>Country</td>
           <td><input type="text" name="country"></td>
        </tr>
        <tr>
           <td>City</td>
           <td><input type="text" name="city"></td>
        </tr>
        <tr>
           <td>User Type</td>
           <td><input type="text" name="type"></td>
        </tr>

        <tr>
           <td></td>
           <td><input type="submit" name="Signup" value="Signup"></td>
        </tr>
    </table>
   
</form>
    {{session('msg')}}

<br>
@foreach($errors->all() as $error)
      
      {{$error}} <br>

@endforeach
    
</body>
</html>
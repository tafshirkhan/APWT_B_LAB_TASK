<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>
</head>
<body>
<h1>Register </h1>
<form method="post">
    <table>
        @csrf
        <tr>
           <td>Username</td>
           <td><input type="text" name="uname"></td>
        </tr>

        <tr>
           <td>Password</td>
           <td><input type="password" name="password"></td>
        </tr>

        <tr>
           <td></td>
           <td><input type="submit" name="Sumbit" value="submit"></td>
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
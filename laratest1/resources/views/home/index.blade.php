<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME PAGE</title>
</head>
<body>
 <h1>Welcome home  {{session('uname')}} </h1>
 <a href="/product/list">Product List</a> ||
 <a href="/product/add">Add Product</a> ||
 <a href="/logout">Back</a>
 
    
</body>
</html>
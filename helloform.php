<!DOCTYPE html>
<html>
<head>
    <title>Hello World</title>
</head>
<body>

   <form method ="POST" action = "/mytest" >
    <label>Username</label>
    <input type="text" name = "name"><br>
    <input type="submit" name= " submit">
    @csrf
   </form>
   {{ $name }}
</html>
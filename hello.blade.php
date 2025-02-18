<!DOCTYPE html>
<html>
<head>
    <title>Hello World</title>
</head>
<body>

   <form method ="POST" action = "/mytest" >
    <label>Username</label>
    <input type="text" name = "name"><br>
    <label>Password</label>
    <input type="password" name = "password">
    <input type="submit" name= " submit">
    @csrf
   </form>
   {{ $data }}
   <table class="table table-bordered" style="width: 50%">
    <tr>
        <th>Name</th>
        <th>Password</th>
    </tr>
    @forelse ($users as $user)
        <tr>
            <td>{{ $user->username }}</td>
            <td>{{ $user->pass }}</td>
        </tr>
    @empty
        <tr>
            <td colspan="2">No users found.</td>
        </tr>
    @endforelse
</table>
<form method ="POST" action = "/mytest" >
    <label>Username</label>
    <input type="text" name = "name"><br>
    <input type="submit" name= " submit">
    @csrf
   </form>
   <form method ="POST" action = "/mytest" >
    <label>Username</label>
    <input type="text" name = "name"><br>
    <label>Password</label>
    <input type="password" name = "password">
    <input type="submit" name= " submit">
    @csrf
   </form>
</body>
</html>

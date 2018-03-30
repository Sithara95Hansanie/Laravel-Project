<!DOCTYPE html>
<html>
<head>
	<title>Users</title>
</head>
<body>
<h1>Users Register Page</h1>
<form action="/register" method="post">
{{ csrf_field()}}
<label for="">name</label>
<input type="text"name="name" value=""><br>
<label for="">email</label>
<input type="email"name="email" value=""><br>
<label for="">password</label>
<input type="password"name="password" value=""><br>
<input type="submit"name="signup" value="Sign UP"><br>





</form>
</body>
</html>
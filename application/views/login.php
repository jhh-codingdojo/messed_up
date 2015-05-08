<!DOCTYPE html>

<html>
<head>
	<title>Login</title>
	<style type="text/css">
		span
		{
			display: block;
		}

		form
		{
			width: 300px;
			height: 300px;
			letter-spacing: 20%;
			border: 1px solid gray;
		}
	</style>
</head>
<body>
	
	<form action="/" method="post">
		<span>Email: <input type="text" name="email"></span>
		<span>Password: <input type="password" name="password"></span>
		<input type="submit" name="submit">
	</form>

	<form action="/reg_logs/registration" method="post">
		<span>First Name: <input type="text" name="first_name"></span>
		<span>Last Name: <input type="text" name="last_name"></span>
		<span>Email: <input type="text" name="email"></span>
		<span>Password: <input type="password" name="password"></span>
		<span>Confirm Password: <input type="password" name="confirm_password"></span>
		<input type="submit" name="submit">
	</form>
</body>
</html>
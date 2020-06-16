<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>

	<form action="{{ url('/store') }}" method="POST">
		
		@csrf
		<div>
			<label for="username">Username</label>
			<input type="text" name="username">
		</div>

		<div>
			<label for="password">Password</label>
			<input type="password" name="password">
		</div>

		<div>
			<button type="submit">submit</button>
		</div>
	</form>

</body>
</html>
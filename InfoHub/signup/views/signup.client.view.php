<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form onsubmit="return userSubmit()">
		<input type="text" id="firstname" placeholder="firstname" required>
		<input type="text" id="lastname" placeholder="lastname" required>
		<input type="text" id="middlename" placeholder="middlename" required>
		<input type="date" id="birthdate" placeholder="birthdate" required>
		<input type="text" id="address" placeholder="address" required>
		<input type="text" id="username" placeholder="username" required>
		<input type="text" id="password" placeholder="password" required>
		<input type="submit" value="submit" name="">
	</form>


</body>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script type="text/javascript" src="../client/signup.client.controller.js"></script>
</html>
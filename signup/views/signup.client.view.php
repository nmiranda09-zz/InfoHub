<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">	
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
		<input type="password" id="password" placeholder="password" required>
		<select id="type">
			<option>Private</option>
			<option>Public</option>
		</select>
		<input type="submit" value="submit" name="">
	</form>


</body>
<!-- <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script> -->
<script type="text/javascript" src="../../global/libs/jquery.js"></script>
<script type="text/javascript" src="../client/signup.client.controller.js"></script>
</html>
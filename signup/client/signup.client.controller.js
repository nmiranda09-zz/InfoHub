//register user function
function userSignup(userData){

	var data = userData;

	$.ajax({
		url: '../server/signup.server.controller.php',
		type: 'POST',
		data: data,
		dataType: 'html',
		success: function(result)
		{
			var loginResult = JSON.parse(result);
			alert(loginResult[0]);
			window.location = "../../index.php";
		},
		error: function()
		{
			alert('failed!');
		}
	});

}

function userSubmit() {

	var userData = {
		action : "userSignup",
		firstname: $('#firstname').val(),
		lastname: $('#lastname').val(),
		middlename: $('#middlename').val(),
		birthdate: $('#birthdate').val(),
		address: $('#address').val(),
		username: $('#username').val(),
		password: $('#password').val(),
		type: $('#type').val()
	}


	userSignup(userData)

	return false;
}

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
			alert(result)
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
		password: $('#password').val()
	}

	userSignup(userData)

	return false;
}
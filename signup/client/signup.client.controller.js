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
			// var loginResult = JSON.parse(result);
			// alert(loginResult[0]);
			// window.location = "../../index.php";
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
		company_name: $('#company_name').val(),
		company_address: $('#company_address').val(),
		sector: $('#sector').val(),
		username: $('#username').val(),
		password: $('#password').val()
	}


	userSignup(userData)

	return false;
}

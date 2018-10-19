function userLogin(){
	var userData = {
		username: $("#username").val(),
		password: $("#password").val()
	}

	$.ajax({
		url: '../server/login.server.controller.php',
		type: 'POST',
		data: userData,
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

	return false;
}
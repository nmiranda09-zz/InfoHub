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
			// alert(typeof(logi))
			var loginResult = JSON.parse(result);
			if(parseInt(loginResult[1]) == 1){
				window.location = "../../index.php";
			}
			else{
				alert(loginResult[0]);
			}
		},
		error: function()
		{
			alert('failed!');
		}
	});	

	return false;
}
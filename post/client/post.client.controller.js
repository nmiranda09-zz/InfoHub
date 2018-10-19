function savePost(){

	var data = {
		content: $("#mytextarea").val()
	}

	$.ajax({
		url: '../server/post.server.controller.php',
		type: 'POST',
		data: data,
		dataType: 'html',
		success: function(result)
		{
			alert(result);
		},
		error: function()
		{
			alert('failed!');
		}
	});	


	return false;
}
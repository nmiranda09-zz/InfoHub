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

	queryFeeds()

	return false;
}

function queryFeeds(){
	// var benjo = "<h1>asdasd</h1>";
	// $("#user_feed").html(benjo);

	$.ajax({
		url: '../../post/views/post-list.client.view.php',
		type: 'POST',
		data: {},
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

}
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">	
	<title></title>
	<script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
	<!-- <script type="text/javascript" src="../../global/libs/tinymce.min.js"></script> -->
	<script>
		tinymce.init({
			selector: '#mytextarea'
		});
	</script>
</head>
<body>
<h1></h1>
  <form onsubmit="return savePost()">
    <textarea id="mytextarea" placeholder="Post goes here ......"></textarea>
    <input type="submit" name="" value="test">
  </form>
</body>
	<script type="text/javascript" src="../../global/libs/jquery.js"></script>
	<script type="text/javascript" src="../client/post.client.controller.js"></script>
</html>
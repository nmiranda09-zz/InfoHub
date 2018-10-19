<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">	
	<title></title>
	<link rel="stylesheet" type="text/css" href="../../global/libs/fullcalendar-3.9.0/fullcalendar.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="../../global/libs/fullcalendar-3.9.0/fullcalendar.print.min.css"> -->
	<script type="text/javascript" src="../../global/libs/fullcalendar-3.9.0/lib/jquery.min.js"></script>
	<script type="text/javascript" src="../../global/libs/fullcalendar-3.9.0/lib/moment.min.js"></script>
	<script type="text/javascript" src="../../global/libs/fullcalendar-3.9.0/fullcalendar.min.js"></script>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>	

</head>
<body>
<h1></h1>
	<div id='calendar'></div>	

	<div id="calendarModal" class="modal fade">
	<div class="modal-dialog">
	    <div class="modal-content">
	        <div class="modal-header">
	            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span> <span class="sr-only">close</span></button>
	            <h4 id="modalTitle" class="modal-title"></h4>
	        </div>
	        <div id="modalBody" class="modal-body">
	        	<label>Start</label>
	        	<input type="date" name="" id="date_start">
	        	<label>End</label>
	        	<input type="date" name="" id="date_end">
	        	<input type="text" name="" placeholder="event_name" id="event_name">
	        	<input type="text" name="" placeholder="event_description" id="event_description">
	        	<button onclick="saveEvent()">Save</button>
	        </div>
	        <div class="modal-footer">
	            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        </div>
	    </div>
	</div>
	</div>	
</body>
	<script type="text/javascript" src="../client/event.client.controller.js"></script>
</html>
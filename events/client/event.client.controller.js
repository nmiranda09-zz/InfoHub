$(document).ready(function(){
	$(function() {

	  // page is now ready, initialize the calendar...
		$('#calendar').fullCalendar({
			dayClick: function(date, jsEvent, view) {
	            $('#modalTitle').html("<h3>Add Event</h3>");
	            // $('#modalBody').html(event.description);
	            // $('#eventUrl').attr('href',event.url);
	            $('#calendarModal').modal();
			}
		})

	});
});

function saveEvent(){
	var eventData = {
		date_start: $("#date_start").val(),
		date_end: $("#date_end").val(),
		event_name: $("#event_name").val(),
		event_description: $("#event_description").val()
	}
	$.ajax({
		url: '../server/event.server.controller.php',
		type: 'POST',
		data: eventData,
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
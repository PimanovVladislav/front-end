$("#form1").submit(function(event){
	event.preventDefault();
	$.ajax({
		url: 'js/details.php',
		method: 'post',
		data: new FormData(this),
		processData: false,
        contentType: false,
		success: function(result) {
			$('#weight').html(result+' кг.')
		}
	});
});
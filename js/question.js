jQuery(document).ready(function($) {
	$("#mc-form").submit(function() {
		var str = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "php/question.php",
			data: str,
			success: function(msg) {
				if(msg == 'OK') {
					result = '<div class="ok">Ваше сообщение отправлено</div>';
					$("#fields").hide();
				}
				else {result = msg;}
				$('#note').html(result);
			}
		});
		return false;
	});
});
jQuery(document).ready(function($) {
	$("#contact").submit(function() {
		var str = $(this).serialize();
$.ajax({
    type: 'POST',
    url: 'php/mail.php',
    data: {
      name: 'name',
      email:'email',
      subject: 'subject',
	  message:'message',
    },
    success: function() {
      alert('Ваши данные отправленыю');
    }
  });
		return false;
	});
});

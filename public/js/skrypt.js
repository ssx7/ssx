
function wyswietlZawartosc(nazwa)
{
	console.log(nazwa);
	$('#spin-hide').removeClass('hide'); //wyswietlenie spinnera
	$.ajax({
	  type: "GET",
	  url: "http://localhost/phpszymon/resources/" + nazwa + ".php",
	  cache: true,
	  success: function(data){
	  		$('#spin-hide').addClass('hide');
	     	$("#content").html(data);
	  },
	  errors: function(data){
	  	console.log(data);
	  }
	});

	$('html,body').animate({
      scrollTop: $('#content').offset().top
    }, 700);
}
var pass1;
var pass2;
$('#pass1').bind("keyup change",function(event) {
	pass1=$(this).val();
	console.log(pass1);
});

$('#pass2').bind("keyup change",function(event) {
	pass2=$(this).val();
	console.log(pass2);
	if (pass2==pass1) {
		$('#wrong_pass').removeClass('czerwi');
		$("#wrong_pass").html("<i class='fa fa-check'></i> Hasła są takie same");
		$('#wrong_pass').addClass('ziel1');
	}
	else
	{
		$('#wrong_pass').removeClass('ziel1');
		$("#wrong_pass").html("<i class='fa fa-times'></i> Hasła nie są takie same");
		$('#wrong_pass').addClass('czerwi');
	}
});

$('#formularz').submit(function(e) {
	e.preventDefault();
	$.ajax({
	  type: "POST",
	  url: $('#formularz').attr('action'),
	  data: $('#formularz').serialize(),
	  
	  success: function(data){
	  		console.log(data);
	  },
	  errors: function(data){
	  		console.log(data);
	  }
	});
});







	
	
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


$('.reslogin').hide();
$('.resemail').hide();
$('#formularz').submit(function(e) {
	$('.reslogin').hide();
	$('.resemail').hide();
	e.preventDefault();
	$.ajax({
	  type: "POST",
	  url: $('#formularz').attr('action'),
	  data: $('#formularz').serialize(),
	  
	  success: function(data){
	  		console.log(data);

	  		var check = 0;
	  		if(data.check_pass)
	  		{
	  			check += 1;
	  			$('.check_pass').text(data.check_pass);
	  		}
	  		if(data.check_user)
	  		{
	  			check += 1;
	  			$('.check_pass').text(data.check_user);
	  		}
	  		if(data.check_email)
	  		{
	  			check += 1;
	  			$('.check_pass').text(data.check_email);
	  		}

	  		if(check == 0)
	  		{
	  			$('#rejestracja').modal('hide');
	  			$('#info').modal('show');

	  		}
	  		console.log('aaaa1234');
	  },
	  error: function(data){
	  		if(data.responseJSON.check_user)
	  		{
	  			$('.reslogin').show();
	  		}
	  		if(data.responseJSON.check_pass)
	  		{

	  		}

	  		if(data.responseJSON.check_email)
	  		{
	  			$('.resemail').show();
	  		}
	  		console.log('aaaa');
	  		console.log(data);
	  }
	});
});

$('.zly-user').hide();
$('.zly-pass').hide();

$('#formularz-logowania').submit(function(e) {
	e.preventDefault();
	$('.zly-user').hide();
	$('.zly-pass').hide();
	$.ajax({
	  type: "POST",
	  url: $('#formularz-logowania').attr('action'),
	  data: $('#formularz-logowania').serialize(),
	  
	  success: function(data){
	  		
	  		var check = 0;
	  		window.location.href = 'http://localhost/phpszymon/index.php';
	  },
	  error: function(data){
	  		if(data.responseJSON.check_user != null)
	  		{
	  			$('.zly-user').show();
	  		}
	  		

	  		if(data.responseJSON.check_email)
	  		{

	  		}
	  		console.log(data.responseJSON);
	  }
	});
});
// PRZESUWANIE STRONY
$(function() {
      $('.kliknij').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

          var target = $(this.hash);

          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top - 80
            }, 700);
                
                
            return false;
          }
        }
      });
          
          
    });




	
	
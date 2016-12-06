
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


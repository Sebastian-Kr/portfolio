$(document).ready(function(e){
	$('#form1').submit(function(e){
		if(!confirm('Na pewno?')){
			e.preventDefault();
		}
	});
	$('#message').click(function(e){
		alert('Cześć');
	});
	$('#button').click(function(e){
		alert('Cześć');
	});
	$('#link').click(function(e){
		if(!confirm('Przejść tutaj?')){
			e.preventDefault();
		}
	});
	$('#change').click(function(e){
		try{
			var result = prompt('Wpisz treść:',  $(this).text() );
			if ( result ) $(this).text( result ); 
		}catch(ex){ e.preventDefault(); }
	});
	$('#submit4').click(function(e){
		$('#form1').submit();
	});
	$('#reset2').click(function(e){
		$('#form1').reset();
	});
});
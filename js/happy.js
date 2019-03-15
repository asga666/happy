jQuery(document).on('submit','#login', function(event){event.preventDefault();

	jQuery.ajax({
		url:'main.app/login.php',
		type:'POST',
		dataType: 'json',
		data: $(this).serialize(),
		beforeSend: function(){

		}
	})
	.done(function(respuesta){
		console.log(respuesta);
		if(!respuesta.error){
			location.href = 'venta.php';
		}else{
			alert("Contraseña o usuario incorrecto");
		}
	})
	.fail(function(resp){
		console.log(resp.responseText);
	})
	.always(function(){
		console.log("complete");
	});
});

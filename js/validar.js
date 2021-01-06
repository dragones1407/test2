
	$.validator.setDefaults({
		
	});

	$().ready(function() {
	
		// validate signup form on keyup and submit
		$("#registroForm").validate({
			rules: {
				 contrasena: {
					required: true,
					minlength: 5
				},
				confirm_contrasena: {
					required: true,
					minlength: 5,
					equalTo: "#contrasena"
				},
				correo: {
					required: true,
					email: true
				}
				},
			messages: {
				contrasena: {
					required: "Ingrese una contraseña",
					minlength: "La contraseña no debe ser menor a  5 caracteres"
				},
				confirm_contrasena: {
					required: "Ingrese una contraseña",
					minlength: "La contraseña no debe ser menor a  5 caracteres",
					equalTo: "Las contraseñas no coinciden"
				},
				correo: "Ingrese una cuenta de Email Valida",
				
			}
			
		});

		

		
	});

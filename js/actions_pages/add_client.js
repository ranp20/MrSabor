((d) => {
	// VALIDACIÓN DE LAS CAJAS DE TEXTO
	let inputs = document.querySelectorAll('.account--content--info--form--controls--input');
	inputs.forEach( (input) => {
		input.onfocus = () => {
			input.previousElementSibling.classList.add('focus');
			input.classList.add('focus');
		}
		input.onblur = () => {
			//SOBREESCRIBIR EL VALUE POR EL MISMO VALOR TRIMEADO...
			input.value = input.value.trim();
			//VALIDAR SI SE INGRESA NADA MÁS QUE ESPACIOS...
			if(input.value.trim().length == 0){
				input.previousElementSibling.classList.remove('focus');
				input.classList.remove('focus');
				input.previousElementSibling.classList.remove('complete');
			}else{
				input.previousElementSibling.classList.add('complete');
				input.classList.remove('focus');
			}
		}
	});
})(document);
// DEFINIR ALGUNAS RESTRICCIONES - FORMULARIO
$(document).on("keyup keypress blur change", "#telephone", function(e){
	if ($(this).val().length >= parseInt($(this).attr('maxlength')) && e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
    return false;
  }
  let value = e.target.value;
  e.target.value = value.replace(/[^A-Z\d-]/g, "");
  $(this).val(function(i, v) {
    return v.replace(/\D/g, "");
  });
});
$(document).on("keyup keypress blur change", "#postal-code", function(e){
	if ($(this).val().length >= parseInt($(this).attr('maxlength')) && e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
    return false;
  }
  let value = e.target.value;
  e.target.value = value.replace(/[^A-Z\d-]/g, "");
  $(this).val(function(i, v) {
    return v.replace(/\D/g, "");
  });
});
// AGREGAR EL NUEVO CLIENTE
$(document).on("submit", "#form-account", function(e){
	e.preventDefault();
	var formdata = $(this).serializeArray();
	$.ajax({
		url: 'php/process_account.php',
		method: 'POST',
		dataType: 'JSON',
		contentType: 'application/x-www-form-urlencoded;charset=UTF-8',
    data: formdata,
    beforeSend: function(){
     	$("#dl-mssgCli").html(`
     		<div class="dl-mssgCli__backdrop">
	     		<div class="dl-mssgCli__content">
		     		<div class="contCli-message__cont">
							<div class="contCli-message__cont--cloader">
								<div class="contCli-message__cont--cloader--loader"></div>
								<span class="contCli-message__cont--cloader--textinfo">Validando los datos...</span>
							</div>
						</div>
					</div>
     		</div>
     	`);
    },
	}).done((e) => {
		$("#dl-mssgCli").html("");
		if(e.response == "true"){
			$("#result-cli").html(`<div class='message-success'>
															<div class='message-success__content'>
																<div class='message-success__content--btnclosed' id='btnclosed'></div>
																<h2 class='message-success__content--title'>Agregado!</h2>
																<p class='message-success__content--text'>Éxito, el usuario a sido agregado correctamente!</p>
															</div>
														</div>`);
			//BLOQUEAR EL BOTÓN DEL FORMULARIO
			$(this).find("button[type='submit']").attr('disabled', true)
			$(this).find("button[type='submit']").addClass("not-touch");
			// CERRAR AUTOMÁTICAMENTE EL MENSAJE DE ERROR
			setTimeout(function(){
				$('.message-success').addClass('disabled');
				window.location.replace("login");
			}, 3000);
			// CERRAR EL MENSAJE DE ERROR
			$('#btnclosed').on('click', function(){
				$('.message-success').addClass('disabled');
			});
		}else if(e.response == "equals"){
			$(this).find("button[type='submit']").removeClass("not-touch");
			$("#result-cli").html(`<div class='message-success'>
															<div class='message-success__content'>
																<div class='message-success__content--btnclosed' id='btnclosed'></div>
																<h2 class='message-success__content--title'>Ya existe</h2>
																<p class='message-success__content--text'>Lo sentimos, el usuario ingresado a existe. <br> Por favor, pruebe con otros datos.</p>
															</div>
														</div>`);
			// CERRAR AUTOMÁTICAMENTE EL MENSAJE DE ERROR
			setTimeout(function(){
				$('.message-success').addClass('disabled');
			}, 3000);
			// CERRAR EL MENSAJE DE ERROR
			$('#btnclosed').on('click', function(){
				$('.message-success').addClass('disabled');
			});
			// CERRAR DESDE EL BACKDROP DEL MODAL
			let contModalAlert = document.querySelector(".message-success");
			contModalAlert.addEventListener("click", (e) => {
				if(e.target === contModalAlert){
					document.querySelector(".message-success").classList.add("disabled");
				}
			});
		}else{
			$(this).find("button[type='submit']").removeClass("not-touch");
			$(this).find("button[type='submit']").removeClass("not-touch");
			$("#result-cli").html(`<div class='message-success'>
															<div class='message-success__content'>
																<div class='message-success__content--btnclosed' id='btnclosed'></div>
																<h2 class='message-success__content--title'>Error!</h2>
																<p class='message-success__content--text'>Lo sentimos, hubo un error al registrar el usuario.<br> Por favor inténtelo de nuevo más tarde.</p>
															</div>
														</div>`);
			// CERRAR AUTOMÁTICAMENTE EL MENSAJE DE ERROR
			setTimeout(function(){
				$('.message-success').addClass('disabled');
			}, 3000);
			// CERRAR EL MENSAJE DE ERROR
			$('#btnclosed').on('click', function(){
				$('.message-success').addClass('disabled');
			});
			// CERRAR DESDE EL BACKDROP DEL MODAL
			let contModalAlert = document.querySelector(".message-success");
			contModalAlert.addEventListener("click", (e) => {
				if(e.target === contModalAlert){
					document.querySelector(".message-success").classList.add("disabled");
				}
			});
		}
	});
});
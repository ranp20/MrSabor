$(document).on("submit","#formlogin-admin", function(e){
	e.preventDefault();
	var frm = $(this).serializeArray();
	$.ajax({
		url: 'controllers/prcss_login-adm.php',
    type: 'POST',
    data: frm
	}).done((e) => {
		if(e != "" && e != "[]"){
			let r = JSON.parse(e);
			if(r.res == 'true'){
				$('#result-adm').html(`<div class='message-loader'>
																<div class='loader-custom'></div>
															</div>`);
				setTimeout(function(){window.location.replace("dashboard");}, 500);
			}else{
				$('#result-adm').html(`<div class='message-error'>
																<div class='message-error__content'>
																	<div class='message-error__content--btnclosed' id='btnclosed'></div>
																	<h2 class='message-error__content--title'>Datos incorrectos</h2>
																	<p class='message-error__content--text'>Lo sentimos,los datos del usuario son incorrectos o no existen...</p>
																</div>
															</div>`);
				// CERRAR AUTOMÁTICAMENTE Y/O CERRAR EL MENSAJE DE ERROR
				setTimeout(function(){$('.message-error').addClass('disabled');}, 3500);
				let containermodal = document.querySelector('.message-error');
				containermodal.addEventListener('click', e => {if(e.target === containermodal){containermodal.classList.add('disabled');}});
				$('#btnclosed').on('click', function(){$('.message-error').addClass('disabled');});
			}
		}else{
			console.log('Lo sentmos, hubo un error al procesar la información.');
		}
	});
});
/* ANIMACIÓN DE CAJAS DE TEXTO */
window.onload = function(){
	let inputs = document.querySelectorAll('.login-adm__cont--content__form--control__input');
	
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
}
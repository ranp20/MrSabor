/* VALIDAR EL USUARIO */
const form = document.querySelector('#formlogin-admin');
form.addEventListener('submit', function(e){
	e.preventDefault();

	let ajax = new XMLHttpRequest();
	let url = "php/process_login-admin.php";
	let data = new FormData(form);

	//PASAR LOS VALORES...
	ajax.open('POST', url, true);
	ajax.onreadystatechange = function () {
		
		//VALIDAR SI EL ARCHIVO PRODUCE ALGÚN ERROR...
		if(ajax.readyState == 4 && ajax.status == 200){
			let res = JSON.parse(ajax.responseText);
			
			//VALIDAR EL INGRESO DE DATOS...
			if(res.response == 'true'){
				document.querySelector('#result-adm').innerHTML = `<div class='message-loader'>
																												<div class='loader-custom'></div>
																											</div>`;
				setTimeout(function(){
					window.location.replace("../dashboard");
				}, 500);
			}else{
				document.querySelector('#result-adm').innerHTML = `<div class='message-error'>
																												<div class='message-error__content'>
																													<div class='message-error__content--btnclosed' id='btnclosed'></div>
																													<h2 class='message-error__content--title'>Datos incorrectos</h2>
																													<p class='message-error__content--text'>Lo sentimos,los datos del usuario son incorrectos o no existen...</p>
																												</div>
																											</div>`;
				/* CERRAR AUTOMÁTICAMENTE EL MENSAJE DE ERROR*/
				setTimeout(function(){
					document.querySelector('.message-error').classList.add('disabled');
				}, 3500);

				/* CERRAR EL MENSAJE DE ERROR */
					let containermodal = document.querySelector('.message-error');
					containermodal.addEventListener('click', e => {
						if(e.target === containermodal)	containermodal.classList.add('disabled');
					});
				
				/* CERRAR EL MENSAJE DE ERROR */
				document.querySelector('#btnclosed').addEventListener('click', function(){
					document.querySelector('.message-error').classList.add('disabled');
				});
			}
		}
	}
	
	//ENVIAR LOS DATOS...
	ajax.send(data);		 
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
((d) => {

	let inputs = d.querySelectorAll('.login--content--info--form--controls--input');
	
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

	/*==================================
	=            LOGIN USER            =
	==================================*/
	const form = d.querySelector("#form-login-user");
	form.addEventListener("submit", function(e){
		e.preventDefault();


		let ajax = new XMLHttpRequest();
		let url = "php/process_login.php";
		let data = new FormData(form);
		ajax.open("POST", url, true);
		ajax.onreadystatechange = function(){
			if(ajax.readyState == 4 && ajax.status == 200){
				let res = JSON.parse(ajax.responseText);

				if(res.response == "true"){
					d.querySelector('#result-cli').innerHTML = `<div class='message-loader'>
																												<div class='loader-custom'></div>
																											</div>`;
					
					setTimeout(function(){
						window.location.replace("./");
					}, 1000);

				}else{
					d.querySelector('#result-cli').innerHTML = `<div class='message-error'>
																												<div class='message-error__content'>
																													<div class='message-error__content--btnclosed' id='btnclosed'></div>
																													<h2 class='message-error__content--title'>Datos incorrectos</h2>
																													<p class='message-error__content--text'>Lo sentimos,los datos del usuario son incorrectos o no existen...</p>
																												</div>
																											</div>`;
					/* CERRAR AUTOMÁTICAMENTE EL MENSAJE DE ERROR*/
					setTimeout(function(){
						d.querySelector('.message-error').classList.add('disabled');
					}, 5000);
					
					/* CERRAR EL MENSAJE DE ERROR */
					let containermodal = d.querySelector('.message-error');
					containermodal.addEventListener('click', e => {
						if(e.target === containermodal)	containermodal.classList.add('disabled');
					});

					d.querySelector('#btnclosed').addEventListener('click', function(){
						containermodal.classList.add('disabled');
					});
				}
			}
		}

		ajax.send(data);

	});
})(document);
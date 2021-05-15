((d) => {

	const formadd = document.querySelector('#form-account');

	formadd.addEventListener('submit', function(e) {
		e.preventDefault();

			let ajax = new XMLHttpRequest();
			let url = 'php/process_account.php';
			let data = new FormData(formadd);

			ajax.open('POST', url, true);

			ajax.onreadystatechange = function (){

				if(ajax.readyState == 4 && ajax.status == 200){
					let res = JSON.parse(ajax.responseText);

					if(res.response == 'true'){
						document.querySelector('#result-cli').innerHTML = `<div class='message-success'>
																														<div class='message-success__content'>
																															<div class='message-success__content--btnclosed' id='btnclosed'></div>
																															<h2 class='message-success__content--title'>Agregado!</h2>
																															<p class='message-success__content--text'>Éxito, el usuario a sido agregado correctamente!</p>
																														</div>
																													</div>`;
						/* CERRAR AUTOMÁTICAMENTE EL MENSAJE DE ERROR*/
						setTimeout(function(){
							document.querySelector('.message-success').classList.add('disabled');
							window.location.replace("login");
						}, 3000);
						
						/* CERRAR EL MENSAJE DE ERROR */
						document.querySelector('#btnclosed').addEventListener('click', function(){
							document.querySelector('.message-success').classList.add('disabled');
						});
					}else{
						console.log('Error al agregar');
						alert('Error al agregar');
					}
				}
			}

			ajax.send(data);
	});


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
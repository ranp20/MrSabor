((d) => {

	let inputs = document.querySelectorAll('.login--content__info--form--controls--input');
	
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
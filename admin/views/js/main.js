/************************** FUNCIÓN ANÓNIMA AUTOEJECUTABLE **************************/
((d) => {
	
	/************************** 1. SLIDER ARTESANAL - SIDEBARLEFT **************************/
	const menuburgeradmin = d.querySelector('.main__sidebar-left--link-close');
	const sidebarleft = d.querySelector('.main__sidebar-left');
	const contentsidebarleft = d.querySelector('.main__sidebar-left--content');

	menuburgeradmin.addEventListener('click', function(){
		sidebarleft.classList.toggle('active');
		menuburgeradmin.classList.toggle('active');
		contentsidebarleft.classList.toggle('active');
	});
	/************************** VERIFICAR SI SE HIZO CLICK FUERA DEL SIDEBAR **************************/
	d.addEventListener('click', e => {
		if(!e.target.matches('.main__sidebar-left--content__cont-items--menu__item a')) return false;

		menuburgeradmin.classList.remove('active');
		sidebarleft.classList.remove('active');
		contentsidebarleft.classList.remove('active');
	});

	/************************** 2. OPCIONES DE SESIÓN **************************/
	const menuoptssession = d.querySelector('#menu-user');
	const contentoptsssession = d.querySelector('.main__cont--top__content--item__menu');

	menuoptssession.addEventListener('click', e => {
		contentoptsssession.classList.toggle('active');
	});
	/************************** 3. VERIFICAR SI SE HIZO CLICK FUERA DE LAS OPCIONES DE SESIÓN **************************/
	d.addEventListener('click', e => {
		if(!e.target.matches('.main__cont--top__content--item__menu a ')) return false;

		contentoptsssession.classList.remove('active');
	});


  /************************** ANIMACIÓN DE LAS CAJAS DE TEXTO - AGREGAR RESTAURANTE **************************/
  let inputs = d.querySelectorAll('.cont-modalbootstrap__form--control__input');
  let textareas = d.querySelectorAll('.cont-modalbootstrap__form--control__textarea');

  /************************ INPUTS ******************************/
  inputs.forEach( (input) => {
    input.onfocus = () => {
      input.previousElementSibling.classList.add('focus');
      input.classList.add('focus');
    }

    input.onblur = () => {

      input.value = input.value.trim();

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

  /************************ TEXTAREAS ******************************/
  textareas.forEach( (textarea) => {
    textarea.onfocus = () => {
      textarea.previousElementSibling.classList.add('focus');
      textarea.classList.add('focus');
    }

    textarea.onblur = () => {

      textarea.value = textarea.value.trim();

      if(textarea.value.trim().length == 0){
        textarea.previousElementSibling.classList.remove('focus');
        textarea.classList.remove('focus');
        textarea.previousElementSibling.classList.remove('complete');
      }else{
        textarea.previousElementSibling.classList.add('complete');
        textarea.classList.remove('focus');
      }
    }
  });


  /************************** ANIMACIÓN DE LAS CAJAS DE TEXTO - ACTUALIZAR RESTAURANTE **************************/
  let inputs_update = d.querySelectorAll('.cont-modalbootstrapupdate__form--control__input');
  let textareas_update = d.querySelectorAll('.cont-modalbootstrapupdate__form--control__textarea');

  inputs_update.forEach( (input_update) => {
    
    input_update.onfocus = () => {
      input_update.previousElementSibling.classList.add('focus');
      input_update.classList.add('focus');
    }

    input_update.onblur = () => {

      input_update.value = input_update.value.trim();

      if(input_update.value.trim().length == 0){
        input_update.previousElementSibling.classList.remove('focus');
        input_update.classList.remove('focus');
        input_update.previousElementSibling.classList.remove('complete');
      }else{
        input_update.previousElementSibling.classList.add('complete');
        input_update.classList.remove('focus');
      }
    }
  });

  /************************ TEXTAREAS ******************************/
  textareas_update.forEach( (textarea_update) => {
    textarea_update.onfocus = () => {
      textarea_update.previousElementSibling.classList.add('focus');
      textarea_update.classList.add('focus');
    }

    textarea_update.onblur = () => {

      textarea_update.value = textarea_update.value.trim();

      if(textarea_update.value.trim().length == 0){
        textarea_update.previousElementSibling.classList.remove('focus');
        textarea_update.classList.remove('focus');
        textarea_update.previousElementSibling.classList.remove('complete');
      }else{
        textarea_update.previousElementSibling.classList.add('complete');
        textarea_update.classList.remove('focus');
      }
    }
  });
})(document);











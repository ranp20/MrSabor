$(() => {
  // ------------ 1. SLIDER ARTESANAL - SIDEBARLEFT
  $(document).on('click', ".main__sidebar-left--link-close", function(){
    $(this).toggleClass('active');
    $('.main__sidebar-left').add($('.main__sidebar-left--content')).toggleClass('active');
  });
  // ------------ VERIFICAR SI SE HIZO CLICK FUERA DEL SIDEBAR
  $(document).on("click", "body", (e) => {
    if(!e.target.matches('.main__sidebar-left--content__cont-items--menu__item a')) return false;
    $('.main__sidebar-left--link-close').removeClass('active');
    $('.main__sidebar-left').add($('.main__sidebar-left--content')).removeClass('active');
  });
  // ------------ 2. OPCIONES DE SESIÓN
  $(document).on("click", "#menu-user", function(){
    $('.main__cont--top__content--item__menu').toggleClass('active');
  });
  // ------------ 3. VERIFICAR SI SE HIZO CLICK FUERA DE LAS OPCIONES DE SESIÓN
  $(document).on("click", "body", (e) =>{
    if(!e.target.matches('.main__cont--top__content--item__menu a ')) return false;
    $('.main__cont--top__content--item__menu').removeClass('active');
  });

  // ------------ ITEM SELECCIONADO DEL MENÚ EN CADA PÁGINA - SIDEBARLEFT
  var url = window.location.pathname;
  var filename = url.substring(url.lastIndexOf('/')+1);
  console.log(filename);
  $(".main__sidebar-left--content__cont-items--menu__item a").removeClass("active");
  $('.main__sidebar-left--content__cont-items--menu__item a[href="' + filename + '"]').addClass("active");
  /*
  if(filename == "ajustes" || filename == "banner-principal"){
    $(".main__sidebar-left--content__cont-items--menu__item a").removeClass("active");
    $(".nav-dashCamel--sidenav--c--cList--mOthers--item a").eq(0).addClass('active');
  }else{
  }
  */
});
// ------------ FUNCIÓN ANÓNIMA AUTOEJECUTABLE
((d) => {

  // ------------ ANIMACIÓN DE LAS CAJAS DE TEXTO - AGREGAR RESTAURANTE
  let inputs = d.querySelectorAll('.cont-modalbootstrap__form--control__input');
  let textareas = d.querySelectorAll('.cont-modalbootstrap__form--control__textarea');

  // ------------ INPUTS
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

  // ------------ TEXTAREAS
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


  // ------------ ANIMACIÓN DE LAS CAJAS DE TEXTO - ACTUALIZAR RESTAURANTE
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

  // ------------ TEXTAREAS
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
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
})(document);
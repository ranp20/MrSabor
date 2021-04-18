/************************** FUNCIÓN ANÓNIMA AUTOEJECUTABLE **************************/
((d) => {
	
	const menuburger = d.querySelector('#menu-show-home');

	menuburger.addEventListener('click', function(){
		menuburger.classList.toggle('active');
		menuburger.nextElementSibling.classList.toggle('active');
	});

	/************************** CERRAR EL SIDEBAR CUANDO SE SELECCIONA UN ELEMENTO **************************/
	d.addEventListener("click", e => {
		if(!e.target.matches('.homepage__infotop__header--contmenu__menu .homepage__infotop__header--contmenu__menu--item a')) return false;

		menuburger.classList.remove('active');
		menuburger.nextElementSibling.classList.remove('active');

	});

	/*******************************************************************************************/
	/************************** SLIDER MANUAL ARTESANAL - TESTIMONIOS **************************/
	/*******************************************************************************************/
	const sliderTestimonials = d.querySelector('#sliderTestimonials');
	let sliderTestimonialsItem = d.querySelectorAll('.user-testimonials__content--testimonials__menu--item');
	let sliderTestimonialsLast = sliderTestimonialsItem[sliderTestimonialsItem.length -1];
	const btnLeftTestimonials = d.querySelector('#slidebtnLeft');
	const	btnRightTestimonials = d.querySelector('#slidebtnRight');
	/************************** COLOCAR ÚLTIMA IMAGEN AL INICIO DEL SLIDER **************************/
	sliderTestimonials.insertAdjacentElement('afterbegin', sliderTestimonialsLast);

	function nextTestimonial(){
		sliderTestimonialsFirst = d.querySelectorAll('.user-testimonials__content--testimonials__menu--item')[0];
		sliderTestimonials.style.marginLeft = "-200%";
		sliderTestimonials.style.transition = "all 0.5s";
		setTimeout(function(){
			sliderTestimonials.style.transition = "none";
			sliderTestimonials.insertAdjacentElement('beforeend', sliderTestimonialsFirst);
			sliderTestimonials.style.marginLeft = "-100%";
		}, 500);
	};

	function beforeTestimonial(){
		let sliderTestimonialsItem = d.querySelectorAll('.user-testimonials__content--testimonials__menu--item');
		let sliderTestimonialsLast = sliderTestimonialsItem[sliderTestimonialsItem.length -1];
		sliderTestimonials.style.marginLeft = "0";
		sliderTestimonials.style.transition = "all 0.5s";
		setTimeout(function(){
			sliderTestimonials.style.transition = "none";
			sliderTestimonials.insertAdjacentElement('afterbegin', sliderTestimonialsLast);
			sliderTestimonials.style.marginLeft = "-100%";
		}, 500);
	};

	btnRightTestimonials.addEventListener('click', function(){nextTestimonial();});
	btnLeftTestimonials.addEventListener('click', function(){beforeTestimonial();});
	/************************** SLIDER AUTOMÁTICO **************************/
	setInterval(function(){
		nextTestimonial();
	}, 4000);

	/**********************************************************************************************/
	/************************** SLIDER MANUAL ARTESANAL - PLATOS EN MENU **************************/
	/**********************************************************************************************/
	const sliderMenus = d.querySelector('#sliderMenus');
	let sliderMenusItem = d.querySelectorAll('.our-menu__content--cont-our-menus__categmenu--meals__menu--item');
	let sliderMenusLast = sliderMenusItem[sliderMenusItem.length -1];
	const btnLeftMenus = d.querySelector('.slidermenus-left');
	const	btnRightMenus = d.querySelector('.slidermenus-right');
	/************************** COLOCAR ÚLTIMA IMAGEN AL INICIO DEL SLIDER **************************/
	sliderMenus.insertAdjacentElement('afterbegin', sliderMenusLast);

	function nextMenus(){
		sliderMenusFirst = d.querySelectorAll('.our-menu__content--cont-our-menus__categmenu--meals__menu--item')[0];
		sliderMenus.style.marginLeft = "-200%";
		sliderMenus.style.transition = "all 0.5s";
		setTimeout(function(){
			sliderMenus.style.transition = "none";
			sliderMenus.insertAdjacentElement('beforeend', sliderMenusFirst);
			sliderMenus.style.marginLeft = "-100%";
		}, 500);
	};

	function beforeMenus(){
		let sliderMenusItem = d.querySelectorAll('.our-menu__content--cont-our-menus__categmenu--meals__menu--item');
		let sliderMenusLast = sliderMenusItem[sliderMenusItem.length -1];
		sliderMenus.style.marginLeft = "0";
		sliderMenus.style.transition = "all 0.5s";
		setTimeout(function(){
			sliderMenus.style.transition = "none";
			sliderMenus.insertAdjacentElement('afterbegin', sliderMenusLast);
			sliderMenus.style.marginLeft = "-100%";
		}, 500);
	};

	btnRightMenus.addEventListener('click', function(){nextMenus();});
	btnLeftMenus.addEventListener('click', function(){beforeMenus();});
	/***************************************************************************************/
	/************************** SLIDER MANUAL ARTESANAL - GALERÍA **************************/
	/***************************************************************************************/
	const sliderGallery = d.querySelector('#sliderGallery');
	let sliderGalleryItem = d.querySelectorAll('.gallery__content--gallery__slider--photos__image');
	let sliderGalleryLast = sliderGalleryItem[sliderGalleryItem.length -1];
	const btnLeftGallery = d.querySelector('.sliderleft_gallery');
	const btnRightGallery = d.querySelector('.sliderright_gallery');
	/************************** COLOCAR ÚLTIMA IMAGEN AL INICIO DEL SLIDER **************************/
	sliderGallery.insertAdjacentElement('afterbegin', sliderGalleryLast);

	function nextGallery(){
		sliderGalleryFirst = d.querySelectorAll('.gallery__content--gallery__slider--photos__image')[0];
		sliderGallery.style.marginLeft = "-200%";
		sliderGallery.style.transition = "all 0.5s";
		setTimeout(function(){
			sliderGallery.style.transition = "none";
			sliderGallery.insertAdjacentElement('beforeend', sliderGalleryFirst);
			sliderGallery.style.marginLeft = "-100%";
		}, 500);
	};

	function beforeGallery(){
		let sliderGalleryItem = d.querySelectorAll('.gallery__content--gallery__slider--photos__image');
		let sliderGalleryLast = sliderGalleryItem[sliderGalleryItem.length -1];
		sliderGallery.style.marginLeft = "0";
		sliderGallery.style.transition = "all 0.5s";
		setTimeout(function(){
			sliderGallery.style.transition = "none";
			sliderGallery.insertAdjacentElement('afterbegin', sliderGalleryLast);
			sliderGallery.style.marginLeft = "-100%";
		}, 500);
	};

	btnRightGallery.addEventListener('click', function(){nextGallery();});
	btnLeftGallery.addEventListener('click', function(){beforeGallery();});

})(document);
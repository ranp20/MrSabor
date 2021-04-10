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

	/************************** SLIDER MANUAL ARTESANAL - TESTIMONIOS **************************/
	var container_testimonials = d.querySelector('.user-testimonials__content--testimonials__menu');
	var btnLeft = d.querySelector('#slidebtnLeft');
	var	btnRight = d.querySelector('#slidebtnRight');

	btnLeft.addEventListener('click', e => {
		container_testimonials.scrollLeft -= container_testimonials.offsetWidth;
	})

	btnRight.addEventListener('click', e => {
		container_testimonials.scrollLeft += container_testimonials.offsetWidth;
	})


	/************************** SLIDER MANUAL ARTESANAL - PLATOS EN MENU **************************/
	var container_menus = d.querySelector('.our-menu__content--cont-our-menus__categmenu--meals__menu');
	var btnLeft_menus = d.querySelector('.slidermenus-left');
	var	btnRight_menus = d.querySelector('.slidermenus-right');

	btnLeft_menus.addEventListener('click', e => {
		container_menus.scrollLeft -= container_menus.offsetWidth;
	})

	btnRight_menus.addEventListener('click', e => {
		container_menus.scrollLeft += container_menus.offsetWidth;
	})

	/************************** SLIDER MANUAL ARTESANAL - GALERÍA **************************/
	var container_gallery = d.querySelector('.gallery__content--gallery__slider--photos');
	var btnLeft_gallery = d.querySelector('.sliderleft_gallery');
	var btnRight_gallery = d.querySelector('.sliderright_gallery');

	btnLeft_gallery.addEventListener('click', e => {
		container_gallery.scrollLeft -= container_gallery.offsetWidth;
	});

	btnRight_gallery.addEventListener('click', e => {
		container_gallery.scrollLeft += container_gallery.offsetWidth;
	});

	// d.addEventListener("click", e => {
	// 	if(e.target.matches('.our-menu__content--cont-our-menus button')){
			
	// 		var buttonslider = e.target.getAttribute('class');
			
	// 		if(buttonslider == "our-menu__content--cont-our-menus__categmenu--meals__btns--left slidermenus-left"){
				
	// 			for (var i = 0; i < buttonslider.length; i++) {
	// 				buttonslider[i].onclick = e => {
	// 					var container_menus = e.target.parentNode.parentNode;
	// 					container_menus.scrollLeft -= container_menus.offsetWidth;
	// 				}
	// 			}
	// 		}

	// 		if(buttonslider == "our-menu__content--cont-our-menus__categmenu--meals__btns--right slidermenus-right"){
	// 			var container_menus = e.target.parentNode.parentNode;
	// 			for (var i = 0; i < buttonslider.length; i++) {
	// 				buttonslider[i].onclick = e => {
	// 					var container_menus = e.target.parentNode.parentNode;
	// 					container_menus.scrollLeft += container_menus.offsetWidth;
	// 				}
	// 			}
	// 		}
	// 	}
	// });


})(document);

// $(document).ready(function(){
// 	$('.our-menu__content--cont-our-menus').each(function(){
// 		$(this).children().children().children().children().each(function(){
// 			var buttonLeft = "slidermenus-left";
// 			var buttonRight = "slidermenus-right";

// 			if($(this).hasClass(buttonLeft)){
// 				var containerparent = $(this).parent().parent();

// 				$(this).click(function(){
// 					var LeftScroll = $(this).parent().parent().scrollLeft();
// 					var WidthOffset = $(this).parent().parent().width();
// 					LeftScroll -= WidthOffset;
// 				});
// 			}

// 			if($(this).hasClass(buttonRight)){
// 				var containerparent = $(this).parent().parent();

// 				$(this).click(function(){
// 					console.log($(this).scrollLeft());
// 					containerparent.scrollLeft += containerparent.offsetWidth;
// 				});
// 			}
// 		});
// 	});
// });
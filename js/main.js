$(() => {
	$(document).on("scroll", showHeader);
	$(document).on("click", "#menu-show-home", function(){$(this).add($(this).next()).toggleClass('active');});
	// ------------  CERRAR EL SIDEBAR CUANDO SE SELECCIONA UN ELEMENTO
	$(document).on("click", "body", function(e){
		if(!e.target.matches('.homepage__infotop__header--contmenu__menu .homepage__infotop__header--contmenu__menu--item a')) return false;
		$('#menu-show-home').add($('#menu-show-home').next()).removeClass('active');
	});
	// ------------  ABRIR Y CERRA EL MENU SECUNDARIO DE LINKS
	$(document).on("click", ".btn-moreopts", function(){
		$('.homepage__infotop__header--contmenu__menu--link--m').add($('.homepage__infotop__header--contmenu__menu--link--icon')).toggleClass('slideToggle');
	});
	// ------------  TOGGLE SHOW IN HEADERTOP
	function showHeader(){
		let headerTop = $('#homepage-infotop');
		let heroImageClass = $('.categories-food');
		let scrollTop = $("html,body").scrollTop();
		let heightHeroImage = heroImageClass.offset().top;
		let itemLinks = $('.homepage__infotop__header--contmenu__menu--link');

		if(heightHeroImage - 160 < scrollTop ){
			headerTop.addClass("showBottom");
			$.each(itemLinks, function(i,v){
				$(this).addClass("disablehover");
			});
			$(".homepage__infotop__header--contlogin__profile").addClass("scrollTop");
		}else{
			headerTop.removeClass("showBottom");
			$.each(itemLinks, function(i,v){
				$(this).removeClass("disablehover");
			});
			$(".homepage__infotop__header--contlogin__profile").removeClass("scrollTop");
		}
	}
	// ------------ CAROUSEL DE PLATOS
	var owlSliderMenus = $('#sliderMenus');
	$('#sliderMenus').owlCarousel({
		autoplay:true,
		autoplayTimeout: 6000,
		center: false,
		items: 5,
		loop: true,
		margin: 18,
		dots:true,
		nav: true,
		lazyLoad: true,
		navText: ["",""],
		responsive: {
			0: {
				nav: false,
				dots: true,
				items: 1
			},
			360: {
				nav: false,
				dots: true,
				items: 1
			},
			480: {
				nav: false,
				dots: false,
				items: 2
			},
			768: {
				nav: false,
				dots: false,
				items: 3
			},
			1024: {
				items: 4
			},
		}
	});
	$('.slidermenus-left').click(function(){
    owlSliderMenus.trigger('prev.owl.carousel', [300]);
	});
  $('.slidermenus-right').click(function(){
	  owlSliderMenus.trigger('next.owl.carousel', [300]);
	});
});
// ------------  FUNCIÓN ANÓNIMA AUTOEJECUTABLE
((d) => {

	// ------------ SLIDER MANUAL ARTESANAL - HEROIMAGES
	const sliderHeroimages = d.querySelector('#sliderHeroimages');
	let sliderHeroimagesItem = d.querySelectorAll('.heroimage--menu__item');
	let sliderHeroimagesLast = sliderHeroimagesItem[sliderHeroimagesItem.length -1];
	const btnLeftHeroimages = d.querySelector('#heroimageLeft');
	const	btnRightHeroimages = d.querySelector('#heroimageRight');
	// ------------ COLOCAR ÚLTIMA IMAGEN AL INICIO DEL SLIDER
	sliderHeroimages.insertAdjacentElement('afterbegin', sliderHeroimagesLast);
	function nextHeroimages(){
		sliderHeroimagesFirst = d.querySelectorAll('.heroimage--menu__item')[0];
		sliderHeroimages.style.marginLeft = "-200%";
		sliderHeroimages.style.transition = "all 0.5s";
		setTimeout(function(){
			sliderHeroimages.style.transition = "none";
			sliderHeroimages.insertAdjacentElement('beforeend', sliderHeroimagesFirst);
			sliderHeroimages.style.marginLeft = "-100%";
		}, 500);
	};
	function beforeHeroimages(){
		let sliderHeroimagesItem = d.querySelectorAll('.heroimage--menu__item');
		let sliderHeroimagesLast = sliderHeroimagesItem[sliderHeroimagesItem.length -1];
		sliderHeroimages.style.marginLeft = "0";
		sliderHeroimages.style.transition = "all 0.5s";
		setTimeout(function(){
			sliderHeroimages.style.transition = "none";
			sliderHeroimages.insertAdjacentElement('afterbegin', sliderHeroimagesLast);
			sliderHeroimages.style.marginLeft = "-100%";
		}, 500);
	};
	btnRightHeroimages.addEventListener('click', function(){nextHeroimages();});
	btnLeftHeroimages.addEventListener('click', function(){beforeHeroimages();});
	// ------------ SLIDER AUTOMÁTICO
	setInterval(function(){nextHeroimages();}, 6500);
	
	/*
	// ------------ SLIDER MANUAL ARTESANAL - PLATOS EN MENU
	const sliderMenus = d.querySelector('#sliderMenus');
	let sliderMenusItem = d.querySelectorAll('.our-menu__content--cont-our-menus__categmenu--meals__menu__item');
	let sliderMenusLast = sliderMenusItem[sliderMenusItem.length -1];
	const btnLeftMenus = d.querySelector('.slidermenus-left');
	const	btnRightMenus = d.querySelector('.slidermenus-right');
	// ------------ COLOCAR ÚLTIMA IMAGEN AL INICIO DEL SLIDER
	sliderMenus.insertAdjacentElement('afterbegin', sliderMenusLast);

	function nextMenus(e){
		sliderMenusFirst = d.querySelectorAll('.our-menu__content--cont-our-menus__categmenu--meals__menu__item')[0];
		sliderMenus.style.marginLeft = "-200%";
		sliderMenus.style.transition = "all 0.5s";
		setTimeout(function(){
			sliderMenus.style.transition = "none";
			sliderMenus.insertAdjacentElement('beforeend', sliderMenusFirst);
			sliderMenus.style.marginLeft = "-100%";
		}, 500);
		console.log(sliderMenusItem.length);
		// ------------ AGREGAR MEDIA QUERIES
		var movilMediaQuerie = window.matchMedia( "(min-width: 480px)" );
		var tabletMediaQuerie = window.matchMedia( "(min-width: 768px)" );
		var desktopMediaQuerie = window.matchMedia( "(min-width: 1024px)" );
		if (movilMediaQuerie.matches) {
	    sliderMenus.style.marginLeft = "-100%";
	    setTimeout(function(){
				sliderMenus.style.marginLeft = "-50%";
			}, 500);
		}
		if(tabletMediaQuerie.matches){
			sliderMenus.style.marginLeft = "-67%";
			setTimeout(function(){
				sliderMenus.style.marginLeft = "-33.3%";
			}, 500);
		}
		if(desktopMediaQuerie.matches){
			sliderMenus.style.marginLeft = "-50%";
			setTimeout(function(){
				sliderMenus.style.marginLeft = "-25%";
			}, 500);
		}
	};
	function beforeMenus(){
		let sliderMenusItem = d.querySelectorAll('.our-menu__content--cont-our-menus__categmenu--meals__menu__item');
		let sliderMenusLast = sliderMenusItem[sliderMenusItem.length -1];
		sliderMenus.style.marginLeft = "0";
		sliderMenus.style.transition = "all 0.5s";
		setTimeout(function(){
			sliderMenus.style.transition = "none";
			sliderMenus.insertAdjacentElement('afterbegin', sliderMenusLast);
			sliderMenus.style.marginLeft = "-100%";
		}, 500);
		// ------------ AGREGAR MEDIA QUERIES
		var movilMediaQuerie = window.matchMedia( "(min-width: 480px)" );
		var tabletMediaQuerie = window.matchMedia( "(min-width: 768px)" );
		var desktopMediaQuerie = window.matchMedia( "(min-width: 1024px)" );
		if (movilMediaQuerie.matches) {
	    sliderMenus.style.marginLeft = "0";
	    setTimeout(function(){
				sliderMenus.style.marginLeft = "-50%";
			}, 500);
		}
		if(tabletMediaQuerie.matches){
			sliderMenus.style.marginLeft = "0";
			setTimeout(function(){
				sliderMenus.style.marginLeft = "-33.3%";
			}, 500);
		}
		if(desktopMediaQuerie.matches){
			sliderMenus.style.marginLeft = "0";
			setTimeout(function(){
				sliderMenus.style.marginLeft = "-25%";
			}, 500);
		}
	};
	btnRightMenus.addEventListener('click', function(){nextMenus();});
	btnLeftMenus.addEventListener('click', function(){beforeMenus();});
	*/

	d.querySelector("#shopping-cart-list").addEventListener('click', function(e){
		e.preventDefault();
		let sessUser = d.querySelector("#idUSESScurrent").value;
		if(sessUser == "" || sessUser == 0){
			window.location.replace("login");
		}
	});

	// ------------* BUTTON SHOW LIST SHOPPING CART
	let containerlistcart = d.querySelector('.homepage__infotop__header--contmenucart');
	d.querySelector("#shopping-cart-list").addEventListener("click", function(){
		containerlistcart.classList.add('show');
		d.querySelector(".homepage__infotop__header--contmenucart__cont").classList.add('show');
		// d.querySelector("#chat_wstp-icon").classList.add('hidden');
		// ------------* HIDDEN CONTAINER LIST CART
		containerlistcart.addEventListener('click', e => {
			if(e.target === containerlistcart){
				containerlistcart.classList.remove('show');
				// d.querySelector("#chat_wstp-icon").classList.remove('hidden');
			};
		});
	});
})(document);

// ------------  TOGGLE SHOW INTO PROFILE ICON IF ISSET SESSION CLIENT INITIALIZED
if(document.querySelector(".homepage__infotop__header--contlogin").contains(document.querySelector(".homepage__infotop__header--contlogin__profile-yessession"))){
	let menuprofile = document.querySelector('.homepage__infotop__header--contlogin__profile-yessession');
	menuprofile.addEventListener('click', () => {
		document.querySelector('.profile-opts').classList.toggle('active');
	});
}

function showHeadersession(){
	let headerTopsession = document.querySelector('#homepage-infotop');
	let scrollTopsession = document.documentElement.scrollTop;
	let heroImageClasssession = document.querySelector('.categories-food');
	let heightHeroImagesession = heroImageClasssession.offsetTop;
	let itemLinkssession = document.querySelectorAll('.homepage__infotop__header--contmenu__menu--link');

	if(heightHeroImagesession - 160 < scrollTopsession ){
		headerTopsession.classList.add("showBottom");
		for(var i = 0; i < itemLinkssession.length; i ++){
			itemLinkssession[i].classList.add("disablehover");
		}
	}else{
		headerTopsession.classList.remove("showBottom");
		for(var i = 0; i < itemLinkssession.length; i ++){
			itemLinkssession[i].classList.remove("disablehover");
		}
	}	
}

document.addEventListener('scroll', showHeadersession);
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
	
	/******************************************************************************/
	/************************** TOGGLE SHOW IN HEADERTOP **************************/
	/******************************************************************************/
	function showHeader(){
		let headerTop = d.querySelector('#homepage-infotop');
		let scrollTop = d.documentElement.scrollTop;
		let heroImageClass = d.querySelector('.categories-food');
		let heightHeroImage = heroImageClass.offsetTop;
		let itemLinks = d.querySelectorAll('.homepage__infotop__header--contmenu__menu--link');
		let itemprofilenotsession = d.querySelector('.homepage__infotop__header--contlogin__profile-notsession');

		if(heightHeroImage - 160 < scrollTop ){
			headerTop.classList.add("showBottom");
			itemprofilenotsession.classList.add("disablehover");
			for(var i = 0; i < itemLinks.length; i ++){
				itemLinks[i].classList.add("disablehover");
			}
		}else{
			headerTop.classList.remove("showBottom");
			itemprofilenotsession.classList.remove("disablehover");
			for(var i = 0; i < itemLinks.length; i ++){
				itemLinks[i].classList.remove("disablehover");
			}
		}
	}

	d.addEventListener('scroll', showHeader);

	/*******************************************************************************************/
	/************************** SLIDER MANUAL ARTESANAL - HEROIMAGES ***************************/
	/*******************************************************************************************/
	const sliderHeroimages = d.querySelector('#sliderHeroimages');
	let sliderHeroimagesItem = d.querySelectorAll('.heroimage--menu__item');
	let sliderHeroimagesLast = sliderHeroimagesItem[sliderHeroimagesItem.length -1];
	const btnLeftHeroimages = d.querySelector('#heroimageLeft');
	const	btnRightHeroimages = d.querySelector('#heroimageRight');
	/************************** COLOCAR ÚLTIMA IMAGEN AL INICIO DEL SLIDER **************************/
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
	/************************** SLIDER AUTOMÁTICO **************************/
	setInterval(function(){
		nextHeroimages();
	}, 6500);

	/**********************************************************************************************/
	/************************** SLIDER MANUAL ARTESANAL - PLATOS EN MENU **************************/
	/**********************************************************************************************/
	const sliderMenus = d.querySelector('#sliderMenus');
	let sliderMenusItem = d.querySelectorAll('.our-menu__content--cont-our-menus__categmenu--meals__menu__item');
	let sliderMenusLast = sliderMenusItem[sliderMenusItem.length -1];
	const btnLeftMenus = d.querySelector('.slidermenus-left');
	const	btnRightMenus = d.querySelector('.slidermenus-right');
	/************************** COLOCAR ÚLTIMA IMAGEN AL INICIO DEL SLIDER **************************/
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


		/************************** AGREGAR MEDIA QUERIES **************************/
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

		/************************** AGREGAR MEDIA QUERIES **************************/
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

	setInterval(function(){
		nextMenus();
	}, 4000);


	/*************************** BUTTON SHOW LIST SHOPPING CART **********************************/
	let containerlistcart = d.querySelector('.homepage__infotop__header--contmenucart');

	d.querySelector("#shopping-cart-list").addEventListener("click", function(){
		containerlistcart.classList.add('show');
		d.querySelector(".homepage__infotop__header--contmenucart__cont").classList.add('show');
		/*************************** HIDDEN CONTAINER LIST CART **********************************/
		containerlistcart.addEventListener('click', e => {
			if(e.target === containerlistcart)	containerlistcart.classList.remove('show');
		});
	});


})(document);

/************************* TOGGLE SHOW INTO PROFILE ICON ***************************/
let menuprofile = document.querySelector('.homepage__infotop__header--contlogin__profile-yessession');
menuprofile.addEventListener('click', () => {
	document.querySelector('.profile-opts').classList.toggle('active');
});

function showHeadersession(){
	let headerTopsession = document.querySelector('#homepage-infotop');
	let scrollTopsession = document.documentElement.scrollTop;
	let heroImageClasssession = document.querySelector('.categories-food');
	let heightHeroImagesession = heroImageClasssession.offsetTop;
	let itemLinkssession = document.querySelectorAll('.homepage__infotop__header--contmenu__menu--link');
	let itemprofileyessession = document.querySelector('.homepage__infotop__header--contlogin__profile-yessession');

	if(heightHeroImagesession - 160 < scrollTopsession ){
		headerTopsession.classList.add("showBottom");
		itemprofileyessession.classList.add("disablehover");
		for(var i = 0; i < itemLinkssession.length; i ++){
			itemLinkssession[i].classList.add("disablehover");
		}
	}else{
		headerTopsession.classList.remove("showBottom");
		itemprofileyessession.classList.remove("disablehover");
		for(var i = 0; i < itemLinkssession.length; i ++){
			itemLinkssession[i].classList.remove("disablehover");
		}
	}	
}

document.addEventListener('scroll', showHeadersession);
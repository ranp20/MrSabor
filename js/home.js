$(() => {
	$(document).on("scroll", showHeader);
	$(document).on("click", "#menu-show-home", function(){$(this).add($(this).next()).toggleClass('active');});
	// ------------  CERRAR EL SIDEBAR CUANDO SE SELECCIONA UN ELEMENTO
	$(document).on("click", ".homepage__infotop__header--contmenu__menu", function(e){
		if(!e.target.matches('.homepage__infotop__header--contmenu__menu .homepage__infotop__header--contmenu__menu--item a')) return false;
		$('#menu-show-home').add($('#menu-show-home').next()).removeClass('active');
	});
	// ------------ SCROLLSMOTH PARA LOS LINK DE MENU
	const linksParent = $(".homepage__infotop__header--contmenu__menu");
  const links = linksParent.find("a");
  const items = $(".c-infTbs__c__item");
  links.eq(0).add(items.eq(0)).addClass("active");
  linksParent.on("click", "a", function(e) {
    let target = $(this.getAttribute("href"));
    let t = $(this);
    let ind = t.index();
    t.add(items.eq(ind)).addClass("active").siblings().removeClass("active");
    if (target.length) {
      e.preventDefault();
      $("html, body").stop().animate({ scrollTop: target.offset().top - 55 }, 1000 );
    }
    //NUEVAS VARIABLES BREAKPOINTS...
    let smallBp = matchMedia("(max-width: 992px)");
    let changesmall = mql => {
     if(mql.matches){
        $(this).parent().parent().toggleClass('open');
        $(this).parent().parent().parent().parent().parent().find('.overlay').toggleClass('open');
     }else{
        $(this).parent().parent().toggleClass('open'); 
        $(this).parent().parent().parent().parent().parent().find('.overlay').toggleClass('open');
     }
    }
    smallBp.addListener(changesmall);
    changesmall(smallBp);
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
	// ------------ CAROUSEL DEL HEROIMAGE
	var owlSliderHeroImages = $('#sliderHeroimages');
	$('#sliderHeroimages').owlCarousel({
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
				items: 1
			},
			768: {
				nav: false,
				dots: false,
				items: 1
			},
			1024: {
				items: 1
			},
		}
	});
	$('#heroimageLeft').click(function(){
    owlSliderHeroImages.trigger('prev.owl.carousel', [300]);
	});
  $('#heroimageRight').click(function(){
	  owlSliderHeroImages.trigger('next.owl.carousel', [300]);
	});
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
	// ------------ BUTTON LOGIN
	$(document).on('click', "#shopping-cart-list", function(e){
		e.preventDefault();
		let sessUser = $("#idUSESScurrent").value;
		if(sessUser == "" || sessUser == 0){
			window.location.replace("login");
		}
	});
	// ------------ BUTTON SHOW LIST SHOPPING CART
	$(document).on("click", ".homepage__infotop__header--contcart__shoppingcart", function(){
		$(".homepage__infotop__header--contmenucart").addClass('show');
		$(".homepage__infotop__header--contmenucart__cont").addClass('show');
	});
	// ------------ HIDDEN CONTAINER LIST CART
	$(document).on('click', ".homepage__infotop__header--contmenucart", e => {
		if(e.target === $('.homepage__infotop__header--contmenucart')){
			$('.homepage__infotop__header--contmenucart').removeClass('show');
		};
	});
	// ------------  TOGGLE SHOW INTO PROFILE ICON IF ISSET SESSION CLIENT INITIALIZED
	$(document).on("click", "homepage__infotop__header--contlogin__profile.bnt-profYesSess", function(){
		$('.profile-opts').toggleClass('active');
	});
});

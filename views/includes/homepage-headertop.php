<?php 

	session_start();
	error_reporting(0);

	$userSESS = $_SESSION['client'][0]['id'];
?>
<input type="hidden" id="idUSESScurrentPgs" value="<?= $userSESS; ?>">
<div class="homepageTwo">
	<div class="homepageTwo__infotop infotop-background">
		<div class="box">
			<div class="homepageTwo__infotop__header">
				<div id="menu-show-home"></div>
				<div class="messageAddIntoCart" id="messageAddIntoCart"></div>
				<div class="homepageTwo__infotop__header--contmenu">
					<ul class="homepageTwo__infotop__header--contmenu__menu">
						<li class="homepageTwo__infotop__header--contmenu__menu--item">
							<a href="#inicio" class="homepageTwo__infotop__header--contmenu__menu--link">Inicio</a>
						</li>
						<li class="homepageTwo__infotop__header--contmenu__menu--item">
							<a href="#categorias" class="homepageTwo__infotop__header--contmenu__menu--link">Categorías</a>
						</li>
						<li class="homepageTwo__infotop__header--contmenu__menu--item">
							<a href="#platos" class="homepageTwo__infotop__header--contmenu__menu--link">Menús</a>
						</li>
						<li class="homepageTwo__infotop__header--contmenu__menu--item">
							<a href="#contacto" class="homepageTwo__infotop__header--contmenu__menu--link">Contacto</a>
						</li>
					</ul>
				</div>
				<div class="homepageTwo__infotop__header--contlogo">
					<a href="./" class="homepageTwo__infotop__header--contlogo__link">
						<img src="admin/assets/img/logo/Logo_RESTAURANT_proyect.png" alt="" class="homepageTwo__infotop__header--contlogo__link--image">
					</a>
				</div>
				<div class='homepageTwo__infotop__header--contlogin'>
					<a href='login' class='homepageTwo__infotop__header--contlogin__profile'>
						<svg xmlns='http://www.w3.org/2000/svg' fill='#FFFFFF'  class='homepageTwo__infotop__header--contlogin__profile--icon' width='24' height='24' viewBox='0 0 24 24'><path d='M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm0 22c-3.123 0-5.914-1.441-7.749-3.69.259-.588.783-.995 1.867-1.246 2.244-.518 4.459-.981 3.393-2.945-3.155-5.82-.899-9.119 2.489-9.119 3.322 0 5.634 3.177 2.489 9.119-1.035 1.952 1.1 2.416 3.393 2.945 1.082.25 1.61.655 1.871 1.241-1.836 2.253-4.628 3.695-7.753 3.695z'/></svg>
					</a>
				</div>
				<div class='homepageTwo__infotop__header--contcart'>
					<a href='#0' class='homepageTwo__infotop__header--contcart__shoppingcart' id='shopping-cart-list'>
						<svg xmlns:dc='http://purl.org/dc/elements/1.1/' xmlns:cc='http://creativecommons.org/ns#' xmlns:rdf='http://www.w3.org/1999/02/22-rdf-syntax-ns#' xmlns:svg='http://www.w3.org/2000/svg' xmlns='http://www.w3.org/2000/svg' xmlns:sodipodi='http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd' xmlns:inkscape='http://www.inkscape.org/namespaces/inkscape' version='1.1' x='0px' y='0px' viewBox='0 0 100 125'><g transform='translate(0,-952.36218)'><path d='m 7.0159591,961.36223 c -1.6568997,0 -2.9999997,1.34315 -2.9999997,3 0,1.65685 1.3431,3 2.9999997,3 l 11.5624999,0 10.3125,48.65617 c 0.408,1.8316 1.6084,3.356 3.125,3.3438 l 50,0 c 1.5849,0.022 3.0427,-1.4149 3.0427,-3 0,-1.5851 -1.4578,-3.0224 -3.0427,-3 l -47.5625,0 -1.2813,-6 52.8438,0 c 1.3432,-0.01 2.6123,-1.0331 2.9062,-2.3437 l 6.999996,-30.00002 c 0.3901,-1.74107 -1.121996,-3.64346 -2.906196,-3.65625 l -67.4375,0 -1.625,-7.625 c -0.2839,-1.3321 -1.5755,-2.3764 -2.9375,-2.375 z m 19.8124999,16 15.625,0 1.5,9 -15.2187,0 z m 21.75,0 18.875,0 -1.5,9 -15.875,0 z m 25,0 15.6563,0 -2.0938,9 -15.0625,0 z m -43.5625,15 14.9375,0 1.5,8.99997 -14.5313,0 z m 21.0625,0 13.875,0 -1.5,8.99997 -10.875,0 z m 20,0 14.6563,0 -2.0938,8.99997 -14.0625,0 z m -28.0625,30.99987 c -5.4873,0 -10,4.5126 -10,10 0,5.4873 4.5127,10 10,10 5.4873,0 10,-4.5127 10,-10 0,-5.4873 -4.5127,-10 -10,-10 z m 28,0 c -5.4873,0 -10,4.5126 -10,10 0,5.4873 4.5127,10 10,10 5.4873,0 10,-4.5127 10,-10 0,-5.4873 -4.5127,-10 -10,-10 z m -28,6 c 2.2447,0 4,1.7553 4,4 0,2.2446 -1.7553,4 -4,4 -2.2445,0 -4,-1.7554 -4,-4 0,-2.2447 1.7555,-4 4,-4 z m 28,0 c 2.2447,0 4,1.7553 4,4 0,2.2446 -1.7553,4 -4,4 -2.2445,0 -4,-1.7554 -4,-4 0,-2.2447 1.7555,-4 4,-4 z' style='text-indent:0;text-transform:none;direction:ltr;block-progression:tb;baseline-shift:baseline;color:#000000;enable-background:accumulate;' fill='#000000' fill-opacity='1' stroke='none' marker='none' visibility='visible' display='inline' overflow='visible'/></g></svg>
					</a>
				</div>
				<?php 

					if(isset($_SESSION['client'])){
						echo "
							<div class='homepageTwo__infotop__header--contmenucart'>
								<div class='homepageTwo__infotop__header--contmenucart__cont'>
									<input type='hidden' value='{$userSESS}' id='validCliSession'>
									<div class='homepageTwo__infotop__header--contmenucart__cont--cTitle'>
										<h2>Lista en tus pedidos</h2>
									</div>
									<ul class='homepageTwo__infotop__header--contmenucart__cont--menu' id='listProds_ByClienteAdd'></ul>
								</div>
							</div>
						";
					}
				?>
			</div>	
		</div>
	</div>
</div>
<script type="text/javascript">
	((d) => {

		d.querySelector("#shopping-cart-list").addEventListener('click', function(e){
			e.preventDefault();
			let sessUser = d.querySelector("#idUSESScurrentPgs").value;
			if(sessUser == "" || sessUser == 0){
				window.location.replace("login");
			}
		});

		let containerlistcart = d.querySelector('.homepageTwo__infotop__header--contmenucart');

		d.querySelector("#shopping-cart-list").addEventListener("click", function(){
			containerlistcart.classList.add('show');
			d.querySelector(".homepageTwo__infotop__header--contmenucart__cont").classList.add('show');
			/*************************** HIDDEN CONTAINER LIST CART **********************************/
			containerlistcart.addEventListener('click', e => {
				if(e.target === containerlistcart)	containerlistcart.classList.remove('show');
			});
		});
	})(document);
</script>
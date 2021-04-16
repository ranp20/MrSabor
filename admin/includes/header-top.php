<?php 

	$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
  $url =  $actual_link . "/" ."MrSabor/admin/";

?>

<div class="main__cont--top">
	<div class="main__cont--top__content">
		<div class="main__cont--top__content--item">
			<div class="main__cont--top__content--item__date-time-top">
				<p id="date-time-headertop"></p>
			</div>
		</div>
		<div class="main__cont--top__content--item">
			<div href="#" id="menu-user" class="main__cont--top__content--item__user">
				<img src="<?php echo $url ?>assets/img/images/user_default.png" alt="photo_user-in-mrsabor">
			</div>
			<ul class="main__cont--top__content--item__menu">
				<li class="main__cont--top__content--item__menu--item"><a class="main__cont--top__content--item__menu--item__link" href="#">Mi perfil</a></li>
				<li class="main__cont--top__content--item__menu--item"><a class="main__cont--top__content--item__menu--item__link" href="<?php  echo $url ?>php/process_logout-admin.php">Cerrar sesión</a></li>
			</ul>
		</div>
	</div>
</div>
<script type="text/javascript">

	function refreshTime(){
		let currentDate = new Date(),
				year = currentDate.getFullYear(),
				month = currentDate.getMonth(),
				day = currentDate.getDay(),
				weekday = currentDate.getDay(),
				hours = currentDate.getHours(),
				minutes = currentDate.getMinutes(),
				seconds = currentDate.getSeconds();

		const weekdays = ["Domingo","Lunes","Martes","Miércoles","Jueves","viernes","Sábado"];
		const months = ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];

		if(minutes < 10){
			minutes = "0" + minutes;
		}

		if(seconds < 10){
			seconds = "0" + seconds;
		}
		
		document.querySelector('#date-time-headertop').textContent = weekdays[weekday] + ", " + 
																																day + " de " + 
																																months[month] + " del " + 
																																year + " - " + 
																																hours + " : " +
																																minutes + " : " +
																																seconds;
	}

	setInterval(refreshTime, 1000);

</script>
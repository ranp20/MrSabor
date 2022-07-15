<?php
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
$url =  $actual_link . "/" ."MrSabor/admin/views/";
?>
<div class="main__cont--top">
	<div class="main__cont--top__content">
		<div class="main__cont--top__content--item">
			<div class="main__cont--top__content--item__date-time-top">
				<p id="date-time-headertop"></p>
			</div>
		</div>
		<div class="main__cont--top__content--item" id="btn-livesiteWeb">
			<a href="./" target="_blank" class="main__cont--top__content--item__liveWeb">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 1v17h24v-17h-24zm22 15h-20v-13h20v13zm-6.599 4l2.599 3h-12l2.599-3h6.802z"/></svg>
			</a>
		</div>
		<div class="main__cont--top__content--item">
			<div href="javascript:void(0);" id="menu-user" class="main__cont--top__content--item__user">
				<img src="<?= $url;?>assets/img/images/user_default.png" alt="photo_user-in-mrsabor">
			</div>
			<ul class="main__cont--top__content--item__menu">
				<li class="main__cont--top__content--item__menu--item"><a class="main__cont--top__content--item__menu--item__link" href="#">Mi perfil</a></li>
				<li class="main__cont--top__content--item__menu--item"><a class="main__cont--top__content--item__menu--item__link" href="<?= $url;?>php/process_logout-admin.php">Cerrar sesión</a></li>
			</ul>
		</div>
	</div>
</div>
<script type="text/javascript">
	function refreshTime(){
		let currentDate = new Date(),
				year = currentDate.getFullYear(),
				month = currentDate.getMonth(),
				day = parseInt(currentDate.toDateString().slice(8, -5)),
				weekday = currentDate.getDay(),
				hours = currentDate.getHours(),
				minutes = currentDate.getMinutes(),
				seconds = currentDate.getSeconds();

		const weekdays = ["Domingo","Lunes","Martes","Miércoles","Jueves","viernes","Sábado"];
		const months = ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];

		if(day < 10){
			day = "0" + day;
		}

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
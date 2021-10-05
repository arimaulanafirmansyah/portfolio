<?php
$ip_add = $_SERVER['REMOTE_ADDR'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Rest Api AMFOCDE</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<div class="container">
		<div class="navigation">
			<ul>
				<li>
					<a href="#">
						<span class="icon"><ion-icon name="happy-outline"></ion-icon></span>
						<span class="title">AMFCODE</span>
					</a>
				</li>
				<li>
					<hr>
					<a href="#">
						<span class="icon"><ion-icon name="home-outline"></ion-icon></span>
						<span class="title">Dashboard</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="icon"><ion-icon name="call-outline"></ion-icon></span>
						<span class="title">Contact</span>
					</a>
				</li>
				<li>
					<a href="/api/regapi?key=asd">
						<span class="icon"><ion-icon name="key-outline"></ion-icon></span>
						<span class="title">Register API</span>
					</a>
				</li>
				<li>
					<a href="/api/cekapikey?apikey=asd">
						<span class="icon"><ion-icon name="key-outline"></ion-icon></span>
						<span class="title">Cek API</span>
					</a>
				</li>
				<hr>
				<li>
					<a href="social-media.php">
						<span class="icon"><ion-icon name="logo-instagram"></ion-icon></span>
						<span class="title">Sosial Media</span>
					</a>
				</li>
				<li>
					<a href="downloader.php">
						<span class="icon"><ion-icon name="cloud-download-outline"></ion-icon></span>
						<span class="title">Downloader</span>
					</a>
				</li>
				<li>
					<a href="game.php">
						<span class="icon"><ion-icon name="game-controller-outline"></ion-icon></ion-icon></span>
						<span class="title">Game</span>
					</a>
				</li>
			</ul>
		</div>

		<!-- Main -->
		<div class="main">
			<div class="topbar">
				<div class="toggle">
					<ion-icon name="menu-outline"></ion-icon>
				</div>
				<!-- Search -->
				<div class="search">
					<label>
						<input type="text" placeholder="Search Here">
						<ion-icon name="search-outline"></ion-icon>
					</label>
				</div>
				<!-- UserImg -->
				<div class="user">
					<img src="https://arimaulanafirmansyah.github.io/uploads/amfcode.gif">
				</div>
			</div>

			<!-- cards -->
			<div class="cardBox">
				<div class="card">
					<div class="numbers">1,504</div>
					<div class="cardName">Daily Views</div>
					<div class="iconBx">
						<ion-icon name="eye-outline"></ion-icon>
					</div>
				</div>
				<div class="card">
					<div class="numbers"><?php echo date('d-m-Y'); ?></div><br>
					<div class="cardName">Date</div>
					<div class="iconBx">
						<ion-icon name="calendar-outline"></ion-icon>
					</div>
				</div>
				<div class="card">
					<div class="numbers"><?php echo $ip_add; ?></div>
					<div class="cardName">Ip Address</div>
					<div class="iconBx">
						<ion-icon name="globe-outline"></ion-icon>
					</div>
				</div>
			</div>
			<!-- Detail -->
			<div class="details">
				<div class="recentText">
					<div class="cardHeader">
					<h2>DOWNLOADER API</h2>
					<a href="#" class="btn">View All</a>
					</div>
					<table>
				<a href="/api/download/ig?url=https://www.instagram.com/p/CNtpwxuH5NK/?igshid=g26k5coikzwr&apikey=APIKEY"><li>Instagram Downloader</li></a>
                <a href="/api/download/tiktok?url=https://vt.tiktok.com/ZSJhvu1AE/&apikey=APIKEY"><li>Tiktok Downloader</li></a>
				<a href="/api/download/ytmp3?url=https://youtu.be/Nq5rzeJ5Ab4&apikey=APIKEY"><li>Youtube Mp3 Downloader</li></a>
				<a href="/api/download/ytmp4?url=https://youtu.be/Nq5rzeJ5Ab4&apikey=APIKEY"><li>Youtube Mp4 Downloader</li></a>
                <a href="/api/yt/playmp3?query=Monolog-pamungkas&apikey=APIKEY"><li>Youtube Play Mp3</li></a>
               <a href="/api/yt/playmp4?query=Monolog-pamungkas&apikey=APIKEY"><li>Youtube Play Mp4</li></a>
                <a href="/api/yt/search?query=Monolog-pamungkas&apikey=APIKEY""><li>Youtube Searching</li></a>
					</table>
				</div>
			</div>

		</div>
	</div>

	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	<script>
		let toggle = document.querySelector('.toggle');
		let navigation = document.querySelector('.navigation');
		let main = document.querySelector('.main');

		toggle.onclick = function(){
			navigation.classList.toggle('amfcode');
			main.classList.toggle('amfcode');
		}


		let list = document.querySelectorAll('.navigation li');
		function activeLink(){
			list.forEach((item) =>
			item.classList.remove('amfcode'));
			this.classList.add('amfcode')
		}
		list.forEach((item) =>
			item.addEventListener('mouseover',activeLink))
	</script>
</body>
</html>
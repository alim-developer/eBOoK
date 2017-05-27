<?php
	session_start();
?>


<!DOCTYPE html>
<html>
	<head>
		<title>eBOoK</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
		<link rel="shortcut icon" href="assets/image/logoBook.png">
		
		<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="assets/css/custom/style.css">
	</head>
	<body>
		<section id="header">
			<div class="container-fluid">
				<div class="container">
					<div class="help">
						<ul>
							<li>Tel:<a href="#">+994505484848</a></li>
							<!-- <li><a href="#">Kömək</a></li> -->
						</ul>
						<div class="clearFix"></div>
					</div>
					<div class="clearFix"></div>
					<div class="head">
						<div class="logo">
							<a href="index.php">
								<img src="assets/image/logoBook2.png">
							</a>
							<form action="search.php" method="POST">
								<input type="text" placeholder="Kitab axtarın və ya ISBN nömrəsi daxil edin" name="search">
								<input type="submit" name="submit" class="fa-search" value="&#xf002;">
							</form>
							<ul>
								<li><a href="index.php">eBOoK</a></li>
							</ul>
						</div>
						<!-- Burada eger user daxil olubsa signin clasi eger daxil olmayibsa profile clasi aktiv olmalidi-->
						<?php
							if(isset($_SESSION['users'])){ ?>
								<div class="mobileVersion2">
									<i class="fa fa-bars fa-2x" aria-hidden="true"></i>
									<div class="mobile">
										<ol>
											<li><?=$_SESSION['users'];?></li>
										</ol>
										<form action="search.php" method="POST">
											<input type="text" placeholder="Kitab axtarın" name="search">
											<input type="submit" name="submit" class="fa-search" value="&#xf002;">
										</form>
										<ul>
											<li><a href="profil.php">Hesaba düzəliş et</a></li>
											<li><a href="profil.php">Kitab əlavə et</a></li>
											<li><a href="logout.php">Çıx</a></li>
										</ul>
									</div>
								</div>
								<div class="profil">
									<button><?=$_SESSION['users'];?> &nbsp;<i class="fa fa-angle-down" aria-hidden="true"></i></button>
									<ul>
										<li><a href="profil.php">Hesaba düzəliş et</a></li>
										<li><a href="profil.php">Kitab əlavə et</a></li>
										<li><a href="logout.php">Çıx</a></li>
									</ul>
								</div>

							<?php
							}else{  ?>
								<div class="signin">
									<form action="register.php">
										<button type="submit" name="">Qeydiyyat</button>
										<button type="submit" name="">Daxil ol</button>
									</form>
								</div>
								<div class="mobileVersion">
									<i class="fa fa-bars fa-2x" aria-hidden="true"></i>
									<div class="mobile">
										<form action="search.php">
											<input type="text" placeholder="Kitab axtarın" name="">
											<input type="submit" class="fa-search" value="&#xf002;">
										</form>
										<form action="register.php">
											<button type="submit" name="">Qeydiyyat</button>
											<button type="submit" name="">Daxil ol</button>
										</form>
									</div>
								</div>
						<?php
							}
						?>

						<!-- <div class="mobileVersion2">
							<i class="fa fa-bars fa-2x" aria-hidden="true"></i>
							<div class="mobile">
								<ol>
									<li>Taleh</li>
								</ol>
								<form action="search.php">
									<input type="text" placeholder="Kitab axtarın" name="">
									<input type="submit" class="fa-search" value="&#xf002;">
								</form>
								<ul>
									<li><a href="profil.php">Hesaba düzəliş et</a></li>
									<li><a href="profil.php">Kitab əlavə et</a></li>
									<li><a href="#">Çıx</a></li>
								</ul>
							</div>
						</div>
						<div class="profil">
							<button>Taleh &nbsp;<i class="fa fa-angle-down" aria-hidden="true"></i></button>
							<ul>
								<li><a href="profil.php">Hesaba düzəliş et</a></li>
								<li><a href="profil.php">Kitab əlavə et</a></li>
								<li><a href="#">Çıx</a></li>
							</ul>
						</div> -->
						<div class="clearFix"></div>
					</div>
					<div class="menu">
						<ul>
							<li>Kitablar &nbsp;<i class="fa fa-angle-down" aria-hidden="true"></i>
								<ul>
									<h4>Kateqoriyalar</h4>
									<li><a href="category.php?category=bedii">Bədii</a></li>
									<li><a href="category.php?category=roman">Roman</a></li>
									<li><a href="category.php?category=dedektiv">Detektiv</a></li>
									<li><a href="category.php?category=usaq">Uşaq</a></li>
									<li><a href="category.php?category=elmi">Elmi fantastik</a></li>
									<li><a href="category.php?category=biznes">Biznes</a></li>
									<li><a href="category.php?category=gulmeli">Gülməli</a></li>
									<ol>
										<li><a href="all-books.php">Hamısına bax</a></li>
									</ol>
								</ul>
							</li><!--
							<li>Əlaqə &nbsp;<i class="fa fa-angle-down" aria-hidden="true"></i>
							</li> -->
						</ul>
						<div class="clearFix"></div>
					</div>
				</div>
			</div>
		</section>
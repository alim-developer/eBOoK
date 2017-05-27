
<?php

	include 'header.php';
	include 'admin/db.php';
	if(isset($_SESSION['usersId'])){
		$userid = $_SESSION['usersId'];


		if(isset($_POST['submit'])){

			// function gonder($gelen){
			// 	$sil = array("\"", "\\", "/", "*", "'", "=", "-", "#", ";", "<", ">", "+", "%");
			// 	$gelen = str_replace($sil, "", $gelen);
			// }


			$username = htmlspecialchars(trim($_POST['username']));
			// gonder($username);
			$email = htmlspecialchars(trim($_POST['email']));
			// gonder($email);
			$password = htmlspecialchars(trim($_POST['password']));
			// gonder($password);

			if(!empty($username) && !empty($email) && !empty($password)){
				if(strlen($password) >= 6){
					$sql2 = "UPDATE users SET username='$username', email='$email', password='$password' WHERE id='$userid';";
					$query2 = mysqli_query($connect, $sql2);

					if($query2){
						unset($_POST['submit']);
					}

				}else{
					$_SESSION['empty'] = 'Şifrə çox qısadır (min: 6)';
				}
			}else{
				$_SESSION['empty'] = 'Bütün xanaları doldurun';
			}
		}


		$sql = "SELECT * FROM users WHERE id ='$userid' ;";
		$query = mysqli_query($connect, $sql);
		$row = mysqli_fetch_assoc($query);
		$_SESSION['users'] = $row['username'];
	}

?>

	<section id="profil">
		<div class="container_fluid">
			<div class="container">
				<div class="col-lg-2 col-md-2 col-sm-3 hidden-xs bar">
					<ul>
						<li>Hesaba düzəliş et</li>
						<li>Kitab əlavə et</li>
						<li><a href="logout.php">Hesabdan çıx</a></li>
					</ul>
				</div>
				<div class="col-lg-10 col-md-10 col-sm-9 col-xs-12 result">
					<ul>
						<li>Hesaba düzəliş et</li>
						<li>Kitab əlavə et</li>
						<li><a href="logout.php">Hesabdan çıx</a></li>
					</ul>
					<div class="usersEdit">
						<form action="profil.php" method="POST">
							<label>Yeni adınızı daxil edin:</label>
							<input type="text" name="username" value="<?=$row['username'];?>">
							<label>Yeni emailinizi daxil edin:</label>
							<input type="text" name="email" value="<?=$row['email'];?>">
							<label>Yeni şifrənizi daxil edin:</label>
							<input type="password" name="password" value="<?=$row['password'];?>">
							<input type="submit" name="submit" value="Göndər">
							<div class="clearFix"></div>
							<?php if(isset($_SESSION['empty'])){
								echo "<p style='color: red;'>".$_SESSION['empty']."</p>";
								} unset($_SESSION['empty']);

							?> 
						</form>
					</div>
					<div class="addBook">
						<form action="fileUpload.php" id="listbook" method="POST" enctype="multipart/form-data">
							<div class="cent">
							<?php
								if (isset($_SESSION['error2'])) { ?>
									<p style="color: red;"><?=$_SESSION['error2'];?></p>
							<?php
								}
								unset($_SESSION['error2']);
							?>
								<label>Kitab adını daxil edin: <span style="color: red;">&starf;</span></label>
								<input type="text" name="bookName">
								<label>Müəllif adını daxil edin: <span style="color: red;">&starf;</span></label> 
								<input type="text" name="authorName">
								<label>Kitabın janrını seçin: <span style="color: red;">&starf;</span></label>
								<select name="bookType" form="listbook">
									<option value="none">Seç</option>
									<option value="Bədii">Bədii</option>
									<option value="Roman">Roman</option>
									<option value="Detektiv">Detektiv</option>
									<option value="Uşaq">Uşaq</option>
									<option value="Elmi fantastik">Elmi fantastik</option>
									<option value="Biznes">Biznes</option>
									<option value="Gülməli">Gülməli</option>
								</select>
								<label>Kitabın dilini seçin: <span style="color: red;">&starf;</span></label>
								<select name="bookLang" form="listbook">
									<option value="none">Seç</option>
									<option value="az">Azərbaycanca</option>
									<option value="tr">Türkcə</option>
									<option value="en">İngilis</option>
									<option value="ru">Rus</option>
									<option value="fr">Fransız</option>
								</select>
								<label>ISBN nömrəsini daxil edin:</label>
								<input type="text" name="isbn">
								<label>Kitabı yükləyin (pdf formada) <span style="color: red;">&starf;</span></label>
								<input type="file" name="pdfFile">
								<label>Kitaba üzlük yükləyin (.jpg, .png) <span style="color: red;">&starf;</span></label>
								<input type="file" name="imageFile">
							</div>
							<label>Kitab haqqında qısa məlumat daxil edin: (min: 1000 simvol) <span style="color: red;">&starf;</span></label>
							<textarea name="bookInfo" maxlength="2000"></textarea>
							<input type="submit" name="submitFile" value="Göndər">
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php
	include 'footer.php';
?>
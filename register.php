<?php
	include 'header.php';
?>

	<section id="register">
		<div class="container-fluid">
			<div class="container">
				<div class="row">
					<div style="z-index: 11" class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<h4>Daxil ol</h4>
						<form action="checkSign.php" method="POST">
							<label>İstifadəçi adı</label>
							<input type="text" name="username">
							<label>Şifrə</label>
							<input type="password" name="password">
							<input type="submit" name="submit2" value="Daxil ol" name="">
							<span>
								<?php
									if(isset($_SESSION['error'])){  ?>
									<p style="color: red; display: inline-block;"><?=$_SESSION['error'];?></p>

								<?php } unset($_SESSION['error']); ?>
							</span>
						</form>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
						<div class="registerForm">
							<h4>Qeydiyyatdan keç</h4>
							<form action="checkSign.php" method="POST">
								<div>
									<label>İstifadəçi adı</label>
									<input type="text" name="username">
									<label>Şifrə</label>
									<input type="password" name="password">

									<?php
										if(isset($_SESSION['empty'])){  ?>
										<p style="color: red;"><?=$_SESSION['empty'];?></p>

									<?php } unset($_SESSION['empty']); ?>
									
								</div>
								<div>
									<label class="email">Email</label>
									<input type="email" name="email">
									<label>Təkrar şifrə</label>
									<input type="password" name="repassword">
									<input type="submit" value="Göndər" name="submit">
								</div>
							</form>
							<li class="clearFix"></li>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


<?php
	include 'footer.php';
?>
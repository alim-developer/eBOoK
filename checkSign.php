

<?php
include 'admin/db.php';
if(isset($_POST['submit'])){
	session_start();
	$username = htmlspecialchars($_POST['username']);
	$password = htmlspecialchars($_POST['password']);
	$repassword = htmlspecialchars($_POST['repassword']);
	$email = htmlspecialchars($_POST['email']);
	if(!empty($username) && !empty($password) && !empty($repassword) && !empty($email)){
		if(strlen($password) >= 6){
			if($password == $repassword){
				//bazada email ve ya username olub olmadigini yoxlamaq
				$sql = "SELECT * FROM users WHERE username='$username' || email='$email';";
				$query = mysqli_query($connect, $sql);
				while ($row = mysqli_fetch_assoc($query)) {
					$a = 1;
				}
				if(!@$a == 1){
					$sql2 = "INSERT INTO users(username,email,password) VALUES ('$username','$email','$password');";
					$query2 = mysqli_query($connect, $sql2);

					if($query2){
						$sql3 = "SELECT * FROM users Order By id DESC;";
						$query3 = mysqli_query($connect, $sql3);
						$row3 = mysqli_fetch_assoc($query3);
						$_SESSION['users'] = $row3['username'];
						$_SESSION['usersId'] = $row3['id'];
						header('Location: doneRegister.php');
					}else{
						$_SESSION['empty'] = 'Qeydiyyat zamanı xəta baş verdi';
						header('Location: register.php');
					}
				}else{
					$_SESSION['empty'] = 'Istifadəçi adı və ya email artıq mövcuddur';
					header('Location: register.php');
				}
			}else{
				$_SESSION['empty'] = 'Şifrələr uyuşmur';
				header('Location: register.php');
			}
		}else{
			$_SESSION['empty'] = 'Şifrə çox qısadır (min: 6)';
			header('Location: register.php');
		}
	}else{
		$_SESSION['empty'] = 'Bütün xanaları doldurun';
		header('Location: register.php');
	}
}


if(isset($_POST['submit2'])){
	session_start();
	$username = htmlspecialchars($_POST['username']);
	$password = htmlspecialchars($_POST['password']);
	if(!empty($username) && !empty($password)){
		if(strlen($password) >= 6){
			$sql4 = "SELECT * FROM users WHERE username='$username' && password='$password';";
			$query4 = mysqli_query($connect, $sql4);
			while ($row4 = mysqli_fetch_assoc($query4)) {
				$a = 1;
				$b = $row4['username'];
				$userid = $row4['id'];
			}
			if(@$a == 1){
				$_SESSION['users'] = $b;
				$_SESSION['usersId'] = $userid;
				header('Location: index.php');
			}else{
				$_SESSION['error'] = 'Istifadəçi adı və ya şifrə düzgün deyil';
				header('Location: register.php');
			}
		}else{
			$_SESSION['error'] = 'Şifrə çox qısadır (min: 6)';
			header('Location: register.php');
		}
	}else{
		$_SESSION['error'] = 'Bütün xanaları doldurun';
		header('Location: register.php');
	}
}


// $engelle = array("\"", "\\", "/", "*", "'", "=", "-", "#", ";", "<", ">", "+", "%");
// $id = str_replace($engelle, "", $id); // works!
// $veri = str_replace($engelle, "", $veri); // works!

?>
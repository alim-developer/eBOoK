<?php

if(isset($_POST['submitFile'])){
	session_start();
	include 'admin/db.php';

	$bookName = htmlspecialchars(trim($_POST['bookName']));
	$authorName = htmlspecialchars(trim($_POST['authorName']));
	$isbn = htmlspecialchars(trim($_POST['isbn']));
	$pdfFile = $_FILES['pdfFile'];
	$imageFile = $_FILES['imageFile'];
	$bookInfo = htmlspecialchars(addslashes(trim($_POST['bookInfo'])));
	$bookType = $_POST['bookType'];
	$bookLang = $_POST['bookLang'];

	$userid = $_SESSION['usersId'];

	if (!empty($bookName) && !empty($authorName) && !empty($bookInfo)) {
		if (strlen($isbn) == 0 || strlen($isbn) == 13) {
			if ($bookType != 'none') {
				if ($bookLang != 'none') {
					if(strlen($bookInfo) >= 1000){
						if (isset($_FILES['pdfFile']) && isset($_FILES['imageFile'])) {
							$pdfXeta = $pdfFile['error'];
							$imageXeta = $imageFile['error'];

							if ($pdfXeta == 0 && $imageXeta == 0) {
								$pdfSize = $pdfFile['size'];
								$imageSize = $imageFile['size'];
								if ($pdfSize < 1024*1024*10) {
									if ($imageSize < 1024*1024*2){
										$pdfType = $pdfFile['type'];
										$imageType = $imageFile['type'];
										if ( $pdfType == 'application/pdf') {
											if ($imageType == 'image/png' || $imageType == 'image/jpeg') {
												$pdfExtension = explode('.', $pdfFile['name']);
												$pdfExtension = $pdfExtension[count($pdfExtension)-1];
												$imageExtension = explode('.', $imageFile['name']);
												$imageExtension = $imageExtension[count($imageExtension)-1];
												
												$pdf = $pdfFile['tmp_name'];
												$image = $imageFile['tmp_name'];
												$namepdf = rand().rand() . '.' . $pdfExtension;
												$nameimage = rand().rand() . '.' . $imageExtension;
												copy($pdf, 'assets/pdfs/' . $namepdf);
												copy($image, 'assets/image/books/' . $nameimage);

												$sql = "INSERT INTO books_data(bookName,authorName,bookInfo,book_status,isbn_number,language,imgLocate,pdfLocate,user_id) VALUES ('$bookName','$authorName','$bookInfo','$bookType','$isbn','$bookLang','$nameimage','$namepdf','$userid') ;";
												$query = mysqli_query($connect, $sql);
												header('Location: index.php');
											}else{
												$_SESSION['error2'] = "Yüklədiyiniz üzlük png və jpg formatında olmalıdır";
												header('Location: profil.php');
											}
										}else{
											$_SESSION['error2'] = "Yüklədiyiniz kitabın genişlənməsi düz deyil";
											header('Location: profil.php');
										}
									}else{
										$_SESSION['error2'] = "Üzlük şəklinin ölçüsü 2 mb-dan artıq olmamalıdır";
										header('Location: profil.php');
									}
								}else{
									$_SESSION['error2'] = "Kitabın həcmi 10 mb-dan artıq olmamalıdır";
									header('Location: profil.php');
								}
							}else{
								$_SESSION['error2'] = "Kitab və ya üzlük şəkili yüklənmədi";
								header('Location: profil.php');
							}
						}else{
							$_SESSION['error2'] = "Kitab yüklənmədi";
							header('Location: profil.php');
						}
					}else{
						$_SESSION['error2'] = "Kitab haqqında məlumat 1000 simvoldan az olmamalıdır";
						header('Location: profil.php');
					}
				}else{
					$_SESSION['error2'] = "Kitabın dilini seçin";
					header('Location: profil.php');
				}
			}else{
				$_SESSION['error2'] = "Kitabın janrını seçin";
				header('Location: profil.php');
			}
		}else{
			$_SESSION['error2'] = "ISBN nömrəsi 13 simvoldan ibarət olmalıdır";
			header('Location: profil.php');
		}
	}else{
		$_SESSION['error2'] = "Ulduz olan xanaları tam doldurun";
		header('Location: profil.php');
	}


}else{
	header('Location: index.php');
}



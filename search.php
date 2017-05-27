<?php
	include 'header.php';
	include 'admin/db.php';

	if (isset($_POST['submit'])) {
		$search =  htmlspecialchars(trim($_POST['search']));
		$sil = array("\"", "\\", "/", "*", "'", "=", "-", "#", ";", "<", ">", "+", "%");
		$search = str_replace($sil, "", $search);
		$count = strlen($search);
		if ($count != 0) {
			$sql = "SELECT * FROM books_data WHERE bookName  LIKE "."'%".$search."%' || authorName LIKE "."'%".$search."%' || isbn_number LIKE "."'%".$search."%' ORDER BY id DESC ;";
			$query = mysqli_query($connect, $sql);
			$a = mysqli_num_rows($query);

	

?>
		
	<section id="allBooks">
		<div class="container-fluid">
			<div class="container">
				<div class="row">
				<?php
					while ( $result = mysqli_fetch_assoc($query)) {  

						$text = substr($result['bookInfo'], 0, 300) . "...";
						$user = $result['user_id'];
						$image = 'assets/image/books/'; 
						$image = $image . $result['imgLocate'];

						$sql2 = "SELECT username FROM users WHERE id='$user'";
						$query2 = mysqli_query($connect, $sql2);
						$result2 = mysqli_fetch_assoc($query2);
						?>

					<div class="col-md-offset-2 col-md-8 listBook">
						<div class="image">
							<img src="<?=$image;?>">
						</div>
						<div class="textBook">
							<h3><?=$result['bookName'];?></h3>
							<h4><?=$result['authorName'];?></h4>
							<h5><span>İstifadəçi:</span> &nbsp; <?=$result2['username'];?></h5>
							<p><?=$text;?></p>
							<a href="about.php?id=<?=$result['id'];?>">Ətraflı &nbsp;<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
							<li class="clearFix"></li>
						</div>
						<li class="clearFix"></li>
					</div>

				<?php	
					}
					if ($a == 0) { ?>
					
					<h6 style="text-align: center; font-size: 25px;">Kitab tapılmadı</h6>

				<?php
					}
				
				?>
				</div>
			</div>
		</div>
	</section>

<?php
		}else{ ?>
		<h6 style="margin:50px 0; text-align: center; font-size: 25px;">Kitab tapılmadı</h6>
<?php
		}

	}else{
		header('Location: index.php');
	}
	include 'footer.php';
?>
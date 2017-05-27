<?php
	include 'header.php';
	include 'admin/db.php';
	$category = $_GET['category'];

	switch ($category) {
		case 'bedii':
			$janr = "Bədii";
			$title = "Bədii əsərlər";
			$sql = "SELECT * FROM books_data WHERE book_status='$janr' ;";
			$query = mysqli_query($connect, $sql);
			break;
		case 'roman':
			$janr = "Roman";
			$title = "Romanlar";
			$sql = "SELECT * FROM books_data WHERE book_status='$janr' ;";
			$query = mysqli_query($connect, $sql);
			break;
		case 'dedektiv':
			$janr = "Detektiv";
			$title = "Dedektiv əsərlər";
			$sql = "SELECT * FROM books_data WHERE book_status='$janr' ;";
			$query = mysqli_query($connect, $sql);
			break;
		case 'usaq':
			$janr = "Uşaq";
			$title = "Uşaq üçün əsərlər";
			$sql = "SELECT * FROM books_data WHERE book_status='$janr' ;";
			$query = mysqli_query($connect, $sql);
			break;
		case 'elmi':
			$janr = "Elmi fantastik";
			$title = "Elmi fantastik əsərlər";
			$sql = "SELECT * FROM books_data WHERE book_status='$janr' ;";
			$query = mysqli_query($connect, $sql);
			break;
		case 'biznes':
			$janr = "Biznes";
			$title = "Biznes yönümlü əsərlər";
			$sql = "SELECT * FROM books_data WHERE book_status='$janr' ;";
			$query = mysqli_query($connect, $sql);
			break;
		case 'gulmeli':
			$janr = "Gülməli";
			$title = "Gülməli əsərlər";
			$sql = "SELECT * FROM books_data WHERE book_status='$janr' ;";
			$query = mysqli_query($connect, $sql);
			break;
		
		default:
			// header("Location: index.php");
			break;
	}
?>
	
	<section id="category">
		<div class="container">
			<div class="list1">
				<div class="row title">
					<div class="col-md-12">
						<h4><?php echo @$title;?></h4>
					</div>
				</div>
				<div class="row ebooks">
					<?php
						while ( @$result = mysqli_fetch_assoc($query)) { 
							$image = 'assets/image/books/'; 
							$image = $image . $result['imgLocate'];

						?>
							<div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 book">
								<a href="about.php?id=<?=$result['id'];?>">
									<div class="img">
										<img src="<?=$image;?>">
										<div class="lang"><?=$result['language'];?></div>
									</div>
									<h4><?=$result['bookName'];?></h4>
									<p><?=$result['authorName'];?></p>
									<p>(see: <?=$result['see'];?>)</p>
									<button>Ətraflı &nbsp;<i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
								</a>
							</div>
					
					<?php
						}
						@$a = mysqli_num_rows($query);
						if ($a == 0) {  ?>
							<h6 style="margin: 50px; text-align: center; font-size: 25px;">Bu növdən əsər saytda yoxdur</h6>
					<?php
						}
					?>
				</div>
			</div>
	</section>
	
<?php
	include 'footer.php';
?>
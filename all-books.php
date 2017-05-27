<?php
	include 'header.php';
	include 'admin/db.php';
	$sql = "SELECT * FROM books_data ORDER BY id DESC";
	$query = mysqli_query($connect, $sql);


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
				
				?>
				</div>
			</div>
		</div>
	</section>

<?php
	include 'footer.php';
?>
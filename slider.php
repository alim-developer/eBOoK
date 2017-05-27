<div class="container">
	<div class="slider">

		<?php

			include 'admin/db.php';
			$sql = "SELECT * FROM books_data ORDER BY id DESC LIMIT 4 ;";
			$query = mysqli_query($connect, $sql);
			// var_dump($query);
			while($result = mysqli_fetch_assoc($query)){   
				$yol = 'assets/image/books/'; 
				$yol = $yol . $result['imgLocate'];

				$text = substr($result['bookInfo'], 0, 580) . "...";
		?>
			
			<div class="row slide">
				<div class="col-lg-4 col-md-4 col-sm-4 bookImg">
					<a href="about.php">
						<img src="<?=$yol?>">
					</a>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 bookDetail">
					<h3><?=$result['bookName'];?></h3>
					<h4><?=$result['authorName'];?></h4>
					<p class="text"><?=$text;?></p>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-2 bookButton">
					<a href="about.php?id=<?=$result['id'];?>">Ətraflı &nbsp;<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
				</div>
			</div>

		<?php
			}

		?>

	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="slideCount">
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<li class="clearFix"></li>
			</div>
		</div>
	</div>
</div>
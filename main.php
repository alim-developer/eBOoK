<div class="container">
	<div class="list1">
		<div class="row title">
			<div class="col-md-12">
				<h4>Ən yenilər</h4>
			</div>
		</div>
		<div class="row ebooks">
		<?php
			include 'admin/db.php';
			$sql = "SELECT * FROM books_data ORDER BY id DESC LIMIT 15";
			$query = mysqli_query($connect, $sql);

			while ($result = mysqli_fetch_assoc($query)) { 
				$yol = 'assets/image/books/'; 
				$yol = $yol . $result['imgLocate'];
			 ?>
				<div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 book">
					<a href="about.php?id=<?=$result['id'];?>">
						<div class="img">
							<img src="<?=$yol?>">
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
		?>

		</div>
	</div>
	<div class="list2">
		<div class="row title">
			<div class="col-md-12">
				<h4>Ən çox oxunanlar</h4>
			</div>
		</div>
		<div class="row ebooks">
		
		<?php
			$sql = "SELECT * FROM books_data ORDER BY see DESC LIMIT 15";
			$query = mysqli_query($connect, $sql);

			while ($result = mysqli_fetch_assoc($query)) { 
				$yol = 'assets/image/books/'; 
				$yol = $yol . $result['imgLocate'];
			 ?>
				<div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 book">
					<a href="about.php?id=<?=$result['id'];?>">
						<div class="img">
							<img src="<?=$yol?>">
							<div class="lang"><?=$result['language'];?></div>
						</div>
						<h4><?=$result['bookName'];?></h4>
						<p><?=$result['authorName'];?></p>
						<p>(baxış: <?=$result['see'];?>)</p>
						<button>Ətraflı &nbsp;<i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
					</a>
				</div>

		<?php
			}
		?>

		</div>
	</div>
</div>
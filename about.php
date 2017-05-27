<?php
	include 'header.php';
	include 'admin/db.php';

	$id = $_GET['id'];
	$sql = "SELECT * FROM books_data WHERE id='$id'";
	$query = mysqli_query($connect, $sql);
	$result = mysqli_fetch_assoc($query);

	$see = $result['see'];
	$see++;
	$sql3 = "UPDATE books_data SET see='$see' WHERE id='$id';";
	$query3 = mysqli_query($connect, $sql3);


	$image = 'assets/image/books/'; 
	$image = $image . $result['imgLocate'];
	$endir = 'assets/pdfs/'; 
	$endir = $endir . $result['pdfLocate'];

	$user = $result['user_id'];
	$sql2 = "SELECT username FROM users WHERE id='$user'";
	$query2 = mysqli_query($connect, $sql2);
	$result2 = mysqli_fetch_assoc($query2);
?>
	
	<section id="about">
		<div class="container-fluid">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-4 col-xs-10 book">
						<img src="<?=$image;?>">
						<h3><?=$result['bookName'];?></h3>
						<h4><?=$result['authorName'];?></h4>

						<div style="padding: 20px 0;" class="downloadPDF hidden-lg hidden-md">
							<a href="#" download="download">Endir</a>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12 text">
						<h3><span>Yükləyən:</span> &nbsp;<?=$result2['username'];?></h3>
						<h4>#<?=$result['book_status'];?> </h4>
						<h5>Kitab haqqında</h5>
						<p><?=$result['bookInfo'];?></p>
						<!-- <ul>
							<li><i class="fa fa-file-o fa-3x" aria-hidden="true"></i></li>
							<li>100 səhivə</li>
						</ul> -->
					</div>
					<div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
						<div class="downloadPDF">
							<a href="<?=$endir;?>" download="<?=$result['pdfLocate'];?>">Endir</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php
	include 'footer.php';
?>
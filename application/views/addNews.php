<?php
	/*if(isset($_POST['post'])){
		$title = '\'' . $_POST['title'] . '\'';
		$details = '\'' . $_POST['details'] . '\'';
		$file_size = $_FILES['picture']['size'];
		$file_name = $_FILES['picture']['name'];
		$file_ext = end(explode('.', $file_name));
		//$username = '\'' . $_SESSION['username'] . '\'';

		$allowedExt = array('gif', 'jpeg', 'jpg', 'png');
		if(in_array($file_ext, $allowedExt) && $file_size < 2000000){

			/*$totalPictures = getTotalPictures($conn);
			$totalPictures += 1;
			$file_name = $totalPictures . '.' . $file_ext;
			//echo $file_name;
			$file_path = 'newsPictures/' . $file_name;
			//echo $file_path;
			$query = 'insert into picture(picture_id, file_name, file_path) values('. "$totalPictures, '$file_name'," . "'$file_path'" . ')';
			$exec = mysqli_query($conn, $query);
			//echo $query;


			$query = 'insert into news(username, picture_id, title, details, date_posted)' . 
			'values('. "$username, $totalPictures, $title, $details, NOW()" . ')';
			//echo $query;
			$exec = mysqli_query($conn, $query);
			echo '<script type="text/javascript">alert("Iploading")</script>';
			$file_path = 'assets/newsPictures/' . $file_name;
			move_uploaded_file($_FILES['picture']['tmp_name'], $file_path);
			echo '<script type="text/javascript">alert("Success")</script>';
			
	
			header('location: ' . base_url('index.php/pages/news'));
			
		}else
			echo '<script type="text/javascript">alert("Invalid File")</script>';
	}*/
	
?>
<div class="container">
	<div class="content-wrapper">
		<div class="content">
			<form class="addeve" enctype="multipart/form-data" method="POST" action="<?php echo base_url('index.php/pages/addNews'); ?>">
				<h1>Add News</h1>
				<input type="text" name="title" placeholder="Title" required>
				<input type="file" name="picture" placeholder="Browse" required>
				<textarea name="details" placeholder="Details" required></textarea>
				<input type="submit" name="post" value="Post">
			</form>
		</div>
	</div>
</div>
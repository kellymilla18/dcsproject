<div class="container">
	<div class="content-wrapper">
		<div class="content">
			<form class="addeve" enctype="multipart/form-data" method="POST" action="addNews.php">
				<h1>Add News</h1>
				<input type="text" name="title" placeholder="Title" required>
				<input type="file" name="picture" placeholder="Browse" required>
				<textarea name="details" placeholder="Details" required></textarea>
				<input type="submit" name="post" value="Post">
			</form>
		</div>
	</div>
</div>
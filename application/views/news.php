	<!--start content-->
	<script type="text/javascript">
		function toReadMoreFunction(){
			var form = document.getElementById("toReadMoreForm");
			form.news_id.value=1;
			form.submit();
		}
	</script>
	<form action="<?php echo base_url('index.php/pages/readMore');?>" method="POST" id="toReadMoreForm">
		<input type="hidden" name="news_id" value="">
	</form>

	<div class="container">
	<div>
		<a href="<?php echo base_url('index.php/pages/addNews'); ?>" class="btn" style="margin-top: 5%;">&#10133; Add</a>
	</div>
		<div class="content-wrapper">
			<div class="content">
				<div class="card-container">
					<div class="card">
					    <!-- Header -->
					    <div class="card-img">
					    	<img src="<?php echo base_url('assets/css/temp/7.jpg'); ?>">
					      <a onclick="toReadMoreFunction()" class="rdmr">Read More</a>
					    </div>
					    <!-- Content-->
					    <div class="card-content">
					      <div class="title">Title</div>
					      <div class="desc">Description</div>
					    </div>
					    <!-- Footer-->
					    <div class="admin-btn">
					      <div class="edit"> <span>Edit</span>
					        <div class="label"></div>
					      </div>
					      <div class="delete"> <span>Delete</span>
					        <div class="label"></div>
					      </div>
					    </div>
					  </div>

					  <div class="card">
					    <!-- Header -->
					    <div class="card-img">
					    	<img src="<?php echo base_url('assets/css/temp/8.jpg'); ?>">
					      <a onclick="toReadMoreFunction()" class="rdmr">Read More</a>
					    </div>
					    <!-- Content-->
					    <div class="card-content">
					      <div class="title">Title</div>
					      <div class="desc">Description</div>
					    </div>
					    <!-- Footer-->
					    <div class="admin-btn">
					      <div class="edit"> <span>Edit</span>
					        <div class="label"></div>
					      </div>
					      <div class="delete"> <span>Delete</span>
					        <div class="label"></div>
					      </div>
					    </div>
					  </div>

					  <div class="card">
					    <!-- Header -->
					    <div class="card-img">
					    	<img src="<?php echo base_url('assets/css/temp/9.jpg'); ?>">
					      <a onclick="toReadMoreFunction()" class="rdmr">Read More</a>
					    </div>
					    <!-- Content-->
					    <div class="card-content">
					      <div class="title">Title</div>
					      <div class="desc">Description</div>
					    </div>
					    <!-- Footer-->
					    <div class="admin-btn">
					      <div class="edit"> <span>Edit</span>
					        <div class="label"></div>
					      </div>
					      <div class="delete"> <span>Delete</span>
					        <div class="label"></div>
					      </div>
					    </div>
					  </div>
				</div>
 			</div>
		</div>
	</div>
	<!--end content-->
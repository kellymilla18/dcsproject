<html>
	<head>
		<link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php echo base_url('assets/functionalities/css/contactus.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/navbar-footer.css'); ?>">

		<link rel="stylesheet" href="<?php echo base_url('assets/css/addevent.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/calendar.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/carousel.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/eventlist.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/events.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/home.css'); ?>">
		<link href="<?php echo base_url('assets/css/primitives.css'); ?>" rel="stylesheet">

		<script src="<?php echo base_url('assets/js/jquery-latest.min.js'); ?>" type="text/javascript"></script>
		<script src="<?php echo base_url('assets/js/script.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/home.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
	    <script src="<?php echo base_url('assets/js/primitives.js'); ?>"></script>
	    <script src="<?php echo base_url('assets/js/jquery-ui.js'); ?>"></script>

		<title>Adnu DCS</title>

	</head>
<body>
<div class="toplogo">
	<a href="<?php echo base_url('index.php/pages/home'); ?>"><img src="<?php echo base_url('assets/css/temp/dcs-sign.png'); ?>" /></a>
</div>

<!--start navbar-->

<div class="nav">
	<div class="container">
		<div id='cssmenu'>
			<ul>
				<li><a href="<?php echo base_url('index.php/pages/news'); ?>">News</a></li>
				<li><a href='<?php echo base_url('index.php/pages/events'); ?>'>Events</a></li>
				<li><a href='<?php echo base_url('index.php/course/list_of_courses'); ?>'>Courses</a></li>
				<li><a href='<?php echo base_url('index.php/program/list_of_programs'); ?>'>Programs</a></li>
				
				<li class='has-sub'><a href='#'>User</a>
					<ul>
						<li><a href='#'>Log Out</a></li>
						 <li class='has-sub'><a href='#'>Option 1</a>
							<ul>
								 <li><a href='#'>Sub Option 1</a></li>
								 <li><a href='#'>Sub Option 2</a></li>
							</ul>
						 </li>
						 <li class='has-sub'><a href='#'>Option 1</a>
							<ul>
								 <li><a href='#'>Sub Option 1</a></li>
								 <li><a href='#'>Sub Option 2</a></li>
							</ul>
						 </li>
					</ul>
				</li>
				<li class="msg"><a data-toggle="open-modal" data-target="#contact">&#9993;</a></li>
				<li class="msg">
					<input type="search" placeholder="&#x1f50e; Search" /></li>

			</ul>
		</div>
	</div>
</div>

<!--end navbar-->
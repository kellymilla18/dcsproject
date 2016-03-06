<html>
	<head>
		<link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php echo base_url('assets/functionalities/css/contactus.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/home.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/navbar-footer.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/carousel.css'); ?>">

		<script src="<?php echo base_url('assets/js/jquery-latest.min.js'); ?>" type="text/javascript"></script>
		<script src="<?php echo base_url('assets/js/script.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/home.js'); ?>"></script>
		
		<title>Adnu DCS</title>
	</head>
<body>
<div class="toplogo">
	<a href="<?php echo base_url('index.php/pages/home'); ?>"><img src="<?php echo base_url('assets/css/temp/dcs-sign.png'); ?>" /></a>
</div>

<!--start carousel-->
	<section class="carousel">
		<ul>
			<li>
				<input type="radio" name="opcao" id="img1" hidden checked>
				<label for="img1">
					Bullet 1
					<div class="thumb"></div>
				</label>
				<figure>
					<figcaption>
						DCS website image 1
					</figcaption>
				</figure>
			</li>
			<li>
				<input type="radio" name="opcao" id="img2" hidden>
				<label for="img2">
					Bullet 2
					<div class="thumb"></div>
				</label>
				<figure>
					<figcaption>
						DCS website image 2
					</figcaption>
				</figure>
			</li>
			<li>
				<input type="radio" name="opcao" id="img3" hidden>
				<label for="img3">
					Bullet 3
					<div class="thumb"></div>
				</label>
				<figure>
					<figcaption>
						DCS website image 3
					</figcaption>
				</figure>
			</li>
		</ul>
	</section>

<!--end carousel-->

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

	<!--start content(news/events/announcements)-->
	<div class="container">
		<div class="content-wrapper">
			<div class="content">
			<!--start news & announcements -->

				<!--start news -->

				<!--end news -->
				<!--start announcements -->

				<!--end announcements -->
			<!--end news & announcements-->	

			<!--start calendar-->
			<div class="eveve">
			<div class="calele">
				<h1 class="vertical">Events</h1>
				<div class="calendar-container">
				    <h1 class="year">August 2016</h1>

				      <table class="calendar">
				        <thead>
				          <tr>
				            <td>Mon</td>
				            <td>Tue</td>
				            <td>Wed</td>
				            <td>Thu</td>
				            <td>Fri</td>
				            <td>Sat</td>
				            <td>Sun</td>
				          </tr>
				        </thead>
				        <tbody>
				          <tr>
				            <td class="prev-month">29</td>
				            <td class="prev-month">30</td>
				            <td class="prev-month">31</td>
				            <td>1</td>
				            <td>2</td>
				            <td>3</td>
				            <td>4</td>
				          </tr>
				          <tr>
				            <td>5</td>
				            <td>6</td>
				            <td>7</td>
				            <td>8</td>
				            <td>9</td>
				            <td>10</td>
				            <td>11</td>
				          </tr>
				          <tr>
				            <td>12</td>
				            <td>13</td>
				            <td>14</td>
				            <td>15</td>
				            <td>16</td>
				            <td>17</td>
				            <td class="current-day">18</td>
				          </tr>
				          <tr>
				            <td>19</td>
				            <td>20</td>
				            <td>21</td>
				            <td>22</td>
				            <td>23</td>
				            <td>24</td>
				            <td>25</td>
				          </tr>
				          <tr>
				            <td>26</td>
				            <td>27</td>
				            <td>28</td>
				            <td>29</td>
				            <td>30</td>
				            <td>31</td>
				            <td class="next-month">1</td>
				          </tr>
				        </tbody>
				      </table>
				      <a href="<?php echo base_url('index.php/pages/calendar'); ?>" class="cal">View Full Calendar</a>					
				    </div>
				      <div class="events">
				      	<h1>Event Details</h1>
				      	<ul>
				      		<li>Event detail 1</li>
				      		<li>Event detail 1</li>
				      	</ul>
				      	<a href="events.html" class="cal">Go to Events</a>
				      </div>
				</div>

			</div>
			
			<!--end calendar-->
			</div>
		</div>
	</div>
	<!--end content-->

	<!--start footer-->
	<footer>
		<div class="lookWrap">
			<a class="btn btn-lg btn-success js-modal" href="#" role="button" data-toggle="modal" data-target="#demoModal"><h2>Contact Us</h2></a>
			<div id="look">
					<div class="contactus">
						<h3>Ateneo de Naga University</h3>
						<p>Ateneo de Naga University<br>
							Ateneo Avenue, 4400 <br>
							Naga City, Philippines<br><br>
							Tel. Nos: Trunkline (63 54) 472-2368<br>
							Fax No: (63 54) 473-9253</p>
					</div>
					<div class="contactus">
						<h3>Department of Computer Science</h3>
						<p>2F Rm P219 Phelan Building <br>
							Ateneo de Naga University <br>
							Ateneo Avenue, 4400 <br>
							Naga City, Philippines <br><br>
							Email: dcs@adnu.edu.ph <br>
							Phone: 054 472 2368 ext 2422 </p>
					</div>

				</div>
			</div>
		</div>
		<div class="legality">
			&copy; Copyright 2016 by Your Company
		</div>
	</footer>
	<!--end footer-->
	<div class="modal" id="contact">
		<div class="contactpop">
			<form class="contact-form">
				<div class="name">
					<input type="text" id="name" placeholder="Full Name"/>
				</div>  
				<div class="email">
					<input type="email" id="email" placeholder="Email"/>
				</div>
				<div class="message">
					<textarea name="message" id="message" placeholder="Message"></textarea>
				</div>
				<div class="submit">
					<input type="submit" value="Send" class="button" />
				</div>
			</form>
		</div>
	</div>
</body>
<script type="text/javascript">
	$(window).scroll(function() {
		var x = window.pageYOffset;
		if(x > 250){
			$('.nav').addClass("fixed"); //make position fixed instead of absolute
		} else {
			$('.nav').removeClass("fixed") ;//clear styles if back to original position
		}
	});

	$("*").click(function(){
		var button = $(this);
		if(button.data('toggle') == "open-modal") {
			var target = button.data('target');
			$('body').append('<div class="modal-backdrop"></div>');
			$('.modal').css("overflow-y", "auto");
			$('html').css("overflow", "hidden");
			$('.modal-backdrop').fadeIn("fast");
			$(target).fadeIn("fast");
		}
	});
</script>
<html>

<?php include "includes/enroll.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Synergy</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<style>
    .awNotices {
  position: relative;
  color: white;
  font: 400 12px Arial;
}
.awNotices a {
  padding: 8px 25px 8px 10px;
  position: absolute;
  left: 0;
  right: 0;
  opacity: 0;
  color: inherit;
  text-decoration: none;
  visibility: hidden;
  transition: opacity .6s;
  border-radius: 3px;
  text-shadow: 0 0 3px rgba(1, 1, 1, 0.3);
  line-height: 150%;
}
.awNotices a i.fa {
  padding-right: 8px;
  margin-right: 5px;
  border-right: 1px solid rgba(255, 255, 255, 0.2);
}
.awNotices a[notice-color="orange"] {
  background-color: #ff9800;
}
.awNotices a[notice-color="red"] {
  background-color: #e51c23;
}
.awNotices a[notice-color="blue"] {
  background-color: #3f51b5;
}
.awNotices a[notice-color="green"] {
  background-color: #8bc34a;
}
.awNotices a[notice-color="dark"] {
  background-color: #414141;
}
.awNotices a.active {
  opacity: 1;
  visibility: visible;
}
.awNotices span.controller {
  position: absolute;
  cursor: pointer;
  background: transparent;
  right: 0;
  padding: 8px 10px;
  line-height: 150%;
}
.enq-tab{
    border: 1px solid #25215e;
    border-top: none;
    cursor: pointer;
    width: 172px;
    height: 46px;
    overflow: hidden;
    background: #14bdee;
    color: white;
    padding: 2px 0px 2px 0px;
    position: fixed;
    top: 238px;
    left: -68px;
    text-align: center;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    z-index: 9999999;
    font-size: 27px;
}

</style>
</head>
<body>


<div class="super_container">

	<!-- Header -->

	<header class="header">
			
		<!-- Top Bar -->
		<div class="top_bar">
			<div class="top_bar_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
								<ul class="top_bar_contact_list">
									<li><div class="question">Have any questions?</div></li>
									<li>
										<i class="fa fa-phone" aria-hidden="true"></i>
										<div>+91 9322040870</div>
                                        <div> | +91 8369720901</div>
									</li>
									<li>
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
										<div>synergy.aos@gmail.com</div>
									</li>
								</ul>
								<div class="top_bar_login ml-auto">
									<div class="login_button"><a href="identity.php">Login</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>				
		</div>

		<!-- Header Content -->
	
		
		<div class="header_container" style="background-color: #ededed;" >
            <div row class="head-back">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container">
								<a href="index.php">
                                    <img src="images/synergy%20S.jpg" style="border-radius: 50%; float: left; height: 70px; width: 70px;">
                                    <img src="images/synergy%20aos%20logo.jpg" style="height: 70px; width: 170px;">
									<br>
									
								</a>
							</div>
							<nav class="main_nav_contaner ml-auto">
								<ul class="main_nav">
									<li ><a href="index.php">Home</a></li>
									<li><a href="about.php">About</a></li>
									<li><a href="courses.php">Courses</a></li>
									<li><a href="gallery.php">Image Gallery</a></li>
									<li><a href="contact.php">Contact</a></li>
								</ul>

								
								<div class="hamburger menu_mm">
									<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
								</div>
							</nav>
                           </div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="search">
			<form action="#" class="header_search_form menu_mm">
				<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="index.html">Home</a></li>
				<li class="menu_mm"><a href="#">About</a></li>
				<li class="menu_mm"><a href="#">Courses</a></li>
				<li class="menu_mm"><a href="#">Blog</a></li>
				<li class="menu_mm"><a href="#">Page</a></li>
				<li class="menu_mm"><a href="contact.html">Contact</a></li>
			</ul>
		</nav>
	</div>
	
    <!-- Enquiry Tab -->
    <ul>
    <li class="enq-tab"><a style="color: white;" href="contact.php">Enquiry</a></li>
    </ul>
    
    
    
    
	<!-- Home -->

	<div class="home">
		<div class="home_slider_container">
			
			<!-- Home Slider -->
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/home_slider_1.jpg)"></div>
					<div class="home_slider_content">
						<div class="container">
							<div class="row">
								<div class="col text-center">
									<div class="home_slider_title">The Premium System Education</div>
									<div class="home_slider_subtitle">Future Of Education Technology</div>
									<div class="home_slider_form_container">
										<form action="#" id="home_search_form_1" class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between">
											
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/home_slider_1.jpg)"></div>
					<div class="home_slider_content">
						<div class="container">
							<div class="row">
								<div class="col text-center">
									<div class="home_slider_title">The Premium System Education</div>
									<div class="home_slider_subtitle">Future Of Education Technology</div>
									<div class="home_slider_form_container">
										<form action="#" id="home_search_form_2" class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between">
											
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/home_slider_1.jpg)"></div>
					<div class="home_slider_content">
						<div class="container">
							<div class="row">
								<div class="col text-center">
									<div class="home_slider_title">The Premium System Education</div>
									<div class="home_slider_subtitle">Future Of Education Technology</div>
									<div class="home_slider_form_container">
										<form action="#" id="home_search_form_3" class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between">
											
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

		<!-- Home Slider Nav -->

		<div class="home_slider_nav home_slider_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
		<div class="home_slider_nav home_slider_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
	</div>

	<!-- Features -->

	<div class="features">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">A WORD OF 
WELCOME</h2>
						<div class="section_subtitle"><p>Welcome to Synergy Academy of Science! We realize that this is the time of excitement and hope for a better future. We assure you that you are at the right place to pursue your dream.

You are entering the entire new academic system that you have encountered before. You will experience the change in study pattern and the need of more efforts to surpass the challenges posed by one of the most competitive examination of the world.

Best and experienced faculty of the field, disciplined and well trained administrative staff, result oriented atmosphere and most efficient system of India you will get in Synergy Academy of Science.

It’s a Challenge, It’s an Experience, It’s an Opportunity

COME, FEEL IT FOR YOURSELVES!

Happy Learning!</p></div>
					</div>
				</div>
			</div>
			<div class="row features_row">
				
				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="images/icon_1.png" alt=""></div>
						<h3 class="feature_title">The Experts</h3>
						<div class="feature_text"><p>Best teaching faculty with teachers having an experience of over 5 years</p></div>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="images/icon_2.png" alt=""></div>
						<h3 class="feature_title">Books & Library</h3>
						<div class="feature_text"><p>A well maintained library is available for the students to refer</p></div>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="images/icon_3.png" alt=""></div>
						<h3 class="feature_title">Best Courses</h3>
						<div class="feature_text"><p>Best courses designed by keeping in mind the current scenarios of the exams</p></div>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="images/icon_4.png" alt=""></div>
						<h3 class="feature_title">Award & Reward</h3>
						<div class="feature_text"><p>Ranked among the top coaching institutes of Navi Mumbai</p></div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Popular Courses -->

	<div class="courses">
		<div class="section_background parallax-window" data-parallax="scroll" data-image-src="images/courses_background.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Courses we offer</h2>
						<div class="section_subtitle"><p>Following is the list of all the courses that we offer under our banner.</p></div>
					</div>
				</div>
			</div>
			<div class="row courses_row">
				
				<!-- Course -->
				<div class="col-lg-4 course_col">
					<div class="course">
						<div class="course_image"><img src="images/course_1.jpg" alt=""></div>
						<div class="course_body">
							<h3 class="course_title"><a href="course.html">JEE main & Advanced</a></h3>
							<div class="course_teacher">Mr. John Taylor</div>
							<div class="course_text">
								<p>This course covers the complete coaching of JEE mains, JEE Advanced and other Engineering entrance exams along with 11th & 12th board (state & CBSE)</p>
							</div>
						</div>
						<div class="course_footer">
							<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
								<div class="course_info">
									<i class="fa fa-graduation-cap" aria-hidden="true"></i>
									<span>50 Student</span>
								</div>
								<div class="course_info">
									<i class="fa fa-star" aria-hidden="true"></i>
									<span>5 Ratings</span>
								</div>
								<div class="course_price ml-auto">2 years</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Course -->
				<div class="col-lg-4 course_col">
					<div class="course">
						<div class="course_image"><img src="images/course_2.jpg" alt=""></div>
						<div class="course_body">
							<h3 class="course_title"><a href="course.html">NEET & AIPMT</a></h3>
							<div class="course_teacher">Ms. Lucius</div>
							<div class="course_text">
								<p>This course covers the complete coaching of AIPMT, NEET and other Medical entrance exams along with 11th & 12th board (state & CBSE)</p>
							</div>
						</div>
						<div class="course_footer">
							<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
								<div class="course_info">
									<i class="fa fa-graduation-cap" aria-hidden="true"></i>
									<span>50 Student</span>
								</div>
								<div class="course_info">
									<i class="fa fa-star" aria-hidden="true"></i>
									<span>5 Ratings</span>
								</div>
								<div class="course_price ml-auto">2 years</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Course -->
				<div class="col-lg-4 course_col">
					<div class="course">
						<div class="course_image"><img src="images/course_3.jpg" alt=""></div>
						<div class="course_body">
							<h3 class="course_title"><a href="course.html">11th & 12th + CET</a></h3>
							<div class="course_teacher">Mr. Charles</div>
							<div class="course_text">
								<p>Complete coverage of the 11th & 12th syllabus (state & CBSE)</p>
							</div>
						</div>
						<div class="course_footer">
							<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
								<div class="course_info">
									<i class="fa fa-graduation-cap" aria-hidden="true"></i>
									<span>60 Student</span>
								</div>
								<div class="course_info">
									<i class="fa fa-star" aria-hidden="true"></i>
									<span>5 Ratings</span>
								</div>
								<div class="course_price ml-auto"><span></span>2 years</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="row">
				<div class="col">
					<div class="courses_button trans_200"><a href="courses.php">view all courses</a></div>
				</div>
			</div>
		</div>
	</div>

	

	<!-- Events -->

	<div class="events">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Our Key Features</h2>
					</div>
				</div>
			</div>
			<div class="row events_row">

				<!-- Event -->
				<div class="col-lg-4 event_col">
					<div class="event event_left">
						<div class="event_image"><img src="images/event_1.jpg" alt=""></div>
						<div class="event_body d-flex flex-row align-items-start justify-content-start">
							<div class="event_content">
								<div class="event_title"><a href="#">We rank among the top 5 coaching institutes of Navi Mumbai</a></div>
							</div>
						</div>
					</div>
				</div>

				<!-- Event -->
				<div class="col-lg-4 event_col">
					<div class="event event_mid">
						<div class="event_image"><img src="images/event_2.jpg" alt=""></div>
						<div class="event_body d-flex flex-row align-items-start justify-content-start">
							<div class="event_date">
							</div>
							<div class="event_content">
								<div class="event_title"><a href="#">World class amenities</a></div>
							</div>
						</div>
					</div>
				</div>

				<!-- Event -->
				<div class="col-lg-4 event_col">
					<div class="event event_right">
						<div class="event_image"><img src="images/event_3.jpg" alt=""></div>
						<div class="event_body d-flex flex-row align-items-start justify-content-start">
							<div class="event_date">
							</div>
							<div class="event_content">
								<div class="event_title"><a href="#">Indivisual Monitering</a></div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Team -->

	<div class="team">
		<div class="team_background parallax-window" data-parallax="scroll" data-image-src="images/team_background.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">The Best Tutors in Town</h2>
						<div class="section_subtitle"><p>We have some of the most experienced and trustworthy teaching faculty of Navi Mumbai.</p></div>
					</div>
				</div>
			</div>
			<div class="row team_row">
				
				<!-- Team Item -->
				<div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_image"><img src="images/team_1.jpg" alt=""></div>
						<div class="team_body">
							<div class="team_title"><a href="#">Jacke Masito</a></div>
							<div class="team_subtitle">Physics</div>
							<div class="social_list">
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Team Item -->
				<div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_image"><img src="images/team_2.jpg" alt=""></div>
						<div class="team_body">
							<div class="team_title"><a href="#">William James</a></div>
							<div class="team_subtitle">Chemistry</div>
							<div class="social_list">
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Team Item -->
				<div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_image"><img src="images/team_3.jpg" alt=""></div>
						<div class="team_body">
							<div class="team_title"><a href="#">John Tyler</a></div>
							<div class="team_subtitle">Quantum mechanics</div>
							<div class="social_list">
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Team Item -->
				<div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_image"><img src="images/team_4.jpg" alt=""></div>
						<div class="team_body">
							<div class="team_title"><a href="#">Veronica Vahn</a></div>
							<div class="team_subtitle">Math & Physics</div>
							<div class="social_list">
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Latest News -->

	<div class="news">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Latest updates</h2>
						<div class="section_subtitle"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu. Vestibulum feugiat, sapien ultrices fermentum congue, quam velit venenatis sem</p></div>
					</div>
				</div>
			</div>
			
			<div class="row news_row">

				<div class="col-lg-5 news_col">
					<div class="news_posts_small">
                    <?php include "includes/notice_display.php"; ?>

					</div>
				</div>
			</div>
		</div>
	</div>

    
    <!-- Counter -->
	
	<div class="counter">
		<div class="counter_background" style="background-image:url(images/counter_background.jpg)"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="counter_content">
						<h2 class="counter_title">Enroll Now</h2>
						<div class="counter_text"><p>Be ahead of others. Join the league. Get trained under the guidance of some of the best faculties of Navi Mumbai. Experience teaching as never before.</p></div>

						<!-- Milestones -->

						<div class="milestones d-flex flex-md-row flex-column align-items-center justify-content-between">
							
							<!-- Milestone -->
							<div class="milestone">
								<div class="milestone_counter" data-end-value="15">0</div>
								<div class="milestone_text">years</div>
							</div>

							<!-- Milestone -->
							<div class="milestone">
								<div class="milestone_counter" data-end-value="12" data-sign-after="k+">0</div>
								<div class="milestone_text">Students</div>
							</div>

							<!-- Milestone -->
							<div class="milestone">
								<div class="milestone_counter" data-end-value="52" data-sign-after="">0</div>
								<div class="milestone_text">Top rankers</div>
							</div>

							<!-- Milestone -->
							<div class="milestone">
								<div class="milestone_counter" data-end-value="6000+">0</div>
								<div class="milestone_text">Qualifies</div>
							</div>

						</div>
					</div>

				</div>
			</div>

			<div class="counter_form">
				<div class="row fill_height">
					<div class="col fill_height">
						<form class="counter_form_content d-flex flex-column align-items-center justify-content-center" action="" method="post">
							<div class="counter_form_title">Interested?</div>
							<p>Please fill the below given form</p>
							<input type="text" class="counter_input" name="name" placeholder="Your Name:" required="required">
							<input type="email" class="counter_input" name="email" placeholder="email id" required="required">
							<select name="counter_select" id="counter_select" class="counter_input counter_options">
								<option>Choose Course</option>
								<option>JEE mains & Advanced</option>
								<option>NEET & AIPMT</option>
								<option>11th & 12th + CET</option>
								<option>plain 11th & 12th</option>
							</select>
							<textarea class="counter_input counter_text_input" name="msg" placeholder="Message:" required="required"></textarea>
							<button type="submit" name = "submit" class="counter_form_button">submit now</button>
						</form>
					</div>
				</div>
			</div>

		</div>
	</div>
    
	<!-- Footer -->

	<footer class="footer">
		<div class="footer_background" style="background-image:url(images/footer_background.png)"></div>
		<div class="container">
			<div class="row footer_row">
				<div class="col">
					<div class="footer_content">
						<div class="row">

							<div class="col-lg-3 footer_col">
					
								<!-- Footer About -->
								<div class="footer_section footer_about">
									<div class="footer_logo_container">
										<a href="index.php">
											<div class="footer_logo_text">Syner<span>gy</span></div>
											<br>
											<h4 style="color: white">Academy of Science</h4>
										</a>
									</div>
									<div class="footer_about_text">
										<p>IIT-JEE | Medical | CBSE Board | Olympiad</p>
									</div>
									<div class="footer_social">
										<ul>
											<li><a href="https://www.facebook.com/synergyacademyofscience/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
								
							</div>

							<div class="col-lg-3 footer_col">
					
								<!-- Footer Contact -->
								<div class="footer_section footer_contact">
									<div class="footer_title">Contact Us</div>
									<div class="footer_contact_info">
										<ul>
											<li>Email: synergy.aos@gmail.com</li>
											<li>Phone:  +91 9322040870 | +91 8369720901</li>
											<li>Shop No. 16, Chaturbhuj Society, Shilp Chowk, Sector 21, Kharghar, Navi Mumbai - 410210, Next to IDBI Bank</li>
										</ul>
									</div>
								</div>
								
							</div>

							<div class="col-lg-3 footer_col">
					
								
							</div>

							<div class="col-lg-3 footer_col clearfix">
					
								
							</div>

						</div>
					</div>
				</div>
			</div>

			<div class="row copyright_row">
				<div class="col">
					<div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
						
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>
<script type="text/javascript">
    $('.awNotices').append('<span class="controller fa fa-pause"></span>');
$('.awNotices a:nth-of-type(1)').addClass('active');

function awNotice() {
  if(!$('.awNotices').hasClass('stopped')){
  var $active = $('.awNotices a.active');
  var $next = $active.next('a');    
  
  if ($next.length){
  $next.addClass('active');
  $active.removeClass('active');
  }else{
    $active.removeClass('active');
		$('.awNotices a:first-of-type').addClass('active');
  }
  }
}

$('.awNotices .controller').click(function(){
  $(this).toggleClass('fa-pause fa-play');
  $('.awNotices').toggleClass('stopped');
})

function awNotices(timer){
    setInterval( "awNotice()", timer);
}

awNotices(4500);

</script>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
<?php include "includes/marks_enter.php"; ?>
<?php include "includes/tt_entry.php"; ?>
<?php include "includes/notice_entry.php"; ?>
<?php include "includes/calendar_entry.php"; ?>
<?php include "includes/attendance.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>admin portal</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../styles/bootstrap4/bootstrap.min.css">
<link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="../styles/course.css">
<link rel="stylesheet" type="text/css" href="../styles/course_responsive.css">
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
										<div>001-1234-88888</div>
									</li>
									<li>
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
										<div>info.deercreative@gmail.com</div>
									</li>
								</ul>
								<div class="top_bar_login ml-auto">
									<div class="login_button"><a href="../login/logout.php">Logout</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>				
		</div>

		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container">
								<a href="#">
									<div class="logo_text">Syner<span>gy</span></div>
								</a>
							</div>
							<nav class="main_nav_contaner ml-auto">
								<ul class="main_nav">
									<li><a href="../index.php">Home</a></li>
									<li><a href="../about.php">About</a></li>
									<li><a href="../courses.php">Courses</a></li>
									<li><a href="../contact.php">Contact us</a></li>
								</ul>

								<!-- Hamburger -->

								<div class="hamburger menu_mm">
									<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
								</div>
							</nav>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Search Panel -->
		<div class="header_search_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
							<form action="#" class="header_search_form">
								<input type="search" class="search_input" placeholder="Search" required="required">
								<button class="header_search_button d-flex flex-column align-items-center justify-content-center">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</form>
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
	
	<!-- Home -->

	<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="">Home</a></li>
								<li><a href="">login</a></li>
								<li>admin profile</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

	<!-- Course -->

	<div class="course">
		<div class="container">
			<div class="row">

				<!-- Course -->
				<div class="col-lg-8">
					
					<div class="course_container">
						<div class="course_title">Welcome to admin portal!!</div>

						<!-- Course Image -->
						<div class="course_image"><img src="../images/course_image.jpg" alt=""></div>

						<!-- Course Tabs -->
						<div class="course_tabs_container">
							<div class="tabs d-flex flex-row align-items-center justify-content-start">
								<div class="tab active">Timetable</div>
								<div class="tab">Performance</div>
								<div class="tab">Attendance</div>
								<div class="tab">Notices</div>
								<div class="tab">Calendar</div>
							</div>
							<div class="tab_panels">

								<!-- Timetable -->
								<div class="tab_panel active">
									<div class="tab_panel_title">Update Timetable</div>
									<div class="tab_panel_content">
								<div class="tab_panel_section">
											<div class="tab_panel_subtitle">Fill in the form and then click submit to update the timetable.</div>
											<div class="tab_panel_text">
											<?php include "tt_form.php"; ?>
											</div>
										</div>
									</div>
								</div>

								<!-- Performance -->
								<div class="tab_panel tab_panel_2">
									<div class="tab_panel_content">
									<div class="tab_panel_title">Academic marks update</div>
									<p>Please fill the colummns given below to update the test marks.</p>
									<br>
						<form action="" method="post">
                            <div class="form-group">
                                    <label for="roll">Roll No.: </label>
								<input type="text" name="roll" />
                            </div>
								
						
						
                            <div class="form-group">
                                <label>Subject1 : </label>
								<input type="text" name="sub1"/>
                                </div>
								
                            <div class="form-group">
                                <label>Subject2 : </label>
								<input type="text" name="sub2" />
                            </div>
								
                            <div class="form-group">
                                <label>Subject3 : </label>
								<input type="text" name="sub3"/>
                            </div>
								
                            <div class="form-group"><label>Subject4 : </label>
								<input type="text" name="sub4"/>
                            </div>
                                        <br>
                                        <label>Test date: </label>
                                        <input type="date" name="test_date" value="test_date">
                                        <br>
                                        <br>
                                         <select name="batch" class="form-group" id="batch">
								        <option value="batch1">Batch 1</option>
								        <option value="batch2">Batch 2</option>
								        <option value="batch3">Batch 3</option>
								        <option value="batch4">Batch 4</option>
								    </select>
								    
								     <select name="test_name" class="form-group" id="test">
								        <option value="test1">test 1</option>
								        <option value="test2">test 2</option>
								        <option value="test3">test 3</option>
								        <option value="test4">test 4</option>
								    </select>
								    
                                                        <br>
                        <br>
						<p class="">
								<input type="submit" class="btn btn-success" name="add"  value="Add" />
						</p>
                </form>

									</div>
									
								</div>

								<!-- Attendance -->
								<div class="tab_panel tab_panel_3">
                                    <h2>Enter attendence details.</h2>
                                    <br>
                                    <br>
                                    <form action="" method="post">
                                       
                                           <p>Select date:</p>
                                        <input type="date" name="adate">
                                        <br>
                                        <br>
                                        <p>Roll no.:</p>
                                        <input type="text" name="aroll">
                                        <br>
                                        <br>
                                        <p>Batch:</p>
                                        <select name="abatch" id="abatch">
                                            <option value="batch1">batch 1</option>
                                            <option value="batch2">batch 2</option>
                                            <option value="batch3">batch 3</option>
                                            <option value="batch4">batch 4</option>
                                        </select>
                                        <br>
                                        <br>
                                        <h6>check the box if the student is present</h6>
                                        <br>
                                        <table class="table">
                                            <thead>
                                            <th>subject</th>
                                            <th>present</th>
                                            </thead>
                                            <tbody>
                                               <tr>
                                                <td>maths</td>
                                                  <td>
                                                   <select name="asub1" id="asub1">
                                                       <option value="present">present</option>
                                                       <option value="absent">absent</option>
                                                   </select>
                                                   </td>
                                                </tr>
                                                <tr>
                                                <td>physics</td>
                                                   <td>
                                                    <select name="asub2" id="asub2">
                                                       <option value="present">present</option>
                                                       <option value="absent">absent</option>
                                                   </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                <td>chemistry</td>
                                                   <td>
                                                    <select name="asub3" id="asub3">
                                                       <option value="present">present</option>
                                                       <option value="absent">absent</option>
                                                   </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                <td>biology</td>
                                                   <td>
                                                    <select name="asub4" id="asub4">
                                                       <option value="present">present</option>
                                                       <option value="absent">absent</option>
                                                   </select>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <br>
                                        <input type="submit" class="btn btn-success" name="asubmit" value="submit">
                                    </form>
								</div>
								
								<!-- ADD Notices -->
								<div class="tab_panel tab_panel_4">
                                    <h2>You can update the notice and calendar section here</h2>
                                    <br>
                                    <h3>Notice Update:</h3>
                                    <h4>Fill the notices in the form that you want your visitors to see</h4>
                                    <br>
                                    <form action="" method="post">
                                        <p>Notice 1:</p><input type="text" name="notice1" class="text-area">
                                        <br>
                                        <p>Notice 2:</p><input type="text" name="notice2" class="text-area">
                                        <br>
                                        <p>Notice 3:</p><input type="text" name="notice3" class="text-area">
                                        <br>
                                        <p>Notice 4:</p><input type="text" name="notice4" class="text-area">
                                        <br>
                                        <br>
                                        <input type="submit" class="btn btn-danger" value="Reset" name="reset_notice">
                                        <input type="submit" class="btn btn-success" value="Update" name="update_notice">
                                    </form>
                                </div>
                                   <div class="tab_panel tab_panel_5">
                                    <h3>Calendar Update:</h3>
                                    <h4>Please fill the form given below to update the calendar.</h4>
                                    <br>
                                    <form action="" method="post">
                                       <p>Date:</p>
                                        <input type="date" class="form" name="date">
                                        <br>
                                        <p>Month:</p>
                                        <select name="month" id="month">
                                            <option value="january">January</option>
                                            <option value="febuary">Febuary</option>
                                            <option value="march">March</option>
                                            <option value="april">April</option>
                                            <option value="may">May</option>
                                            <option value="june">June</option>
                                            <option value="july">July</option>
                                            <option value="august">August</option>
                                            <option value="september">September</option>
                                            <option value="october">October</option>
                                            <option value="november">November</option>
                                            <option value="december">December</option>
                                        </select>
                                        <br>
                                        <br>
                                        <p>Event:</p>
                                        <input type="text" name="event">
                                        <br>
                                        <br>
                                        <input type="submit" class="btn btn-success" name="calendar_add" value="Update">
                                        
                                    </form>
								</div>

							</div>
						</div>
					</div>
				</div>

				<!-- Course Sidebar -->
				<div class="col-lg-4">
					<div class="sidebar">

						<!-- Feature -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">Current status</div>
							<div class="sidebar_feature">
							    <div class="course_price">Total students</div>
								<div class="course_price">800</div>

								<!-- Features -->
								<div class="feature_list">

									<!-- Feature -->
									<div class="feature d-flex flex-row align-items-center justify-content-start">
										<div class="feature_title"><i class="fa fa-clock-o" aria-hidden="true"></i><span>Duration:</span></div>
										<div class="feature_text ml-auto">2 weeks</div>
									</div>

									<!-- Feature -->
									<div class="feature d-flex flex-row align-items-center justify-content-start">
										<div class="feature_title"><i class="fa fa-file-text-o" aria-hidden="true"></i><span>Lectures:</span></div>
										<div class="feature_text ml-auto">10</div>
									</div>

									<!-- Feature -->
									<div class="feature d-flex flex-row align-items-center justify-content-start">
										<div class="feature_title"><i class="fa fa-question-circle-o" aria-hidden="true"></i><span>Lectures:</span></div>
										<div class="feature_text ml-auto">6</div>
									</div>

									<!-- Feature -->
									<div class="feature d-flex flex-row align-items-center justify-content-start">
										<div class="feature_title"><i class="fa fa-list-alt" aria-hidden="true"></i><span>Lectures:</span></div>
										<div class="feature_text ml-auto">Yes</div>
									</div>

									<!-- Feature -->
									<div class="feature d-flex flex-row align-items-center justify-content-start">
										<div class="feature_title"><i class="fa fa-users" aria-hidden="true"></i><span>Lectures:</span></div>
										<div class="feature_text ml-auto">35</div>
									</div>

								</div>
							</div>
						</div>

						<!-- Feature -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">Teacher</div>
							<div class="sidebar_teacher">
								<div class="teacher_title_container d-flex flex-row align-items-center justify-content-start">
									<div class="teacher_image"><img src="../images/teacher.jpg" alt=""></div>
									<div class="teacher_title">
										<div class="teacher_name"><a href="#">Jacke Masito</a></div>
										<div class="teacher_position">Marketing & Management</div>
									</div>
								</div>
								<div class="teacher_meta_container">
									<!-- Teacher Rating -->
									<div class="teacher_meta d-flex flex-row align-items-center justify-content-start">
										<div class="teacher_meta_title">Average Rating:</div>
										<div class="teacher_meta_text ml-auto"><span>4.7</span><i class="fa fa-star" aria-hidden="true"></i></div>
									</div>
									<!-- Teacher Review -->
									<div class="teacher_meta d-flex flex-row align-items-center justify-content-start">
										<div class="teacher_meta_title">Review:</div>
										<div class="teacher_meta_text ml-auto"><span>12k</span><i class="fa fa-comment" aria-hidden="true"></i></div>
									</div>
									<!-- Teacher Quizzes -->
									<div class="teacher_meta d-flex flex-row align-items-center justify-content-start">
										<div class="teacher_meta_title">Quizzes:</div>
										<div class="teacher_meta_text ml-auto"><span>600</span><i class="fa fa-user" aria-hidden="true"></i></div>
									</div>
								</div>
								<div class="teacher_info">
									<p>Hi! I am Masion, I’m a marketing & management  eros pulvinar velit laoreet, sit amet egestas erat dignissim. Sed quis rutrum tellus, sit amet viverra felis. Cras sagittis sem sit amet urna feugiat rutrum nam nulla ipsum.</p>
								</div>
							</div>
						</div>

						<!-- Latest Course -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">Student's messages</div>
							<div class="sidebar_latest">

								<!-- Latest Course -->
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div class="latest_image"><div><img src="../images/latest_1.jpg" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="course.html">How to Design a Logo a Beginners Course</a></div>
										<div class="latest_price">2nd July</div>
									</div>
								</div>

								<!-- Latest Course -->
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div class="latest_image"><div><img src="../images/latest_2.jpg" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="course.html">Photography for Beginners Masterclass</a></div>
										<div class="latest_price">30th June</div>
									</div>
								</div>

								<!-- Latest Course -->
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div class="latest_image"><div><img src="../images/latest_3.jpg" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="course.html">The Secrets of Body Language</a></div>
										<div class="latest_price">25th June</div>
									</div>
								</div>

							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="newsletter_background" style="background-image:url(../images/newsletter_background.jpg)"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_container d-flex flex-lg-row flex-column align-items-center justify-content-start">

						<!-- Newsletter Content -->
						<div class="newsletter_content text-lg-left text-center">
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="footer_background" style="background-image:url(../images/footer_background.png)"></div>
		<div class="container">
			<div class="row footer_row">
				<div class="col">
					<div class="footer_content">
						<div class="row">

							<div class="col-lg-3 footer_col">
					
								<!-- Footer About -->
								<div class="footer_section footer_about">
									<div class="footer_logo_container">
										<a href="#">
											<div class="footer_logo_text">Syner<span>gy</span></div>
											<br>
											<h4>academy of science</h4>
										</a>
									</div>
									<div class="footer_about_text">
										<p>Lorem ipsum dolor sit ametium, consectetur adipiscing elit.</p>
									</div>
									<div class="footer_social">
										<ul>
											<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
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
											<li>Email: Info.deercreative@gmail.com</li>
											<li>Phone:  +(88) 111 555 666</li>
											<li>40 Baria Sreet 133/2 New York City, United States</li>
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
						<div class="cr_text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../styles/bootstrap4/popper.js"></script>
<script src="../styles/bootstrap4/bootstrap.min.js"></script>
<script src="../plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="../plugins/easing/easing.js"></script>
<script src="../plugins/parallax-js-master/parallax.min.js"></script>
<script src="../plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="../js/course.js"></script>
</body>
</html>
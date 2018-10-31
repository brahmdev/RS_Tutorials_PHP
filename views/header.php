<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="description" content="Uacademy - Creative HTML Template">
		<meta name="author" content="CreateIT">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport"
			  content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1, shrink-to-fit=no">
		<!-- default header name is X-CSRF-TOKEN -->

		<!-- Access the bootstrap Css like this,
                Spring boot will handle the resource mapping automcatically -->
		<!-- <link rel="stylesheet" type="text/css"
            href="webjars/bootstrap/3.3.7/css/bootstrap.min.css" /> -->

		<!--
            <spring:url value="/css/main.css" var="springCss" />
            <link href="${springCss}" rel="stylesheet" />
             -->
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link rel="stylesheet" type="text/css" href="../css/buttons.bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../css/select.bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../css/editor.bootstrap.css">
		<link rel="stylesheet" type="text/css"
			  href="../css/bootstrap-datepicker.min.css">
		<link rel="stylesheet" type="text/css"
			  href="../css/bootstrap-year-calendar.css">
		<link rel="stylesheet" type="text/css"
			  href="../css/dataTables.bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../css/smart_wizard.css">
		<link rel="stylesheet" type="text/css" href="../css/smart_wizard_theme_dots.css">
		<link rel="stylesheet" type="text/css" href="../css/smart_wizard_theme_circles.css">
		<link rel="stylesheet" type="text/css" href="../css/smart_wizard_theme_arrows.css">

		<script src="../js/main-compiled.js"></script>
		<script src="../js/jquery-1.10.2.js"></script>
		<!-- <script type="text/javascript" src="webjars/jquery/1.11.1/jquery.min.js"></script> -->
		<!-- <script type="text/javascript">
        var jQuery_1_1_3 = $.noConflict(true);
        </script> -->

		<script type="text/javascript"
				src="../js/bootstrap.min.js"></script>

		<script src="../js/respond.min.js"></script>
		<!-- <script src="js/bootstrap.min.js"></script> -->
		<script src="../js/bootstrap-datepicker.min.js"></script>
		<script src="../js/bootstrap-year-calendar.js"></script>

	<body class="cssAnimate ct-headroom--scrollUpMenu">

		<nav class="ct-menuMobile">
			<ul class="ct-menuMobile-navbar">
				<li class="active"><a href="/">Home</a>
				<li class="dropdown"><a>Courses</a>
					<ul class="dropdown-menu">
						<li><a href="../views/courses.html">Course Detail</a></li>
					</ul>
				</li>
				<li class="dropdown"><a>Admission</a>
					<ul class="dropdown-menu">
						<li><a href="admission.do">Admission Process</a></li>
					</ul>
				<li class="dropdown"><a>Results</a>
					<ul class="dropdown-menu">
						<li><a href="hallOfFame.do">Hall Of Fame</a></li>
						<li><a href="testimonials.do">Testimonials</a></li>
					</ul>
				</li>
				<li class="dropdown yamm-fw"><a>Settings</a>
					<ul class="dropdown-menu">
						<li>
							<div class="yamm-content">
								<div class="row">
									<div class="col-sm-3">
										<a href="calendar.do">Event</a>
										<a href="addStudent.do">Student</a>
										<a href="addStaff.do">Staff</a>
										<a href="addGurdian.do">Gurdian</a>
									</div>
									<div class="col-sm-3">
										<a href="calendar.do">Visitors List</a>
										<a href="calendar.do">Privileges</a>
										<a href="calendar.do">Attendance</a>
										<a href="calendar.do">Leaves</a>

									</div>
									<div class="col-sm-3">
										<a href="calendar.do">View Class TimeTable</a>
										<!-- <a href="calendar.do">View Teacher TimeTable</a> -->
										<a href="calendar.do">Feedback</a>
										<a href="calendar.do">Reviews</a>
										<a href="calendar.do">Complaints</a>
									</div>
									<div class="col-sm-3">
										<a href="calendar.do">Set TimeTable</a>
										<a href="calendar.do">Set Exam</a>
										<a href="setQuestionPaper.do">Set Question Paper</a>
										<a href="calendar.do">Set Mark List</a>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</li>
				<li class="dropdown"><a>Academic</a>
					<ul class="dropdown-menu">
						<li><a href="boards.do">Boards</a></li>
						<li><a href="classLevel.do">Class Level</a></li>
						<li><a href="classLevelType.do">Class Name(Standard)</a></li>
						<li><a href="subject.do">Subject</a></li>
						<li><a href="chapter.do">Chapter</a></li>
					</ul>
				</li>
				<li class="dropdown yamm-fw"><a>Finance</a>
					<ul class="dropdown-menu">
						<li>
							<div class="yamm-content">
								<div class="row">
									<div class="col-sm-4">
										<a href="calendar.do">Fees Collected</a>
										<a href="calendar.do">Outstanding Fees</a>
										<a href="calendar.do">Salary Payment</a>
									</div>
									<div class="col-sm-4">
										<a href="calendar.do">Earnings</a>
										<a href="calendar.do">Investments</a>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</li>
				<li class="dropdown yamm-fw"><a>Settings</a>
					<ul class="dropdown-menu">
						<li>
							<div class="yamm-content">
								<div class="row">
									<div class="col-sm-4">
										<a href="calendar.do">Set TimeTable</a>
										<a href="calendar.do">View Class TimeTable</a>
										<a href="calendar.do">View Teacher TimeTable</a>
									</div>
									<div class="col-sm-4">
										<a href="calendar.do">Add Assignment</a>
										<a href="calendar.do">Add Notes</a>
									</div>
									<div class="col-sm-4">
										<a href="calendar.do">Leave History</a>
										<a href="calendar.do">Leave Details</a>
										<a href="calendar.do">Leave Application</a>
									</div>
									<div class="col-sm-4">
										<a href="calendar.do">My Attendance</a>
										<a href="calendar.do">Attendance</a>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</li>
				<li class="dropdown"><a>About Us</a>
					<ul class="dropdown-menu">
						<li><a href="salientFeature.do">Salient Features</a></li>
						<li><a href="missionVision.do">Mission &amp; Vision</a></li>
						<li><a href="foundersMessage.do">Message from Founder(s)</a></li>
					</ul>
				</li>
				<li class="dropdown"><a href="contact.do">Contact</a></li>
			</ul>
		</nav>

		<div id="ct-js-wrapper" class="ct-pageWrapper">
			<div class="ct-navbarMobile">
				<a class="navbar-brand" href="/" style="margin-left: 14px;"><img
						alt="RS Tutorials" src="../img/logo.jpg" style="max-height: 70px;"></a>
				<button type="button" class="navbar-toggle">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
			</div>

			<nav class="navbar navbar-default navbar-fixed-top yamm "
				 data-heighttopbar="60px" data-startnavbar="0">
				<div class="container">
					<div class="navbar-header"
						 style="margin-left: 78px; margin-top: 5px;">
						<a href="/"><img alt="RS Tutorials" src="../img/logo.jpg"></a>
					</div>
					<div class="ct-navbar--fluid pull-right">
						<ul class="nav navbar-nav ct-navbar--fadeInUp">
							<li class="dropdown active"><a href="/">Home</a></li>
							<li class="dropdown"><a>Courses</a>
								<ul class="dropdown-menu">
									<li><a href="../views/courses.html">Course Detail</a></li>
								</ul>
							</li>
							<li class="dropdown"><a>Admission</a>
								<ul class="dropdown-menu">
									<li><a href="admission.do">Admission Process</a></li>
								</ul>
							</li>

							<li class="dropdown"><a>Results</a>
								<ul class="dropdown-menu">
									<li><a href="hallOfFame.do">Hall Of Fame</a></li>
									<li><a href="testimonials.do">Testimonials</a></li>
								</ul>
							</li>
							<li class="dropdown yamm-fw"><a>Settings</a>
								<ul class="dropdown-menu">
									<li>
										<div class="yamm-content">
											<div class="row">
												<div class="col-sm-3">
													<a href="calendar.do">Event</a>
													<a href="addStudent.do">Student</a>
													<a href="addStaff.do">Staff</a>
													<a href="addGurdian.do">Gurdian</a>
												</div>
												<div class="col-sm-3">
													<a href="calendar.do">Visitors List</a>
													<a href="calendar.do">Privileges</a>
													<a href="calendar.do">Attendance</a>
													<a href="calendar.do">Leaves</a>

												</div>
												<div class="col-sm-3">
													<a href="calendar.do">View Class TimeTable</a>
													<!-- <a href="calendar.do">View Teacher TimeTable</a> -->
													<a href="calendar.do">Feedback</a>
													<a href="calendar.do">Reviews</a>
													<a href="calendar.do">Complaints</a>
												</div>
												<div class="col-sm-3">
													<a href="calendar.do">Set TimeTable</a>
													<a href="calendar.do">Set Exam</a>
													<a href="setQuestionPaper.do">Set Question Paper</a>
													<a href="calendar.do">Set Mark List</a>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</li>
							<li class="dropdown"><a>Academic</a>
								<ul class="dropdown-menu">
									<li><a href="boards.do">Boards</a></li>
									<li><a href="classLevel.do">Class Level</a></li>
									<li><a href="classLevelType.do">Class Name(Standard)</a></li>
									<li><a href="subject.do">Subject</a></li>
									<li><a href="chapter.do">Chapter</a></li>
								</ul>
							</li>
							<li class="dropdown yamm-fw"><a>Finance</a>
								<ul class="dropdown-menu">
									<li>
										<div class="yamm-content">
											<div class="row">
												<div class="col-sm-4">
													<a href="calendar.do">Fees Collected</a>
													<a href="calendar.do">Outstanding Fees</a>
													<a href="calendar.do">Salary Payment</a>
												</div>
												<div class="col-sm-4">
													<a href="calendar.do">Earnings</a>
													<a href="calendar.do">Investments</a>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</li>
							<li class="dropdown yamm-fw"><a>Settings</a>
								<ul class="dropdown-menu">
									<li>
										<div class="yamm-content">
											<div class="row">
												<div class="col-sm-4">
													<a href="calendar.do">Set TimeTable</a>
													<a href="calendar.do">View Class TimeTable</a>
													<a href="calendar.do">View Teacher TimeTable</a>
												</div>
												<div class="col-sm-4">
													<a href="calendar.do">Add Assignment</a>
													<a href="calendar.do">Add Notes</a>
												</div>
												<div class="col-sm-4">
													<a href="calendar.do">Leave History</a>
													<a href="calendar.do">Leave Details</a>
													<a href="calendar.do">Leave Application</a>
												</div>
												<div class="col-sm-4">
													<a href="calendar.do">My Attendance</a>
													<a href="calendar.do">Attendance</a>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</li>
							<li class="dropdown"><a>About Us</a>
								<ul class="dropdown-menu">
									<li><a href="salientFeature.do">Salient Features</a></li>
									<li><a href="missionVision.do">Mission &amp; Vision</a></li>
									<li><a href="foundersMessage.do">Message from
										Founder(s)</a></li>
								</ul>
							</li>
							<li class="dropdown"><a href="contact.do">Contact</a></li>
						</ul>

					</div>
				</div>
			</nav>
			<!-- Modal -->
			<div class="modal ct-js-searchModal fade" id="myModal" tabindex="-1"
				 role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal"
									aria-label="Close">
								<span aria-hidden="true"><i class="fa fa-close"></i></span>
							</button>
							<h3 class="modal-title" id="myModalLabel">Search Results</h3>
						</div>
						<div class="modal-body"></div>
					</div>
				</div>
			</div>

			<div class="modal ct-modal ct-js-modal-login fade" tabindex="-1"
				 role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal"
									aria-label="Close">
								<span aria-hidden="true"><i class="fa fa-close"></i></span>
							</button>
							<h3 class="modal-title text-uppercase">Login</h3>
						</div>
						<div class="modal-body">
							<form class="ct-u-paddingBottom100" name="loginForm"
								  action="/login" method='POST'>
								<div class="form-group ct-u-marginBottom50">
									<input placeholder="E-mail" type="text" required
										   class="form-control ct-input--type1 input-hg ct-u-marginBottom50"
										   title="Login" name='username'> <input
										placeholder="Password" type="password" required
										class="form-control ct-input--type1 input-hg ct-u-marginBottom50"
										title="Password" name='password'> <input type="hidden"
																				 name="${_csrf.parameterName}"
																				 value="${_csrf.token}"/>
									<div class="ct-checbox--custom">
										<input id="remember" type="checkbox" name="remember"
											   value="remember"> <label for="remember">remember
										me</label>
									</div>
								</div>
								<div class="text-center">
									<button type="submit"
											class="btn btn-primary btn-lg text-uppercase">
										<span>Sign In</span>
									</button>
									<div class="ct-u-marginTop50">
										<a href="#"><i class="fa fa-info-circle"></i> Forgot
											Password ?</a> <a href="#"><i class="fa fa-long-arrow-right"></i>
										Register Now ?</a>
									</div>
								</div>

							</form>
						</div>
					</div>
				</div>
			</div>

			<div class="modal ct-modal ct-js-modal-signup fade" tabindex="-1"
				 role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal"
									aria-label="Close">
								<span aria-hidden="true"><i class="fa fa-close"></i></span>
							</button>
							<h3 class="modal-title text-uppercase">Signup</h3>
						</div>
						<div class="modal-body">
							<form class="ct-u-paddingBottom100">
								<div class="form-group ct-u-marginBottom50">
									<div class="row">
										<div class="col-md-6">
											<input placeholder="Name" type="text" required=""
												   name="field[]"
												   class="form-control ct-input--type1 input-hg ct-u-marginBottom50"
												   title="Name"> <input placeholder="Password"
																		type="text" required="" name="field[]"
																		class="form-control ct-input--type1 input-hg ct-u-marginBottom50"
																		title="Password">
										</div>
										<div class="col-md-6">
											<input placeholder="Email" type="text" required=""
												   name="field[]"
												   class="form-control ct-input--type1 input-hg ct-u-marginBottom50"
												   title="Email"> <input placeholder="Repeat Password"
																		 type="text" required="" name="field[]"
																		 class="form-control ct-input--type1 input-hg ct-u-marginBottom50"
																		 title="Repeat">
										</div>
									</div>


									<div class="ct-checbox--custom">
										<input id="signup" type="checkbox" name="signup" value="signup">
										<label for="signup">I agree with <a href="#"
																			class="ct-u-textUnderline">The terms of use</a>
										</label>
									</div>
								</div>
								<div class="text-center">
									<button type="submit"
											class="btn btn-primary btn-lg text-uppercase">
										<span>Sign Up</span>
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
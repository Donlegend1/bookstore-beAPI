<!DOCTYPE html>
<html class="no-js" lang="zxx">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Quinte Bootstrap 4 Admin Template">
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<title>Quinte Bootstrap 4 Admin Template</title>

		<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

		<link rel="stylesheet" href="/dashboard/css/bootstrap.min.css">

		<link rel="stylesheet" href="/dashboard/css/style.css">

		<link href="/dashboard/css/owl.carousel.min.css" rel="stylesheet" type="text/css">
		<link href="/dashboard/css/owl.theme.default.min.css" rel="stylesheet" type="text/css">

		<link rel="stylesheet" href="/dashboard/css/font-awesome.min.css">

		<link rel="stylesheet" href="/dashboard/css/themify-icons.css">

		<link href="/dashboard/css/ionicons.min.css" rel="stylesheet" />

		<link href="/dashboard/css/et-line.css" rel="stylesheet" />

		<link href="/dashboard/css/feather.css" rel="stylesheet" />
		<link href="/dashboard/css/flag-icon.min.css" rel="stylesheet" />

		<script src="/dashboard/js/modernizr-2.8.3.min.js"></script>

		<link rel="stylesheet" href="/dashboard/css/metisMenu.css">

		<link rel="stylesheet" href="/dashboard/css/slicknav.min.css">

		<link rel="stylesheet" href="/dashboard/vendors/am-charts/css/am-charts.css" type="text/css" media="all" />

		<link rel="stylesheet" href="/dashboard/vendors/charts/morris-bundle/morris.css">

		<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

	</head>

	<body>
		<div class="page-container">

			<div class="sidebar-menu">
				<div class="sidebar-header">

					<div class="logo">
						<a href="index.html"><img src="/dashboard/images/logo.png" alt="logo"></a>
					</div>
				</div>

				<div class="main-menu">
					<div class="menu-inner" id="sidebar_menu">
						<nav>
							<ul class="metismenu" id="menu">
								<li class="active">
									<a href="index.html">
										<i class="feather ft-home"></i>
										<span>Dashboard</span>
									</a>
								</li>
								<li>
									<a href="javascript:void(0)" aria-expanded="true">
										<i class="feather ft-gitlab"></i>
										<span>UI Features</span>
									</a>
									<ul class="collapse">
										<li><a href="alert.html"><i class="ti-alert"></i><span>Alert</span></a></li>
									</ul>
								</li>
								<li>
									<a href="javascript:void(0)" aria-expanded="true">
										<i class="feather ft-briefcase"></i>
										<span>Advance Kit</span>
									</a>
									<ul class="collapse">
										<li><a href="toastr.html"><i class="ti-layout-cta-left"></i> <span>Toastr</span></a></li>
										<li><a href="sweet-alert.html"><i class="ti-layout-media-overlay-alt-2"></i> <span>Sweet Alert</span></a></li>
										<li><a href="cropper.html"><i class="ion-crop"></i> <span>Image Cropper</span></a></li>
										<li><a href="loaders.html"><i class="ion-load-a"></i> <span>Css Loaders</span></a></li>
										<li><a href="app-tour.html"><i class="ti-flag-alt"></i> <span>App Tour</span></a></li>
										<li><a href="ladda-button.html"><i class="ion-load-b"></i> <span>Ladda Button</span></a></li>
										<li><a href="dropzone.html"><i class="ti-layout-placeholder"></i> <span>Dropzone</span></a></li>
									</ul>
								</li>
								<li>
									<a href="javascript:void(0)" aria-expanded="true">
										<i class="feather ft-award"></i>
										<span>Icons</span>
									</a>
									<ul class="collapse">
										<li><a href="font-awesome.html"><i class="ti-flag-alt"></i> <span>Font Awesome</span></a></li>
										<li><a href="themify.html"><i class="ti-themify-favicon"></i><span>Themify</span></a></li>
										<li><a href="ionicons.html"><i class="ion-ionic"></i><span>Ionicons V2</span></a></li>
										<li><a href="et-line.html"><i class="icon-basket"></i><span>ET Line Icons</span></a></li>
									</ul>
								</li>
								<li>
									<a href="javascript:void(0)" aria-expanded="true">
										<i class="feather ft-map-pin"></i>
										<span>Maps</span>
									</a>
									<ul class="collapse">
										<li><a href="google-maps.html"><i class="icon-map"></i><span>Google Maps</span></a></li>
										<li><a href="am-maps.html"><i class="icon-map-pin"></i><span>AM Chart Maps</span></a></li>
									</ul>
								</li>
								<li>
									<a href="javascript:void(0)" aria-expanded="true">
										<i class="feather ft-credit-card"></i>
										<span>Tables</span>
									</a>
									<ul class="collapse">
										<li><a href="basic-table.html"><i class="ion-ios-grid-view"></i><span>Basic Tables</span></a></li>
										<li><a href="datatable.html"><i class="ti-layout-slider-alt"></i><span>Datatable</span></a></li>
										<li><a href="js-grid.html"><i class="ti-view-list-alt"></i><span>Js Grid Table</span></a></li>
									</ul>
								</li>
								<li>
									<a href="javascript:void(0)" aria-expanded="true">
										<i class="feather ft-clipboard"></i>
										<span>Forms</span>
									</a>
									<ul class="collapse">
										<li><a href="form-basic.html"><i class="ion-edit"></i><span>Basic ELements</span></a></li>
										<li><a href="form-layouts.html"><i class="ti-layout-grid2-thumb"></i><span>Form Layouts</span></a></li>
										<li><a href="form-groups.html"><i class="ion-ios-paper"></i><span>Input Groups</span></a></li>
										<li><a href="form-validation.html"><i class="ion-android-cancel"></i><span>Form Validation</span></a></li>
									</ul>
								</li>
								<li>
									<a href="javascript:void(0)" aria-expanded="true">
										<i class="feather ft-edit"></i>
										<span>Editors</span>
									</a>
									<ul class="collapse">
										<li><a href="text-editor.html"><i class="ti-uppercase"></i><span>Text Editor</span></a></li>
										<li><a href="code-editor.html"><i class="ion-code"></i><span>Code Editor</span></a></li>
									</ul>
								</li>
								<li>
									<a href="full-calendar.html">
										<i class="feather ft-calendar"></i>
										<span>Calendar</span>
									</a>
								</li>
								<li>
									<a href="javascript:void(0)" aria-expanded="true">
										<i class="feather ft-pie-chart"></i>
										<span>Charts</span>
									</a>
									<ul class="collapse">
										<li><a href="chart-js.html"><i class="feather ft-bar-chart"></i><span>Chart Js</span></a></li>
										<li><a href="morris-charts.html"><i class="feather ft-bar-chart-2"></i><span>Morris Chart Js</span></a></li>
										<li><a href="c3-chart.html"><i class="feather ft-bar-chart-line"></i><span>C3 Chart Js</span></a></li>
										<li><a href="chartist.html"><i class="feather ft-bar-chart-line-"></i><span>Chartist Js</span></a></li>
									</ul>
								</li>
								<li>
									<a href="javascript:void(0)" aria-expanded="true">
										<i class="feather ft-mail"></i>
										<span>Email</span>
									</a>
									<ul class="collapse">
										<li><a href="inbox.html"><i class="ion-ios-folder-outline"></i><span>Inbox</span></a></li>
										<li><a href="compose.html"><i class="ti-pencil-alt"></i><span>Compose Email</span></a></li>
										<li><a href="read-mail.html"><i class="ti-bookmark-alt"></i><span>Read Email</span></a></li>
									</ul>
								</li>
								<li>
									<a href="gallery.html">
										<i class="feather ft-image"></i>
										<span>Gallery</span>
									</a>
								</li>
								<li>
									<a href="javascript:void(0)" aria-expanded="true">
										<i class="feather ft-users"></i>
										<span>Session</span>
									</a>
									<ul class="collapse">
										<li>
											<a href="login.html">
												<i class="feather ft-log-in"></i>
												<span>Login</span>
											</a>
										</li>
										<li><a href="register.html"><i class="ion-person-add"></i><span>Register</span></a></li>
										<li><a href="lock.html"><i class="ti-lock"></i><span>Lock Screen</span></a></li>
										<li>
											<a href="reset-password.html">
												<i class="feather ft-lock"></i>
												<span>Reset Password</span>
											</a>
										</li>
										<li><a href="forgot-password.html"><i class="ti-bookmark-alt"></i><span>Forgot Password</span></a></li>
									</ul>
								</li>
								<li>
									<a href="javascript:void(0)" aria-expanded="true">
										<i class="feather ft-anchor"></i>
										<span>Error Pages</span>
									</a>
									<ul class="collapse">
										<li><a href="404.html"><i class="ti-unlink"></i><span>404</span></a></li>
										<li><a href="500.html"><i class="ti-close"></i><span>500</span></a></li>
										<li><a href="505.html"><i class="ti-na"></i><span>505</span></a></li>
									</ul>
								</li>

								<li>
									<a href="javascript:void(0)" aria-expanded="true">
										<i class="feather ft-file-plus"></i>
										<span>Other Pages</span>
									</a>
									<ul class="collapse">
										<li>
											<a href="blank.html">
												<i class="feather ft-file"></i>
												<span>Blank Page</span>
											</a>
										</li>
										<li>
											<a href="invoice.html">
												<i class="feather ft-paperclip"></i>
												<span>Invoice</span>
											</a>
										</li>
										<li>
											<a href="pricing.html">
												<i class="feather ft-dollar-sign"></i>
												<span>Pricing</span>
											</a>
										</li>
										<li>
											<a href="profile.html"><i class="feather ft-user-check"></i><span>Profile</span></a>
										</li>
										<li><a href="timeline.html"><i class="feather ft-clock"></i><span>Timeline</span></a></li>
									</ul>
								</li>
							</ul>
						</nav>
					</div>
				</div>

			</div>

			<div class="main-content page-content">

				<div class="header-area">
					<div class="row align-items-center">
						<div class="mobile-logo d_none_lg">
							<a href="index.html"><img src="images/mobile-logo.png" alt="logo"></a>
						</div>
						<div class="col-md-6 d_none_sm d-flex align-items-center">
							<div class="nav-btn pull-left">
								<span></span>
								<span></span>
								<span></span>
							</div>
							<div class="search-box pull-left">
								<form action="#">
									<i class="ti-search"></i>
									<input type="text" name="search" placeholder="Search..." required>
								</form>
							</div>
						</div>
						<div class="col-md-6 col-sm-12">
							<ul class="notification-area pull-right">
								<li>
									<span class="nav-btn pull-left d_none_lg">
										<span></span>
										<span></span>
										<span></span>
									</span>
								</li>
								<li id="full-view" class="d_none_sm"><i class="feather ft-maximize"></i></li>
								<li id="full-view-exit" class="d_none_sm"><i class="feather ft-minimize"></i></li>
								<li class="dropdown">
									<i class="ti-bell dropdown-toggle" data-toggle="dropdown"><span></span></i>
									<div class="dropdown-menu bell-notify-box notify-box">
										<span class="notify-title">You have 3 new notifications <a href="#">view all</a></span>
										<div class="nofity-list">
											<a href="#" class="notify-item">
												<div class="notify-thumb"><i class="ti-map-alt bg_blue"></i></div>
												<div class="notify-text">
													<h3>You added your Location</h3>
													<span>Just Now</span>
												</div>
											</a>
											<a href="#" class="notify-item">
												<div class="notify-thumb"><i class="ti-bolt-alt bg_warning"></i></div>
												<div class="notify-text">
													<h3>Your Subscription Expired</h3>
													<span>30 Seconds ago</span>
												</div>
											</a>
											<a href="#" class="notify-item">
												<div class="notify-thumb"><i class="ti-heart bg_danger"></i></div>
												<div class="notify-text">
													<h3>Some special like you</h3>
													<span>Just Now</span>
												</div>
											</a>
											<a href="#" class="notify-item">
												<div class="notify-thumb"><i class="ti-comments bg_info"></i></div>
												<div class="notify-text">
													<h3>New Commetns On Post</h3>
													<span>30 Seconds ago</span>
												</div>
											</a>
											<a href="#" class="notify-item">
												<div class="notify-thumb"><i class="ti-settings bg_secondary"></i></div>
												<div class="notify-text">
													<h3>You changed your Settings</h3>
													<span>Just Now</span>
												</div>
											</a>
											<a href="#" class="notify-item">
												<div class="notify-thumb"><i class="ti-image bg_success"></i></div>
												<div class="notify-text">
													<h3>Image Uploaded Successfully</h3>
													<span>Just Now</span>
												</div>
											</a>
										</div>
									</div>
								</li>
								<li class="dropdown">
									<i class="fa fa-envelope-o dropdown-toggle" data-toggle="dropdown"><span></span></i>
									<div class="dropdown-menu notify-box nt-enveloper-box">
										<span class="notify-title">You have 3 new Messages<a href="#">view all</a></span>
										<div class="nofity-list">
											<a href="#" class="notify-item">
												<div class="notify-thumb">
													<img src="images/author/author-img1.jpg" alt="image">
												</div>
												<div class="notify-text">
													<h3>Jhon Doe</h3>
													<span class="msg">Hello are you there?</span>
													<span>3:15 PM</span>
												</div>
											</a>
											<a href="#" class="notify-item">
												<div class="notify-thumb">
													<img src="images/author/author-img2.jpg" alt="image">
												</div>
												<div class="notify-text">
													<h3>David Boos</h3>
													<span class="msg">Waiting for your Response...</span>
													<span>3:15 PM</span>
												</div>
											</a>
											<a href="#" class="notify-item">
												<div class="notify-thumb">
													<img src="images/user.jpg" alt="image">
												</div>
												<div class="notify-text">
													<h3>Jason Roy</h3>
													<span class="msg">Hi there, Hope you are well</span>
													<span>3:15 PM</span>
												</div>
											</a>
											<a href="#" class="notify-item">
												<div class="notify-thumb">
													<img src="images/author/author-img4.jpg" alt="image">
												</div>
												<div class="notify-text">
													<h3>Malika Roy</h3>
													<span class="msg">Your Product Dispatched form Warehouse...</span>
													<span>3:15 PM</span>
												</div>
											</a>
											<a href="#" class="notify-item">
												<div class="notify-thumb">
													<img src="images/author/author-img2.jpg" alt="image">
												</div>
												<div class="notify-text">
													<h3>Raven Jhon</h3>
													<span class="msg">Please recieve your parcel from our store</span>
													<span>3:15 PM</span>
												</div>
											</a>
											<a href="#" class="notify-item">
												<div class="notify-thumb">
													<img src="images/author/author-img1.jpg" alt="image">
												</div>
												<div class="notify-text">
													<h3>Angela Yo</h3>
													<span class="msg">You recieved a new message...</span>
													<span>3:15 PM</span>
												</div>
											</a>
											<a href="#" class="notify-item">
												<div class="notify-thumb">
													<img src="images/user.jpg" alt="image">
												</div>
												<div class="notify-text">
													<h3>Rebecca Jhon</h3>
													<span class="msg">Hey I am waiting for you...</span>
													<span>3:15 PM</span>
												</div>
											</a>
										</div>
									</div>
								</li>
								<li class="settings-btn d_none_sm">
									<i class="ti-more"></i>
								</li>
								<li class="user-dropdown">
									<div class="dropdown">
										<button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
											aria-haspopup="true" aria-expanded="false">
											<span class="d_none_sm">{{ Auth::user()->username }} <i class="ti-angle-down"></i></span>
											<img src="/dashboard/images/user.jpg" alt="" class="img-fluid">
										</button>
										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
											<a class="dropdown-item" href="#"><i class="ti-user"></i> Profile</a>
											<a class="dropdown-item" href="#"><i class="ti-settings"></i> Account Settings</a>
											<span role="separator" class="divider"></span>
											<a class="dropdown-item" href="{{ route('logout') }}"
												onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
												<i class="ti-power-off"></i> Logout
											</a>
											<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
												@csrf
											</form>
										</div>
									</div>
								</li>

							</ul>
						</div>

					</div>
				</div>
				@yield('content')

			</div>

			<footer>
				<div class="footer-area">
					<p>&copy; Copyright 2019. All right reserved. Template by Raventhemez.</p>
				</div>
			</footer>

		</div>

		<div class="offset-area">
			<div class="offset-close"><i class="ti-close"></i></div>
			<ul class="nav offset-menu-tab">
				<li><a class="active" data-toggle="tab" href="#activity">Activity</a></li>
				<li><a data-toggle="tab" href="#settings">Settings</a></li>
			</ul>
			<div class="offset-content tab-content">
				<div id="activity" class="tab-pane fade in show active">
					<div class="recent-activity">
						<div class="timeline-task">
							<div class="icon bg_secondary">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
									stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" data-reactid="781">
									<path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
								</svg>
							</div>
							<div class="timeline_title">
								<h4>You got 1 New Message</h4>
								<span class="time"><i class="ti-time"></i>09:35</span>
							</div>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
							</p>
						</div>
						<div class="timeline-task">
							<div class="icon bg_success">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
									stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
									<polyline points="20 6 9 17 4 12"></polyline>
								</svg>
							</div>
							<div class="timeline_title">
								<h4>Your Verification Successful</h4>
								<span class="time"><i class="ti-time"></i>7 Minutes Ago</span>
							</div>
							<p>Lorem ipsum dolor sit amet consectetur.
							</p>
						</div>
						<div class="timeline-task">
							<div class="icon bg_danger">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
									stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
									<path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
									<line x1="12" y1="9" x2="12" y2="13"></line>
									<line x1="12" y1="17" x2="12" y2="17"></line>
								</svg>
							</div>
							<div class="timeline_title">
								<h4>Something Went Wrong</h4>
								<span class="time"><i class="ti-time"></i>09:20 Am</span>
							</div>
						</div>
						<div class="timeline-task">
							<div class="icon bg_warning">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
									stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
									<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
									<circle cx="12" cy="7" r="4"></circle>
								</svg>
							</div>
							<div class="timeline_title">
								<h4>Member waiting for your Response</h4>
								<span class="time"><i class="ti-time"></i>09:35</span>
							</div>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
							</p>
						</div>
						<div class="timeline-task">
							<div class="icon bg_info">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
									stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
									<polyline points="3 6 5 6 21 6"></polyline>
									<path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
									<line x1="10" y1="11" x2="10" y2="17"></line>
									<line x1="14" y1="11" x2="14" y2="17"></line>
								</svg>
							</div>
							<div class="timeline_title">
								<h4>You Deleted Jhon Doe</h4>
								<span class="time"><i class="ti-time"></i>01 minutes ago</span>
							</div>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
							</p>
						</div>
					</div>
				</div>
				<div id="settings" class="tab-pane fade">
					<div class="offset-settings">
						<h4>General Settings</h4>
						<div class="settings-list">
							<div class="settings_sec">
								<div class="setting_list_title">
									<h5>Notifications</h5>
									<div class="ui_switch">
										<input type="checkbox" id="switch1" />
										<label for="switch1">Toggle</label>
									</div>
								</div>
								<p>Keep it 'On' When you want to get all the notification.</p>
							</div>
							<div class="settings_sec">
								<div class="setting_list_title">
									<h5>Show recent activity</h5>
									<div class="ui_switch">
										<input type="checkbox" id="switch2" />
										<label for="switch2">Toggle</label>
									</div>
								</div>
								<p>The for attribute is necessary to bind our custom checkbox with the input.</p>
							</div>
							<div class="settings_sec">
								<div class="setting_list_title">
									<h5>Show your emails</h5>
									<div class="ui_switch">
										<input type="checkbox" id="switch3" />
										<label for="switch3">Toggle</label>
									</div>
								</div>
								<p>Show email so that easily find you.</p>
							</div>
							<div class="settings_sec">
								<div class="setting_list_title">
									<h5>Show Task statistics</h5>
									<div class="ui_switch">
										<input type="checkbox" id="switch4" />
										<label for="switch4">Toggle</label>
									</div>
								</div>
								<p>The for attribute is necessary to bind our custom checkbox with the input.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Jquery Js -->
		<script src="/dashboard/js/jquery.min.js"></script>
		<!-- bootstrap 4 js -->
		<script src="/dashboard/js/popper.min.js"></script>
		<script src="/dashboard/js/bootstrap.min.js"></script>
		<!-- Owl Carousel Js -->
		<script src="/dashboard/js/owl.carousel.min.js"></script>
		<!-- Metis Menu Js -->
		<script src="/dashboard/js/metisMenu.min.js"></script>
		<!-- SlimScroll Js -->
		<script src="/dashboard/js/jquery.slimscroll.min.js"></script>
		<!-- Slick Nav -->
		<script src="/dashboard/js/jquery.slicknav.min.js"></script>
		<!-- start amchart js -->
		<script src="/dashboard/vendors/am-charts/js/ammap.js"></script>
		<script src="/dashboard/vendors/am-charts/js/worldLow.js"></script>
		<script src="/dashboard/vendors/am-charts/js/continentsLow.js"></script>
		<script src="/dashboard/vendors/am-charts/js/light.js"></script>
		<!-- maps js -->
		<script src="/dashboard/js/am-maps.js"></script>

		<!--Morris Chart-->
		<script src="/dashboard/vendors/charts/morris-bundle/raphael.min.js"></script>
		<script src="/dashboard/vendors/charts/morris-bundle/morris.js"></script>

		<!--Chart Js-->
		<script src="/dashboard/vendors/charts/charts-bundle/Chart.bundle.js"></script>

		<!--Sparkline Chart-->
		<script src="/dashboard/vendors/charts/sparkline/jquery.sparkline.js"></script>

		<!--Home Script-->
		<script src="/dashboard/js/home.js"></script>

		<!-- Main Js -->
		<script src="/dashboard/js/main.js"></script>

	</body>

</html>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>প্রেসিডেন্ট প্রফেসর ড. ইয়াজউদ্দিন আহম্মেদ রেসিডেন্সিয়ালমডেল স্কুল এন্ড কলেজ</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&amp;display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('public/Backend/css/style.css')}}">



<!---Fonts-->
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
<!---Fonts-->
<!-- CSS only -->

    <link rel="stylesheet" href="{{ asset('public/Fontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/Fontend/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('public/Fontend/css/venobox.css') }}">
    <link rel="stylesheet" href="{{ asset('public/Fontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/Fontend/css/media.css') }}">

</head>

<body style="overflow-x: hidden;">


	<!---Header TopBar-->
	<section id="topHeader">
		<div class="container">
			<div class="row">
				<div class="topInfo">
					<ul>
						<li><img src="asset/image/schoolLogo/email-84.svg" alt=""> info@yourdomainname.com</li>
						<li><img src="asset/image/schoolLogo/phone-2.svg" alt="">+8801-6789-101</li>
					</ul>
				</div>
				<div class="socialIconTop">
					<ul>
						<li class="socialIcon"><img src="asset/image/schoolLogo/fb.svg" alt=""></li>
						<li class="socialIcon"><img src="asset/image/schoolLogo/twit.svg" alt=""></li>
						<li class="socialIcon"><img src="asset/image/schoolLogo/utube.svg" alt=""></li>
						<li class="parentsZone"><a href="">PARENTS ZONE</a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!---Header TopBar-->

<header id="headerSticky">
		<!---logobar-->
		<section id="logoPart">
			<div class="container">
				<div class="row">
					<div class="schoolLogo">
						<a href="index.html">
							<img src="{{URL::to($institution->image)}}" alt="">
						</a>
					</div>

				</div>
			</div>
		</section>
		<!---logobar-->



		<!----------------navBar------------->
		<nav id="menuBar" class="navbar navbar-expand-lg deskMenu">
			<div class="container">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"><img src="{{ asset('public/Fontend/image/schoolLogo/ic_menu_24px.svg')}}" alt=""></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="nav navbar-nav">
						<li>
							<a href="index.html" style="color: #000;">HOME</a>
						</li>
						<li>
							ABOUT US
							<ul class="dropdowndesk">
								<li><a  href="#">At a Glance</a></li>
								<li><a  href="history.html">History Of The College</a></li>
								<li><a  href="chairmanspeech.html">Message Of The Chairman</a></li>
								<li><a  href="principleSpeech.html">Message Of The Principal</a></li>
								<li><a  href="governingBody.html">GoverNing Body</a></li>
								<li><a  href="missionVission.html">Our Location at google Map</a></li>
								<li><a  href="#">Ex. Chairman</a></li>
								<li><a  href="#">Ex. Principal</a></li>

							</ul>
						</li>
						<li>
							ACADEMIC
							<ul class="dropdowndesk">
								<li><a href="">Class Routine</a></li>
								<li><a href="">Academic Rules</a></li>
								<li><a href="">Academic Calender</a></li>
								<li><a href="">Our Teacher</a></li>
								<li><a href="">Our Staff</a></li>
								<li><a href="">Academic calendar</a></li>
								<li><a href="">Attendence Information</a></li>
								<li><a href="">Class Routine</a></li>
								<li><a href="infrastructure.html">INFRASTRUCTURE</a></li>

							</ul>
						</li>
						<li>
							ADMISSION
							<ul class="dropdowndesk">
								<li><a href="">How To Apply</a></li>
								<li><a href="">Admission Circular</a></li>
								<li><a href="">Admission Form</a></li>
								<li><a href="">Admission Result</a></li>
							</ul>
						</li>
						<li>
							STUDENT
							<ul class="dropdowndesk">
								<li><a href="">Tution Fess</a></li>
								<li><a href="">Our Student</a></li>
								<li><a href="newsEvent.html">Mobile Banking</a></li>
								<li><a href="achivment.html">Daily Activities</a></li>
								<li><a href="">Exam Shedule</a></li>
								<li><a href="">Student Uniform</a></li>
								<li><a href="">Examination System</a></li>
								<li><a href="">Rules and Regulation</a></li>
							</ul>
						</li>
						<li>
							FACILITIES
							<ul class="dropdowndesk">
								<li><a href=""> Library </a></li>
								<li><a href=""> ITC Lab </a></li>
								<li><a href="newsEvent.html">Play Ground</a></li>
								<li><a href="achivment.html"> Physics Lab </a></li>
								<li><a href=""> Chemistry Lab </a></li>
								<li><a href="">Biology Lab </a></li>
								<li><a href="">Geography Lab</a></li>
								<li><a href=""> Co-curricular Activity </a></li>
							</ul>
						</li>
						<li>
							RESULT
							<ul class="dropdowndesk">
								<li><a href="">Board Exam Result</a></li>
								<li><a href="">PEC Result</a></li>
								<li><a href="">JSC Result</a></li>
								<li><a href="">SSC Result</a></li>
								<li><a href="">HSC Result</a></li>
								<li class="chlidDropedown">Academic Result
									<ul class="academicResult">
										<li><a href="">Primary Section</a></li>
										<li><a href="">School Section</a></li>
										<li><a href="">College Section</a></li>
									</ul>
								</li>
								<li><a href="">HSC Result</a></li>

							</ul>
						</li>
						<li>
							GALLERY
							<ul class="dropdowndesk">
							   <li><a href="{{ url('photoGallary')}}"> Photo Gallery </a></li>
								<li><a href=""> Video Gallary </a></li>
							</ul>
						</li>
						<li>CONTACT</li>
					</ul>
				</div>
			</div>
		</nav>
		<!----------------navBar------------->
		<!----------------navBar------------->
				<nav id="mobilbar" class="navbar navbar-expand-lg mobilMenu">
					<div class="container">

						<a class="navbar-brand logoMobil" href="#"><img src="{{ asset('public/Fontend/image/schoolLogo/logo.svg')}}" alt=""></a>
						<button class="navbar-toggler mobilToggle" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						  <span class="navbar-toggler-icon mobilMenuIcon"><img src="{{ asset('public/Fontend/image/schoolLogo/ic_menu_24px.svg')}}" alt=""></span>
						</button>

						<div class="collapse navbar-collapse mobilMenuCollapse" id="navbarSupportedContent">
							<ul class="navbar-nav mobilNavbar mr-auto">
							  <li class="nav-item active">
								<a class="nav-link" href="#">HOME</a>
							  </li>
							  <li class="nav-item dropdown">
								<a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									ABOUT US<i class="fas fa-chevron-down"></i>
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								  <a class="dropdown-item" href="chairmanspeech.html">Message from Chairman</a>
								  <a class="dropdown-item" href="principleSpeech.html">Message from Principal</a>
								  <a class="dropdown-item" href="governingBody.html">GoverNing Body</a>
								  <a class="dropdown-item" href="missionVission.html">Mission Vision</a>
								  <a class="dropdown-item" href="infrastructure.html">Infrastructure</a>
								  <a class="dropdown-item" href="history.html">History</a>
								</div>
							  </li>
							  <li class="nav-item dropdown">
								<a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									ACADEMIC<i class="fas fa-chevron-down"></i>
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								  <a class="dropdown-item" href="#">Code of Conducts</a>
								  <a class="dropdown-item" href="#">Guideline for Parents</a>
								  <a class="dropdown-item" href="#">Dress Code</a>
								  <a class="dropdown-item" href="#">Lesson Plan</a>
								  <a class="dropdown-item" href="#">Academic calendar</a>
								  <a class="dropdown-item" href="#">Syllabus</a>
								  <a class="dropdown-item" href="#">Class Routine</a>
								</div>
							  </li>
							  <li class="nav-item dropdown">
								<a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									INFORMATION<i class="fas fa-chevron-down"></i>
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="">Notice Board</a>
									<a class="dropdown-item" href="">Facilities</a>
									<a class="dropdown-item" href="newsEvent.html">News and Events</a>
									<a class="dropdown-item" href="achivment.html">Our Achievements</a>
									<a class="dropdown-item" href="">Teachers Info</a>
									<a class="dropdown-item" href="">Student Info</a>
									<a class="dropdown-item" href="">Policies & Guidelines</a>
									<a class="dropdown-item" href="">Library</a>
								</div>
							  </li>
							  <li class="nav-item dropdown">
								<a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									ADMISSION<i class="fas fa-chevron-down"></i>
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="">Apply Now</a>
									<a class="dropdown-item" href="">Fast Facts</a>
									<a class="dropdown-item" href="">Fees & Payment</a>
									<a class="dropdown-item" href="">Scholarships</a>
								</div>
							  </li>

							  <li class="nav-item dropdown">
								<a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									NOTICE<i class="fas fa-chevron-down"></i>
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								  <a class="dropdown-item" href="#">Notice bord</a>
								</div>
							  </li>


							  <li class="nav-item">
								<a class="nav-link" href="#">CONTACT</a>
							  </li>
							</ul>
							<div class="navContact">
								<h4>Contact Info</h4>
								<span class="navMenuNumber">+88 01769856256</span> <span>info@mail.com</span>
								<ul>
									<li><i class="fab fa-facebook-f"></i></li>
									<li><i class="fab fa-twitter"></i></li>
									<li><i class="fab fa-instagram"></i></li>
									<li><i class="fab fa-linkedin-in"></i></li>
								</ul>
							</div>
						  </div>
					</div>
				</nav>
		<!----------------navBar------------->
</header>


    @yield('contned')



   <!-------------footer------------------->
   <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="upfooter">
                        <ul>

                            <li><img src="asset/image/mail.png" alt=""> <span>Get Appointment</span> </li>
                            <li><img src="asset/image/placeholder.png" alt=""> <span>Contact Us Today</span> </li>
                            <li><img src="asset/image/paper-plane.png" alt=""> <span>Take a School Tour</span> </li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="row mt-4 m-footer">
                <div class="col-lg-3">
                    <div class="footer-logo">
                        <h5>About us</h5>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Praesentium, suscipit! Maiores officiis, cum quidem, modi nam enim porro, unde praesentium incidunt impedit alias non assumenda!</p>
                        <a href="#" class="btn">Contact us</a>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="quick-view">
                        <h5>IMPORTANT LINK</h5>
                        <ul>
                            <li><a href="http://www.dhaka.gov.bd/" style="color: #fff;" target="blank">Dhaka Districts office</a></li>
                            <li><a href="https://www.dhakaeducationboard.gov.bd/" style="color: #fff;" target="blank">Dhaka Education Board</a></li>
                            <!-- <li><a href="">Dhaka Districts office</a> </li>
                            <li><a href="">Dhaka Education Board</a></li> -->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="quick-view">
                        <h5>Services</h5>
                        <ul>
                            <li>Admission</li>
                            <li>Result</li>
                            <li>Online Admission</li>
                            <li>Fees Payment</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="quick-view">
                        <h5>Contact Info</h5>
                        <ul>
                            <li>+88 01769856256</li>

                            <p style="color: #fff;margin-top: 4px;margin-bottom: 7px; font-weight: bold;">Working ours</p>
                            <li>Week Days: 7 AM - 5 PM</li>
                            <li>Friday : Close</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="facebook">
                        <h4>Facebook</h4>
                        <ul>
                            <!-- <li><img src="asset/image/mubcfacebook.jpg" alt=""></li> -->
                        </ul>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="footerContact">
                        <h3>Contact Info</h3>
                        <ul>
                            <li>+88 01769856256</li>
                            <li>asc1957bd@gmail.com</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-12 text-center">
                    <div class="icon">
                        <ul>
                            <li><i class="fab fa-facebook-f"></i></li>
                            <li><i class="fab fa-twitter"></i></li>
                            <li><i class="fab fa-instagram"></i></li>
                            <li><i class="fab fa-linkedin-in"></i></li>
                        </ul>
                    </div>
                    <div class="copyright">
                        <p>© Copyright 2020 , All Rights Reserved <br> Powered by ODHYYON, A product of <a href="https://addiesoft.com/" style="color: #fff;">ADDIE Soft Ltd</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---------footer------------------>



<!-- To Top -->
<a id="totop" href="#top"><i class="tm-acadevo-icon-angle-up"></i></a>



<!-- JS, Popper.js, and jQuery -->

<script  src="{{ asset('public/Fontend/js/jquery-1.12.4.min.js')}}"></script>
<script  src="{{ asset('public/Fontend/js/bootstrap.min.js')}}"></script>
<script  src="{{ asset('public/Fontend/js/slick.min.js')}}"></script>
<script src="https://kit.fontawesome.com/dedaf8eeba.js" crossorigin="anonymous"></script>
<script  src="{{ asset('public/Fontend/js/venobox.min.js')}}"></script>
<script  src="{{ asset('public/Fontend/js/wow.min.js')}}"></script>
<script  src="{{ asset('public/Fontend/js/custom.js')}}"></script>

<script>
	$( document ).ready(function() {

	// Loop through each nav item
	$('nav.navbar').children('ul.nav').children('li').each(function(indexCount){

		// loop through each dropdown, count children and apply a animation delay based on their index value
		$(this).children('ul.dropdown').children('li').each(function(index){

			// Turn the index value into a reasonable animation delay
				var delay = 0.1 + index*0.03;

				// Apply the animation delay
				$(this).css("animation-delay", delay + "s")
			});
		});
	});
</script>


</body>

</html>

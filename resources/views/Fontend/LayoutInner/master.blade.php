<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @foreach ($insttuion as $row)
    <title>{{$row->institutionName}}</title>
    @endforeach


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
    <link rel="stylesheet" href="{{ asset('public/Backend/css/toster.css')}}">
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
                        @foreach ($insttuion as $row)
						<li><img src="{{ asset('public/Fontend/image/schoolLogo/email-84.svg')}}" alt="">{{$row->institutionEmail}}</li>
						<li><img src="{{ asset('public/Fontend/image/schoolLogo/phone-2.svg')}}" alt="">{{$row->institutionNumber}}</li>
                        @endforeach
					</ul>
				</div>
				<div class="socialIconTop">
					<ul>
						<li class="socialIcon"><img src="{{ asset('public/Fontend/image/schoolLogo/fb.svg')}}" alt=""></li>
						<li class="socialIcon"><img src="{{ asset('public/Fontend/image/schoolLogo/twit.svg')}}" alt=""></li>
						<li class="socialIcon"><img src="{{ asset('public/Fontend/image/schoolLogo/utube.svg')}}" alt=""></li>
					<li class="parentsZone"><a href="{{ url('login')}}" target="_blank">ADMIN ZONE</a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!---Header TopBar-->

<header id="headerSticky">
		<!---logobar-->
        @foreach ($insttuion as $row)


		<section id="logoPart">
			<div class="container">
				<div class="row">
					<div class="schoolLogo">
					<div class="logoOnly">
                        <a href="{{ url('/')}}">
							<img src="{{URL::to($row->institutionLogo)}}" class="img-fulid w-100" alt="">
					</a>

                    </div>
                    <div class="schoolName">
                        <h4>{{$row->institutionName}}</h4>
                        <h6>{{$row->institutionAddress}}</h6>
                        <p>{{$row->institutionEstd}}</p>
                    </div>
					</div>
					<div class="mujibBar">
						<img src="{{ asset('public/Fontend/image/schoolLogo/mujib.svg')}}" alt="">
					</div>
				</div>
			</div>
		</section>
        @endforeach
		<!---logobar-->



		<!----------------navBar------------->
		<nav id="menuBar" class="navbar navbar-expand-lg deskMenu">
			<div class="container menuContainer">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"><img src="{{ asset('public/Fontend/image/schoolLogo/ic_menu_24px.svg')}}" alt=""></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="nav navbar-nav">
						<li>
						<a href="{{ url('/')}}" style="color: #fff;"><i class="fas fa-home"></i></a>
						</li>
						<li>
							ABOUT US <i class="fas fa-plus hoverPlus"></i><i class="fas fa-minus hoverMinus"></i>
							<ul class="dropdowndesk">
								<li><a  href="#">At a Glance</a></li>
								<li><a  href="{{ url('history')}}">History</a></li>
								<li><a  href="{{ url('chairmanspeech')}}">Message Of The Chairman</a></li>
								<li><a  href="{{ url('principlespeech')}}">Message Of The Principal</a></li>
							    <li><a  href="{{ url('governingbody')}}">GoverNing Body</a></li>
							    <li><a  href="{{ url('teacherInformation')}}">Teacher</a></li>
								<li><a  href="">Vision and Objectives</a></li>
								{{-- <li><a href="{{ url('infrastructure')}}">INFRASTRUCTURE</a></li> --}}

							</ul>
						</li>
						<li>
							ACADEMIC <i class="fas fa-plus hoverPlus"></i><i class="fas fa-minus hoverMinus"></i>
							<ul class="dropdowndesk">
                                <li><a href="{{ url('extracurricular')}}">Extra curricular Activities</a></li>
							    <li><a href="#">Code of Conducts</a></li>
								<li><a href="{{ url('syllabus')}}">Syllabus</a></li>
								<li><a href="{{ url('routine')}}">Class Routine</a></li>
								<li><a href="">Guideline for Parents</a></li>
								<li><a href="">Dress Code</a></li>
								<li><a href="">Lesson Plan</a></li>
								<li><a href="">Academic calendar</a></li>
							</ul>
						</li>
						<li>
							Information <i class="fas fa-plus hoverPlus"></i><i class="fas fa-minus hoverMinus"></i>
							<ul class="dropdowndesk">
								<li><a href="{{ url('notice')}}">Notice Board</a></li>
								<li><a href="">Facilities</a></li>
								<li><a href="">News and Events</a></li>
								<li><a href="">Our Achievements</a></li>
								<li><a href="">List of Holidays</a></li>
								<li><a href="">Student Info</a></li>
								<li><a href="">Policies & Guidelines</a></li>
								<li><a href="">Library</a></li>
							</ul>
						</li>
						<li>
							Admission <i class="fas fa-plus hoverPlus"></i><i class="fas fa-minus hoverMinus"></i>
							<ul class="dropdowndesk">
							<li><a href="{{ url('apply')}}">Admission circular</a></li>
								<li><a href="">Fast Facts‌</a></li>
								<li><a href="">Fees & Payment</a></li>
								<li><a href="">Scholarships</a></li>
								<li><a href="">Transfer Procedures</a></li>
							</ul>
						</li>
						{{-- <li>
							Campus Life
							<ul class="dropdowndesk">
								<li><a href="ApplyNow.html">Photo Gallery</a></li>
                                <li><a href="FastFacts.html">Video Gallary‌</a></li>
							</ul>
						</li> --}}

						<li>
							GALLERY <i class="fas fa-plus hoverPlus"></i><i class="fas fa-minus hoverMinus"></i>
							<ul class="dropdowndesk">
								<li><a href="{{ url('photoGallary')}}"> Photo Gallery </a></li>
								<li><a href="{{ url('videoGallary')}}"> Video Gallary </a></li>
							</ul>
                        </li>
                        <li>NOTICE</li>
					<li><a href="{{ url('contactUs')}}" style="color: #fff">CONTACT</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<!----------------navBar------------->
		<!----------------navBar------------->
				<nav id="mobilbar" class="navbar navbar-expand-lg mobilMenu">
					<div class="container">
                    @foreach ($insttuion as $row)
						<a class="navbar-brand logoMobil" href="#"><img src="{{URL::to($row->institutionLogo)}}" alt=""></a>
						<button class="navbar-toggler mobilToggle" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						  <span class="navbar-toggler-icon mobilMenuIcon"><img src="{{ asset('public/Fontend/image/schoolLogo/ic_menu_24px.svg')}}" alt=""></span>
						</button>
                    @endforeach
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
									<a class="dropdown-item" href="{{ url('chairmanspeech')}}">Message from Chairman</a>
									<a class="dropdown-item" href="{{ url('principlespeech')}}">Message from Principal</a>
									<a class="dropdown-item" href="{{ url('governingbody')}}">Governing Body</a>
									<a class="dropdown-item" href="{{ url('history')}}">History</a>
									<a class="dropdown-item" href="">Vision and Objectives</a>
									<a class="dropdown-item" href="{{ url('teacherInformation')}}">Teacher Info</a>
								</div>
							  </li>
							  <li class="nav-item dropdown">
								<a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									ACADEMIC<i class="fas fa-chevron-down"></i>
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('extracurricular')}}">Co-curricular Activities</a>
                                    <a class="dropdown-item" href="{{ url('syllabus')}}">Syllabus</a>
									<a class="dropdown-item" href="{{ url('routine')}}">Class Routine</a>
									<a class="dropdown-item" href="#">Code of Conducts</a>
									<a class="dropdown-item" href="">Guideline for Parents</a>
									<a class="dropdown-item" href="">Dress Code</a>
									<a class="dropdown-item" href="">Lesson Plan</a>
									<a class="dropdown-item" href="">Academic calendar</a>
								</div>
							  </li>
							  <li class="nav-item dropdown">
								<a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									INFORMATION<i class="fas fa-chevron-down"></i>
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="{{ url('notice')}}">Notice Board</a>
									<a class="dropdown-item" href="">Facilities</a>
									<a class="dropdown-item" href="">News and Events</a>
									<a class="dropdown-item" href="">Our Achievements</a>
									<a class="dropdown-item" href="">List of Holidays</a>
									<a class="dropdown-item" href="">Student Info</a>
									<a class="dropdown-item" href="">Policies & Guidelines</a>
									<a class="dropdown-item" href="">Library</a>
									<a class="dropdown-item" href="">Health and Environmental Awarness Info</a>
								</div>
							  </li>
							  <li class="nav-item dropdown">
								<a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									ADMISSION<i class="fas fa-chevron-down"></i>
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="{{ url('apply')}}">Apply Now</a>
									<a class="dropdown-item" href="">Fast Facts‌</a>
									<a class="dropdown-item" href="">Fees & Payment</a>
									<a class="dropdown-item" href="">Scholarships</a>
									<a class="dropdown-item" href="">Transfer Procedures</a>
								</div>
							  </li>
							  <li class="nav-item dropdown">
								<a class="nav-link " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									 GALLERY<i class="fas fa-chevron-down"></i>
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="{{ url('photoGallary')}}">Photo Gallery</a>
									<a class="dropdown-item" href="{{ url('videoGallary')}}">Video Gallery‌</a>
								</div>
							</li>

							  <li class="nav-item">
								<a class="nav-link" href="{{ url('contactUs')}}">CONTACT</a>
							  </li>
							</ul>
							<div class="navContact">
								<h4>Contact Info</h4>
								<span class="navMenuNumber">02-58310500</span> <span>vnsc_bd@yahoo.com</span>
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
<section id="latestNews">
	<div class="container pl-0">
		<div class="row">
			<div class="col-lg-12">
			<div class="latestNews">
				<p>Latest Update</p>
			</div>
			<div class="scrollNews">
                @foreach ($lastNotice as $row)


				<marquee class="col-xs-10 scroll-title" behavior="" direction="" onmouseover="this.stop();" onmouseout="this.start();">
					<p>{{$row->title}}</p>
				</marquee>
                 @endforeach
			</div>
		</div>
		</div>
	</div>
</section>

    <!------banner part html------->
     @yield('contned')


	<!-------------footer------------------->
<footer style="background-color: #06245c; padding: 50px 0;">
    <div class="container">


    <div class="row">
        @foreach ($insttuion as $row)
        <div class="col-lg-4 footer-about">


          <h2 class="corner-radius">Contact Us</h2>
          <div>
            <h3></h3>
          </div>
          <address>
            <p>Address: {{$row->institutionAddress}}</p>
            <a href="tel:3170(Mil) / 01769213170" class="phone-number">{{$row->institutionNumber}}</a>
            <br>
            <a href="bcps2007@hotmail.com" class="email">{{$row->institutionEmail}}</a>
            <br>
            <!--<a href="www.bcpsac.edu.bd" class="site"></a>-->
            <!--<br />-->
            {{-- <a href="#" class="address">www.bcpsac.edu.bd</a> --}}
          </address>
          <div class="footer-social">
            <a href="" class="fab fa-facebook" aria-hidden="true"></a>
            <a href="" class="fab fa-twitter" aria-hidden="true"></a>
            <a href="" class="fab fa-skype" aria-hidden="true"></a>
            <a href="" class="fa fa-rss" aria-hidden="true"></a>
            <a href="" class="fab fa-youtube" aria-hidden="true"></a>
          </div>
                  </div>


            @endforeach

        <div class="col-lg-4 footer-latest">
          <h2 class="corner-radius">About Us</h2>
                  </div>
        <div style="" id="feedback_form" class="col-lg-4 footer-contact-form">
          <h2 style="" class="corner-radius">Feedback Form</h2>
          <div class="email_server_responce"></div>
          <form action="php/contacts-process.php" class="contact-form" method="post" novalidate="novalidate">
            <p><span class="your-name">
                <input type="text" name="name" value="" size="40" placeholder="Name" aria-invalid="false" required="">
            </span>
            </p>
            <p><span class="your-email">
                <input type="text" name="phone" value="" size="40" placeholder="Phone" aria-invalid="false" required="">
            </span>
            </p>
            <p><span class="your-message">
                <textarea name="message" placeholder="Comments" cols="40" rows="5" aria-invalid="false" required=""></textarea></span> </p>
            <button type="submit" class="cws-button bt-color-3 border-radius alt icon-right">Submit <i class="fa fa-angle-right" aria-hidden="true"></i></button>
          </form>
        </div>

    </div>
</div>
  </footer>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

  <script>
      @if(Session::has('messege'))
        var type="{{Session::get('alert-type','info')}}"
        switch(type){
            case 'info':
                 toastr.info("{{ Session::get('messege') }}");
                 break;
            case 'success':
                toastr.success("{{ Session::get('messege') }}");
                break;
            case 'warning':
                toastr.warning("{{ Session::get('messege') }}");
                break;
            case 'error':
                toastr.error("{{ Session::get('messege') }}");
                break;
        }
      @endif
    </script>

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

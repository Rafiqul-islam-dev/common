

@extends('Fontend.LayoutInner.master')

@section('contned')


    <!------banner part html------->
    <section id="banner">

        <div class="row mx-0 slider">
			@foreach ($slider as $user)
            <div class="col-lg-12 p-0">
                <div class="banner-slide">
					<img src="{{URL::to($user->image)}}" class="-mg-fulid w-100 sliderMobil" alt="">

                </div>
			</div>
			@endforeach
        </div>
    </section>
    <!------banner part html------->




<section id="gbSection">
	<div class="">
		<div class="row">

			<div class="col-lg-3">
				@foreach ($insttuion as $row)


				<div class="gbMain">
                    <h4>Chairman Message</h4>
					<div class="gbImage">
					<img src="{{URL::to($row->chairmanImage)}}" class="img-fulid w-100" alt="">
					<div class="gbName">
						<p>{{$row->chairmanName}}</p>
                            <h5>Chairman, {{$row->institutionName}}</h5>
					</div>
				</div>
				<div class="gbIText">
					<div class="gbspeecs">
						<p>{!!$row->chairmanMessage!!}</p>
					</div>
				<a href="{{ url('chairmanspeech')}}">Read More <img src="{{ asset('public/Fontend/image/schoolLogo/ic_arrow_back_18px.svg')}}" alt=""></a>
				</div>
				</div>
				@endforeach
			</div>

			<div class="col-lg-3">
				@foreach ($insttuion as $row)
				<div class="gbMain">
                    <h4>Principal Message</h4>
					<div class="gbImage">
					<img src="{{URL::to($row->principalImage)}}" class="img-fulid w-100" alt="">
					<div class="gbName">
						<p>{{$row->principalName}}</p>
                            <h5>Principal, {{$row->institutionName}}</h5>
					</div>
				</div>
				<div class="gbIText">
					<div class="gbspeecs">
						<p>{!!$row->principalMessage!!}</p>
					</div>
					<a href="{{ url('principlespeech')}}">Read More <img src="{{ asset('public/Fontend/image/schoolLogo/ic_arrow_back_18px.svg')}}" alt=""></a>
				</div>
				</div>
				@endforeach
			</div>
            <div class="col-lg-3">
				@foreach ($insttuion as $row)
				<div class="gbMain">
                    <h4>History</h4>
					<div class="gbImage">
					{{-- <img src="{{URL::to($row->principalImage)}}" class="img-fulid w-100" alt=""> --}}
                    <img src="{{ asset('public/Fontend/image/university-photo.jpg')}}" alt="">
					<div class="gbName">
						{{-- <p>{{$row->principalName}}</p>
                            <h5>Principal, {{$row->institutionName}}</h5> --}}
					</div>
				</div>
				<div class="gbIText">
					<div class="gbspeecs">
						<p>{!!$row->institutionHistory!!}</p>
					</div>
					<a href="{{ url('history')}}">Read More <img src="{{ asset('public/Fontend/image/schoolLogo/ic_arrow_back_18px.svg')}}" alt=""></a>
				</div>
				</div>
				@endforeach
			</div>
            <div class="col-lg-3">
				@foreach ($pageData as $row)
				<div class="gbMain">
                    <h4>Extra curriculam activities</h4>
					<div class="gbImage">
					{{-- <img src="{{URL::to($row->principalImage)}}" class="img-fulid w-100" alt=""> --}}
                    <img src="{{ asset('public/Fontend/image/tm-hoverbox-three.jpg')}}" alt="">
					<div class="gbName">
						{{-- <p>{{$row->principalName}}</p>
                            <h5>Principal, {{$row->institutionName}}</h5> --}}
					</div>
				</div>
				<div class="gbIText">
					<div class="gbspeecs">
						<p>{!!$row->curriculam!!}</p>
					</div>
					<a href="{{ url('extracurricular')}}">Read More <img src="{{ asset('public/Fontend/image/schoolLogo/ic_arrow_back_18px.svg')}}" alt=""></a>
				</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</section>

<section id="mainNotice">
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
                <div class="homeOverView">
                    <a href="{{ url('governingbody')}}" class="service-icon" style="color: #fff; font-size: 19px;"><i class="fas fa-users" aria-hidden="true"></i>Commitee</a>
                    <a href="#" class="service-icon" style="color: #fff; font-size: 19px;"><i class="fas fa-chalkboard-teacher" aria-hidden="true"></i>Teacher</a>
                    <a href="" class="service-icon" style="color: #fff; font-size: 19px;"><i class="fas fa-user-friends" aria-hidden="true"></i>Student</a>
                    <a href="" class="service-icon" style="color: #fff; font-size: 19px;"><i class="fas fa-user-ninja" aria-hidden="true"></i>Attendence</a>
                    <a href="" class="service-icon" style="color: #fff; font-size: 19px;"><i class="far fa-list-alt" aria-hidden="true"></i>Result</a>
                    <a href="{{ url('routine')}}" class="service-icon" style="color: #fff; font-size: 19px;"><i class="fas fa-book" aria-hidden="true"></i>Routine</a>
                    <a href="{{ url('photoGallary')}}" class="service-icon" style="color: #fff; font-size: 19px;"><i class="fas fa-photo-video" aria-hidden="true"></i>Photos</a>
                    <a href="#" class="service-icon" style="color: #fff; font-size: 19px;"><i class="fas fa-download" aria-hidden="true"></i>Download</a>

                </div>
			</div>
			<div class="col-lg-5">
				<div class="noticeIteam">

					<h3>Notice Board</h3>
					<marquee behavior=""  onmouseover="this.stop();" onmouseout="this.start();" direction="up" scrollamount="2">
						<ul class="noticebord">
							@foreach ($allNotice as $row)


							<li>
							<a href="{{ url('notice')}}">
									<div class="noticeDate">
										<p>{{date('d-M', strtotime($row->created_at))}}</p>
										<p>{{date('Y', strtotime($row->created_at))}}</p>
										</div>
										<div class="noticeDetails">
											<p>{{$row->title}}</p>
										</div>
								</a>
							</li>
							@endforeach
						</ul>
					</marquee>
                     <a href="{{ url('extracurricular')}}" class="noticebordRm">Read More <img src="{{ asset('public/Fontend/image/schoolLogo/ic_arrow_back_18px.svg')}}" alt=""></a>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="studentCorner">
    <div class="container">
        <div class="grid-row">
        <h2 class="center-text text-center m-4">Student Corner</h2>
        <!-- time line -->
        @foreach ($cornerData as $row)

        <div class="time-line">
          <div class="line-element">
            <div class="action">
              <div class="action-block">
                <span><i class="flaticon-magnifier"></i></span>
                <div class="text">
                  <h3>{{$row->title1}}</h3>
                  <p>{{$row->description1}}</p>
                </div>
              </div>
            </div>
            <div class="level">
              <div class="level-block">{{$row->name1}}</div>
            </div>
          </div>
          <div class="line-element color-2">
            <div class="level">
              <div class="level-block">{{$row->name2}}</div>
            </div>
            <div class="action">
              <div class="action-block">
                <span><i class="flaticon-computer"></i></span>
                <div class="text">
                  <h3>{{$row->title2}}</h3>
                  <p>{{$row->description3}}</p>
                </div>
              </div>
            </div>
          </div>
          <div class="line-element color-3">
            <div class="action">
              <div class="action-block">
                <span><i class="flaticon-shopping"></i></span>
                <div class="text">
                  <h3>{{$row->title3}}</h3>
                  <p>{{$row->description3}}</p>
                </div>
              </div>
            </div>
            <div class="level">
              <div class="level-block">{{$row->name3}}</div>
            </div>
          </div>
        </div>
        @endforeach
        <!-- / time line -->
      </div>
    </div>
</section>



<!-------Know Part--------->
<section id="knowSection">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="knowHeader">
					<p>YOU CAN KNOW</p>
					<h3>By Our Digital Documents</h3>
				</div>
			</div>
		</div>
		<div class="row">
            @foreach ($social as $row)

			<div class="col-lg-4">
				<div class="knowIteam">
					<div class="knowIcon">
						<a href="{{URL::to($row->facebook)}}"><img src="{{ asset('public/Fontend/image/youtubicon.svg')}}" alt=""></a>
					</div>
					<h3>YouTube</h3>
					<h4>Educational Channel</h4>
					<a href="{{URL::to($row->facebook)}}">View Details <img src="{{ asset('public/Fontend/image/schoolLogo/ic_arrow_back_18px.svg')}}" alt=""></a>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="knowIteam">
					<div class="knowIcon">
						<a href="{{URL::to($row->facebook)}}">
							<img src="{{ asset('public/Fontend/image/know/002-time-management.svg')}}" alt="">
						</a>
					</div>
					<h3>Facebook</h3>
					<h4>Class Routine Details</h4>
					<a href="{{URL::to($row->facebook)}}">View Details <img src="{{ asset('public/Fontend/image/schoolLogo/ic_arrow_back_18px.svg')}}" alt=""></a>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="knowIteam">
					<div class="knowIcon">
						<a href="#">
							<img src="{{ asset('public/Fontend/image/know/003-brochure.svg')}}" alt="">
						</a>
					</div>
					<h3>Education</h3>
					<h4>Institution Details</h4>
					<a href="#">View Details <img src="{{ asset('public/Fontend/image/schoolLogo/ic_arrow_back_18px.svg')}}" alt=""></a>
				</div>
			</div>
            @endforeach
		</div>
	</div>
</section>
<!-------Know Part--------->

<section id="videoGallarySection">
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
                @foreach ($social as $row)
                    <div class="videoGallaryImage">
                        <img src="{{URL::to($row->videoImage)}}" class="img-fulid w-100" alt="">
                        <div class="aboutoverlay">
                            <a class="venobox vbox-item" data-autoplay="true" data-vbtype="video" href="{{URL::to($row->fontvideo)}}">
                                <div class="icon2">
                                    <img src="{{asset('public/Fontend/image/schoolLogo/playbtn.svg')}}" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
			</div>
			<div class="col-lg-5">
				<div class="videoText">
					<h3>VIDEO GALLERY</h3>
					<h2>Watch our latest video</h2>
					<a href="">Apply Now</a>
				</div>
			</div>
		</div>
	</div>
</section>



 <!---------image gallary----------->
 <section>
	<div class="container">
		<div class="row mt-5 mx-0">
			<div class="col-lg-12">
				<div class="gallary text-center">
					<h2>PHOTO GALLERY</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="gallary">
					<div class="row">
						@foreach ($photo as $row)


						<div class="col-lg-6">
							<div class="gallaryimg-main">
								<div class="gallaryrightimage">

									<a class="venobox" data-gall="gallery01" href="{{URL::to($row->gallaryImage)}}"><img src="{{URL::to($row->gallaryImage)}}" alt="" class="img-fulid w-100"></a>

								</div>

							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="gallary bigGallary">
					<a class="venobox" data-gall="gallery01" href="{{ asset('public/Fontend/image/Event/eventBig.png')}}"><img src="{{ asset('public/Fontend/image/Event/eventBig.png')}}" alt="" class="img-fulid w-100"></a>

				</div>
			</div>
		</div>
	</div>
</section>
<section id="admissinpart">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto">
                    <div class="ourScool">
						<p>Here you can review some statistics about our School</p>

						<div class="ourSchoolIteam">
							<div class="schoolIcon">
								<img src="https://bzs.addiesoft.com/public/Fontend/image/schoolLogo/005-teacher-1.svg" alt="">
							</div>
							<div class="schoolIconText">
                                <h3>50</h3>
								<p>Teachers</p>
							</div>
						</div>
						<div class="ourSchoolIteam">
							<div class="schoolIcon">
								<img src="https://bzs.addiesoft.com/public/Fontend/image/schoolLogo/007-student.svg" alt="">
							</div>
							<div class="schoolIconText">
                                <h3>10</h3>
								<p>Staff</p>

							</div>
						</div>
						<div class="ourSchoolIteam">
							<div class="schoolIcon">
								<img src="https://bzs.addiesoft.com/public/Fontend/image/schoolLogo/008-rating.svg" alt="">
							</div>
							<div class="schoolIconText">
                                <h3>9</h3>
								<p>Classes</p>

							</div>
						</div>
						<div class="ourSchoolIteam">
							<div class="schoolIcon">
								<img src="https://bzs.addiesoft.com/public/Fontend/image/schoolLogo/009-family.svg" alt="">
							</div>
							<div class="schoolIconText">
                                <h3>2150</h3>
								<p>Students</p>

							</div>
						</div>
					</div>
                </div>
            </div>
        </div>
    </section>
<!---------image gallary----------->
<section style="background: #F5C91F; padding:50px 0;">
    <div class="container">
       <div class="row">
        <div class="col-md-12">
          <h1 class="large_heading" style="color: #639; text-align: center;"> IMPORTANT LINKS </h1>
          <br><br>

        </div>
                @foreach ($impLink as $row)


              <div class="col-md-3">
                <a class="imp_links" href="{{URL::to($row->link)}}" target="_blank"> {{$row->title}} </a>
              </div>
              @endforeach

    </div>  <!-------- END OF CLASS CONTAINER ---------->
  </div></section>


@endsection

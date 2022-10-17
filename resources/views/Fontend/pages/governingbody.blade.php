@extends('Fontend.LayoutInner.master')

@section('contned')

<section id="pageName">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="pageName">
                    <h3>Governing Body</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="pageBody">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="pageMenu">
					<p>Choose related option</p>
                    <ul id="accordion" class="accordion">
						<li>
						  <div class="link"><a href="#">History</a><i class="fa fa-chevron-down"></i></div>

						</li>
						<li>
						  <div class="link">Infrastructure<i class="fa fa-chevron-down"></i></div>

						</li>
						<li>
						  <div class="link">At A Glance<i class="fa fa-chevron-down"></i></div>

						</li>
						<li>
						  <div class="link">Mission & Vision<i class="fa fa-chevron-down"></i></div>

						</li>
						<li>
							<div class="link">Achievement <i class="fa fa-chevron-down"></i></div>
						  </li>
						  <li>
							<div class="link">News & Events <i class="fa fa-chevron-down"></i></div>
							<ul class="submenu">
							  <li><a href="#">Google</a></li>
							  <li><a href="#">Bing</a></li>
							  <li><a href="#">Yahoo</a></li>
							</ul>
						  </li>
					  </ul>

                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-9 m-auto">
                        <div class="row">
                            @foreach ($insttuion as $row)


                            <div class="teacherImageMain col-lg-6 m-auto">
                                <a href="" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
                                    <div class="teacherImage">
                                        <img src="{{URL::to($row->chairmanImage)}}" class="img-fulid w-100 " alt="">

                                        <div class="teacherSocialAccount text-center">
                                            <ul>
                                                <li><i class="fab fa-facebook-f"></i></li>
                                                <li><i class="fab fa-twitter"></i></li>
                                                <li><i class="fab fa-instagram"></i></li>
                                                <li><i class="fab fa-linkedin-in"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="teacherName">
                                        <h4>{{$row->chairmanName}}</h4>
                                        <p>Chairman</p>
                                    </div>
                                </a>
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">

                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 m-auto">
                        <div class="row">
                            @foreach ($governingBody as $row)

                            @endforeach
                            <div class="teacherImageMain col-lg-4" data-toggle="modal" data-target="#exampleModal3" data-whatever="@mdo">
                                <div class="teacherImage">
                                    <img src="{{URL::to($row->image)}}" class="img-fulid w-100 " alt="">

                                    <div class="teacherSocialAccount text-center">
                                        <ul>
                                            <li><i class="fab fa-facebook-f"></i></li>
                                            <li><i class="fab fa-twitter"></i></li>
                                            <li><i class="fab fa-instagram"></i></li>
                                            <li><i class="fab fa-linkedin-in"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="teacherName">
                                    <h4>{{$row->name}}</h4>
                                    <p>{{$row->designation}}</p>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>

@endsection

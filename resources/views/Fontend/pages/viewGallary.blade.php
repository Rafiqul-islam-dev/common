@extends('Fontend.LayoutInner.master')

@section('contned')



<section id="pageName">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="pageName">
                <h3>{{$allGallery[0]->albumName}}</h3>
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
							
						  </li>
					  </ul>
					  
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-12">
                            <div class="row">

                                @foreach ($allGallery as $row)
                                <div class="col-lg-6">
                                    <div class="photoGallary text-center">
                                        <a class="venobox" data-gall="gallery01" href="{{URL::to($row->gallaryImage)}}"><img src="{{URL::to($row->gallaryImage)}}" alt="" class="img-fulid w-100"></a>
                                        <div class="albumname">
                                            <p>{{$row->gallaryTitle}}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
        
        
                    </div>
            </div>
        </div>
    </div>
</section>



@endsection

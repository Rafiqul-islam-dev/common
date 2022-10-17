@extends('Fontend.LayoutInner.master')

@section('contned')

<section id="pageName">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="pageName">
                    <h3>নোটিশ</h3>
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
                    @foreach ($allNotice as $slider )
                        <div class="col-lg-12 mb-4">
                            <div class="schoolNoticeDetails schoolNoticeDetails2">
                               <div class="noticedetailsLeft">
                                <h3>{{$slider->title}}</h3>
        
                               </div>
                               <div class="noticedetailRight text-center">
                                <a href="{{$slider->imagePath}}" target="_blank"><img src="{{ asset('public/Fontend/image/notice/pdfNotice.svg')}}" alt=""><br> Download Notice</a>
                               </div>
                            </div>
                           </div>
                        @endforeach
        
        
                    </div>
            </div>
        </div>
    </div>
</section>

<!------faunded-------->
@endsection

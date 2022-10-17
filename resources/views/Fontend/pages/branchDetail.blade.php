
@extends('Fontend.LayoutInner.master')

@section('contned')


<section id="pageName">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="pageName">
                <h3>{{$branchdetail->branchlocation}}</h3>
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
                        <div class="patronImage">
                            <img src="{{URL::to($branchdetail->branchImage)}}" alt="">
                        </div>
                        <div class="patronImageAdvice">
                            <p>{!!$branchdetail->branchDescription!!}</p>
                            <div class="patronDetails">
                                <h4>{{$branchdetail->branchName}}</h4>
                                {{-- <h5>Chairman</h5>
                                <h6>Viqarunnisa Noon School & College</h6> --}}
                            </div>
                        </div>
                    </div>
        
        
                    </div>
            </div>
        </div>
    </div>
</section>




@endsection

@extends('Fontend.LayoutInner.master')

@section('contned')

<section id="pageName">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="pageName">
                    <h3>ICT LAB</h3>
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
				   <div class="col-lg-7">
					   <div class="historyInf infatacture">
						   <h3>We Build Everything</h3>

						   <p>The University has pioneered change in wide range of academic the sector . We’re suggesting you devote a few hours every week to advancing your career.</p>
					   </div>
				   </div>
				   <div class="col-lg-5">
					   <div class="historyInfImage">
						   <img src="{{ asset('public/Fontend/image/Infrastructure/girlshostel.JPG')}}"  class="img-fulid w-100" alt="">
					   </div>
				   </div>
			   </div>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-4">
                <div class="infrastructure">
                    <img src="{{ asset('public/Fontend/image/Infrastructure/IMG_0047.jpg')}}"  class="img-fulid w-100" alt="">

                    <div class="InfrastructureDetail">
                        <h3>TCL LAB</h3>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="infrastructure">
                    <img src="{{ asset('public/Fontend/image/Infrastructure/ICT LAB.png')}}"  class="img-fulid w-100" alt="">

                    <div class="InfrastructureDetail">
                        <h3>ICT LAB</h3>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




@endsection

@extends('Fontend.LayoutInner.master')

@section('contned')

<!--------------about banner--------------->
<section id="noticeBanner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="about-banner-text ">
                    <h3>নোটিশ</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<!--------------about banner--------------->
<section>
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="noticeBoard">
                            <img src="{{ asset('public/Fontend/image/allbanner/notice.png')}}" class="img-fulid w-100" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="side-menu">
                    <ul>
                        @foreach ( $submenu as $myMenu )


                        <a href="{{ url($myMenu->StaticViewUrl)}}">
                            <li>{{$myMenu->MenunameBangla}}</li>
                        </a>

                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="noticeBoadfInner">
    <div class="container">
       <div class="row">
           <div class="col-lg-9">
            <div class="row">
            {{-- @foreach ($allNotice as $slider ) --}}
                <div class="col-lg-12 mb-4">
                    <div class="detailsNotice">
                        <h3 style="font-family: sl">{{$allNotice->titel}}</h3>

                         <img src="{{URL::to($allNotice->image)}}" class="img-fulid w-100 mt-3" alt="">
                    </div>
                </div>
            {{-- @endforeach --}}

            </div>
           </div>

    </div>
</section>


<!------faunded-------->
@endsection

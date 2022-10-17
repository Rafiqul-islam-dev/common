@extends('Fontend.LayoutInner.master')

@section('contned')


<!--------------about banner--------------->
<section id="noticeBanner" class="lessonPlan">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="about-banner-text ">
                    <h3>পাঠ পরিকল্পনা</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<!--------------about banner--------------->
<section>
    <div class="container">
        <div class="row mt-2">
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="noticeBoard">
                            <img src="{{ asset('public/Fontend/image/allbanner/plan.png')}}" class="img-fulid w-100" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="side-menu">
                    <ul>
                        @foreach ( $submenu as $myMenu )


                        <a href="{{$myMenu->StaticViewUrl}}">
                            <li>{{$myMenu->MenunameBangla}}</li>
                        </a>

                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!------faunded-------->

<section id="noticeBoadfInner" class="patronSecetion">
<div class="container">
    <div class="row">
        <div class="col-lg-9">
            <div class="patronImageAdvice">
                <img src="{{ asset('public/Fontend/image/lesson-1.jpg')}}" class="img-fulid w-100" alt="">
            </div>
        </div>
    </div>
</div>
</section>


@endsection

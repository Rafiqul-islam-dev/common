@extends('Fontend.LayoutInner.master')

@section('contned')


    <!--------------about banner--------------->
    <section id="noticeBanner" class="missionVission">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-banner-text ">
                        <h3>লক্ষ্য ও উদ্দেশ্য</h3>
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
                                <img src="{{ asset('public/Fontend/image/allbanner/mission.jpeg')}}" class="img-fulid w-100" alt="">
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
                        <ul>
                            <li><p>ছাত্রীদের চরিত্র গঠন ও তাদের মূল্যবোধ জাগিয়ে তোলা এ প্রতিষ্ঠানের উদ্দেশ্য</p></li>
                            <li><p>জাতীয় ও আন্তর্জাতিক পর্যায়ে গতিশীল নেতৃত্ব প্রদান এর অন্যতম উদ্দেশ্য</p></li>
                            <li><p>দক্ষ ও শিক্ষিত নারীর ভিত্তি তৈরী করাই এ শিক্ষা প্রতিষ্ঠানের মূল উদ্দেশ্য</p></li>
                            <li><p>শিক্ষিত জাতি গঠনের লক্ষ্যে নিবেদিত একটি অনন্য শিক্ষা প্রতিষ্ঠান</p></li>
                        </ul>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection

@extends('Fontend.LayoutInner.master')

@section('contned')



    <!--------------about banner--------------->
    <section id="noticeBanner" class="shubidha">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-banner-text ">
                        <h3>সুযোগ-সুবিধা</h3>
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
                                <img src="{{ asset('public/Fontend/image/allbanner/shubidha.png')}}" class="img-fulid w-100" alt="">
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
                    <p>ক) পরিবেশঃ মনোরম ও নিরাপত্তামূলক পরিবেশ এবং ক্যাম্পাসের ভেতরে রয়েছে বিস্তৃত খোলা মাঠ।</p>
                    <p>খ) শিক্ষার মাধ্যমঃ বাংলা মাধ্যমে প্রতিষ্ঠানটি পরিচালিত হয় তবে ইংরেজি, নৈতিক শিক্ষা ও সহশিক্ষা কার্যক্রমের উপর বিশেষ গুরুত্ব দেয়া হয়।</p>
                    <p>গ) শিক্ষক/শিক্ষিকা মন্ডলীর বৈশিষ্ট্যঃ সুযোগ্য, বিনয়ী, পরিশ্রমী শিক্ষক/শিক্ষিকা মন্ডলীর মাধ্যমে সুষ্ঠুভাবে সার্বিক শিক্ষা প্রদান।</p>
                    <p>ঘ) সহশিক্ষা কার্যক্রমঃ গার্লস গাইড, বাংলা বিতর্ক, সঙ্গীত, চিত্রাংকন, নৃত্য, আবৃত্তি, বক্তৃতা, নাট্যাভিনয়, ধারাবাহিক গল্প বলা, ক্বেরাত, সাধারণ জ্ঞান , ভলিবল, বাস্কেট বল ও ক্লাব কার্যক্রম চালু রয়েছে।</p>
                    <p>ঙ) শ্রেণী ও শিফট পরিচিতিঃ নারী শিক্ষায় অনন্য এ প্রতিষ্ঠানের প্রথম শ্রেণী থেকে দশম শ্রেণী পর্যন্ত দুইটি শিফট চালু রয়েছে এবং একাদশ ও দ্বাদশ শ্রেণীর একটি শিফট চালু আছে।</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

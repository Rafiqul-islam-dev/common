
@extends('Fontend.LayoutInner.master')

@section('contned')


<!--------------about banner--------------->
<section id="noticeBanner" class="chairmanbanner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="about-banner-text ">
                    <h3>প্রধান পৃষ্ঠপোষকের বাণী</h3>
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
                            <img src="{{ asset('public/Fontend/image/allbanner/bani.png')}}" class="img-fulid w-100" alt="">
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
            <div class="col-lg-12">
                <div class="patronImage">
                    <img src="{{ asset('public/Fontend/image/salim.png')}}" alt="">
                </div>
                <div class="patronImageAdvice">
                    <p>জাতীয় উন্নয়ন ও অগ্রগতির প্রথম সোপান হল শিক্ষা। শিক্ষার মাধ্যমেই তৈরি হয় সৎ, দেশপ্রেমিক ও মানবিক মূল্যবোধ সম্পন্ন সুনাগরিক। শিক্ষা ছাড়া মানুষের মধ্যে দেশপ্রেম,মানবতা ও নৈতিক মূল্যবোধের বিকাশ ঘটানো সম্ভব নয়। একবিংশ শতাব্দীর চ্যালেঞ্জ মোকাবেলা করে দেশকে আধুনিক ও ডিজিটাল বাংলাদেশ রূপে গড়ার ক্ষেত্রে যুগোপযোগী ও প্রযুক্তি নির্ভর মানসম্মত শিক্ষার কোন বিকল্প নেই। অগ্রণী স্কুল ও কলেজকে একটি সর্বাধুনিক বিশ্বমানের শিক্ষা প্রতিষ্ঠানে পরিণত করার লক্ষ্যকে সামনে রেখে এখানে চালু করা হয়েছে ডিজিটাল শিক্ষা পদ্ধতি। শিক্ষার ক্ষেত্রে অনুসরণ করা হচ্ছে অংশগ্রহণ পদ্ধতি। নিয়ত বিভিন্ন ধরণের আধুনিক পদক্ষেপ গ্রহণের মাধ্যমে এ প্রতিষ্ঠানকে আন্তর্জাতিক মানে উন্নীত করার প্রচেষ্টা অব্যাহত আছে। ‘সহস্রাব্দ উন্নয়ন লক্ষ্যমাত্রা’ অর্জন এবং ‘ভিশন-২০২১’ বাস্তবায়নের লক্ষ্যে শিক্ষার্থী, অভিভাবক, শিক্ষক ও পরিচালনা পরিষদের সবাই একযোগে কাজ করে অগ্রণী স্কুল ও কলেজকে একটি সর্বাধুনিক বিশ্বমানের শিক্ষা প্রতিষ্ঠানে পরিণত করবে বলে আমি গভীরভাবে আশাবাদী।</p>

                    <div class="patronDetails">
                        <h4>হাজী মো: সেলিম</h4>
                        <h5>সংসদ সদস্য – ১৮০, ঢাকা – ০৭</h5>
                        <h6>অগ্রণী স্কুল এন্ড কলেজ</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection

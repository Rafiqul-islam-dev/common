@extends('Fontend.LayoutInner.master')

@section('contned')

  <!--------------about banner--------------->
  <section id="noticeBanner" class="transfare">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="about-banner-text ">
                    <h3>ট্রান্সফার পদ্ধতি</h3>
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
                            <img src="{{ asset('public/Fontend/image/allbanner/transfer.png')}}" class="img-fulid w-100" alt="">
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
                <p>ক) ৯ম, দশম ও একাদশ/দ্বাদশ শ্রেণীতে কোন ছাড়পত্র ইস্যু করা হয় না। তবে বিশেষ বিশেষ ক্ষেত্রে মাধ্যমিক ও উচ্চ মাধ্যমিক শিক্ষা বোর্ডের অনুমতি সাপেক্ষে ছাড়পত্র প্রদান করা যেতে পারে।</p>
                <p>খ) অন্যান্য শ্রেণীর ছাত্রী প্রতিষ্ঠান পরিত্যাগের জন্য ছাড়পত্র নিতে চাইলে উপযুক্ত কারণ দর্শানোর মাধ্যমে অভিভাবকের স্বাক্ষর সম্বলিত আবেদনপত্র পেশ করতে হবে।</p>
                <p>গ) জানুয়ারী মাসের পর ছাড়পত্র নিতে হলে আবেদনের পূর্বে অবশ্যই প্রতিষ্ঠানের যাবতীয় পাওনাসহ ছাড়পত্র ফি পরিশোধ করতে হবে।</p>
            </div>
        </div>
    </div>
</div>
</section>


@endsection

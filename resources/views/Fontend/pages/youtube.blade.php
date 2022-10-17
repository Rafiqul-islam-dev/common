@extends('Fontend.LayoutInner.master')

@section('contned')


    <!--------------about banner--------------->
    <section id="noticeBanner" class="onlineClass">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-banner-text ">
                        <h3>DIGITAL ONLINE CLASS</h3>
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
                                <img src="{{ asset('public/Fontend/image/youtube/olineclassbanner.png')}}" class="img-fulid w-100" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-3">
                    <div class="side-menu">
                        <ul>
                            <a href="academics.html">
                                <li>Academics</li>
                            </a>
                            <a href="admission.html">
                                <li>Admission Process</li>
                            </a>
                            <a href="academicCalender.html">
                                <li>Academic Calendar</li>
                            </a>
                            <a href="noticeBord.html">
                                <li>Notice Board</li>
                            </a>
                            <a href="">
                                <li>Syllabus</li>
                            </a>
                            <a href="event.html">
                                <li>News & Events</li>
                            </a>
                        </ul>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!------faunded-------->

<section id="youTubeInner">
    <div class="container">
       <div class="row">
           <div class="col-lg-9">
            <div class="row">
                <div class="col-lg-12 mb-3">
                    <div class="schoolNoticeDetails syllabus">
                       <div class="noticedetailsLeft downloadSallybusText yoytubeVideo">
                        <h3>অগ্রণী স্কুল এন্ড কলেজ</h3>
                       </div>
                       <div class="noticedetailRight downloadSallybus text-center">
                        <a href="https://www.youtube.com/channel/UC7MfRh_0RSsnYkMqZtXAZrw/featured" target="blank"><img src="{{ asset('public/Fontend/image/youtube/youtubicon.svg')}}" alt=""> <span>Watch from here</span></a>
                       </div>
                    </div>
                   </div>
                   {{-- <div class="col-lg-12 mb-3">
                    <div class="schoolNoticeDetails syllabus">
                       <div class="noticedetailsLeft downloadSallybusText yoytubeVideo">
                        <h3>Md Khaled Chowdhury</h3>
                       </div>
                       <div class="noticedetailRight downloadSallybus text-center">
                        <a href="http://www.youtube.com/channel/UCbmnBg0wibziSHuoHvK2uJw/featured" target="blank"><img src="{{ asset('public/Fontend/image/youtube/youtubicon.svg')}}" alt=""> <span>Watch from here</span></a>
                       </div>
                    </div>
                   </div>
                   <div class="col-lg-12 mb-3">
                    <div class="schoolNoticeDetails syllabus">
                       <div class="noticedetailsLeft downloadSallybusText yoytubeVideo">
                        <h3>Subhe Sadik Ali</h3>
                       </div>
                       <div class="noticedetailRight downloadSallybus text-center">
                        <a href="http://www.youtube.com/channel/UCAt1N_EnrycXz3TgUUIKhcQ/featured" target="blank"><img src="{{ asset('public/Fontend/image/youtube/youtubicon.svg')}}" alt=""> <span>Watch from here</span></a>
                       </div>
                    </div>
                   </div>
                   <div class="col-lg-12 mb-3">
                    <div class="schoolNoticeDetails syllabus">
                       <div class="noticedetailsLeft downloadSallybusText yoytubeVideo">
                        <h3>Md. Saiful Islam</h3>
                       </div>
                       <div class="noticedetailRight downloadSallybus text-center">
                        <a href="http://www.youtube.com/channel/UCGiv5TzPMoqms-RFRu6fOwQ/featured" target="blank"><img src="{{ asset('public/Fontend/image/youtube/youtubicon.svg')}}" alt=""> <span>Watch from here</span></a>
                       </div>
                    </div>
                   </div>
                   <div class="col-lg-12 mb-3">
                    <div class="schoolNoticeDetails syllabus">
                       <div class="noticedetailsLeft downloadSallybusText yoytubeVideo">
                        <h3>Farida Khanum</h3>
                       </div>
                       <div class="noticedetailRight downloadSallybus text-center">
                        <a href="https://www.youtube.com/channel/UCyb9PXFBjWGOLJhmCbAJ5KQ/featured" target="blank"><img src="{{ asset('public/Fontend/image/youtube/youtubicon.svg')}}" alt=""> <span>Watch from here</span></a>
                       </div>
                    </div>
                   </div>
                   <div class="col-lg-12 mb-3">
                    <div class="schoolNoticeDetails syllabus">
                       <div class="noticedetailsLeft downloadSallybusText yoytubeVideo">
                        <h3>Md. Noor Alam</h3>
                       </div>
                       <div class="noticedetailRight downloadSallybus text-center">
                        <a href="http://www.youtube.com/channel/UC-AfJt4sSBUVm8pW_p88e2Q?app=desktop&fbclid=IwAR35oDhLcRWwN7n6UhaKmQaoEDbYOCKFIRWxbhD9Omik_PbL6-3qU6BIif0" target="blank"><img src="{{ asset('public/Fontend/image/youtube/youtubicon.svg')}}" alt=""> <span>Watch from here</span></a>
                       </div>
                    </div>
                   </div>
                   <div class="col-lg-12 mb-3">
                    <div class="schoolNoticeDetails syllabus">
                       <div class="noticedetailsLeft downloadSallybusText yoytubeVideo">
                        <h3>Coming Soon</h3>
                       </div>
                       <div class="noticedetailRight downloadSallybus text-center">
                        <a href=""><img src="{{ asset('public/Fontend/image/youtube/youtubicon.svg')}}" alt=""> <span>Watch from here</span></a>
                       </div>
                    </div>
                   </div>
                   <div class="col-lg-12 mb-3">
                    <div class="schoolNoticeDetails syllabus">
                       <div class="noticedetailsLeft downloadSallybusText yoytubeVideo">
                        <h3>Coming Soon</h3>
                       </div>
                       <div class="noticedetailRight downloadSallybus text-center">
                        <a href=""><img src="{{ asset('public/Fontend/image/youtube/youtubicon.svg')}}" alt=""> <span>Watch from here</span></a>
                       </div>
                    </div>
                   </div> --}}
            </div>
           </div>

    </div>
</section>


@endsection

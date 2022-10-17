@extends('Fontend.LayoutInner.master')

@section('contned')

 <!--------------about banner--------------->
 <section id="pageName" class="routineBanner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="about-banner-text ">
                    <h3>Class Routine</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="pageBody">
<div class="container">
   <div class="row">
       <div class="col-lg-9">
        <div class="row">
            @foreach ($classList as $row)
                <div class="col-lg-12 mb-3">
                    <div class="schoolNoticeDetails syllabus">
                    <div class="noticedetailsLeft downloadSallybusText">
                        <h3>Class <span style="font-weight: bold">{{$row->classNameEnglish}}</span></h3>
                    </div>
                    <div class="noticedetailRight downloadSallybus text-center">
                        <a href="{{ url('routineView', $row->id)}}" target="blank"><img src="{{ asset('public/Fontend/image/notice/slybus.svg')}}" alt=""> <span>Click For Routine</span></a>
                    </div>
                    </div>
                </div>
            @endforeach
        </div>
       </div>

</div>
</section>





@endsection

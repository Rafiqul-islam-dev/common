@extends('Fontend.LayoutInner.master')

@section('contned')

<section id="pageName">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="pageName">
                    <h3>সিলেবাস</h3>
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
                        <a href="{{ url('syllabusView', $row->id)}}" target="blank"><img src="{{ asset('public/Fontend/image/notice/slybus.svg')}}" alt=""> <span>ViewSyllabus</span></a>
                    </div>
                    </div>
                </div>
            @endforeach
        </div>
       </div>

</div>
</section>




@endsection

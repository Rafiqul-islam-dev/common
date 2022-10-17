@extends('Fontend.LayoutInner.master')

@section('contned')
<section id="pageName">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="pageName">
                    <h3>Routine</h3>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="pageBody">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="examshedule text-center">

                    <h3> <span class="className"></span> Class {{$clasid->classNameEnglish}} </h3>

                    <div class="table-responsive ">
                        <table class="table table-striped table-bordered">
                        <thead style="text-transform: capitalize;">
                            <tr>
                            <th scope="col">Sl No</th>
                            <th scope="col">Subject</th>
                            <th scope="col" class="examlink">View Routine</th>
                            </tr>
                        </thead>

                        <tbody class="examclass">
                            @foreach ($syllabus as $kye=>$row)
                            <tr>
                            <th scope="row">{{$kye+1}}</th>
                            <td class="examlink">{{$row->subject}}</td>
                            <td class="exanLink"><a href="{{URL::to($row->documentFile)}}" target="_blank">Click Here</a>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection

@extends('Fontend.LayoutInner.master')

@section('contned')

<!--------------about banner--------------->
<section id="pageName" class="applyNow">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="about-banner-text ">
                    <h3>Teacher Info</h3>
                </div>
            </div>
        </div>
    </div>
</section>


<!------------Teacher------------->
<section id="teacherInformation">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="iq-card">
                    <div class="iq-card-body">
                     <div id="table">
                       <table id="example" class="table table-bordered table-responsive-md teacherTable table-striped text-center">
                        <thead>
                            <tr>
                              {{-- <th>ID</th> --}}
                              <th>Image</th>
                              <th>Name</th>
                              <th>Designation</th>
                              <th>Mobil Number</th>
                              {{-- <th>Educational Qualifications</th> --}}
                            </tr>
                          </thead>
                          <tbody>

                           @foreach ($teacher as $kye => $row )


                           <tr>
                              {{-- <td contenteditable="true"><img src="{{ ($mydata['EmpImage']) }}" alt=""></td> --}}
                               <td contenteditable="true" class="teacherInfoImage"><img src="{{URL::to($row->image)}}" alt=""></td>
                               <td contenteditable="true" class="teacherinfName"><p>{{ $row->name}}</p></td>
                               <td contenteditable="true">{{$row->designation}}</td>
                               <td contenteditable="true">{{ $row->number}}</td>
                               {{-- <td contenteditable="true">{{ $mydata['Qualification']}}</td> --}}
                               {{-- <td contenteditable="true">{{ date('d-M-y', strtotime($mydata['JoiningDate'])) }}</td> --}}
                             </tr>


                           @endforeach


                          </tbody>
                       </table>
                     </div>
                 </div>
              </div>
            </div>
        </div>
    </div>
</section>
<!------------Teacher------------->





@endsection

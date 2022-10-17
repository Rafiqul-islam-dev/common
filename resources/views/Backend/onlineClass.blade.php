@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="iq-card">
              <div class="iq-card-header d-flex justify-content-between">
                 <div class="iq-header-title">
                    <h4 class="card-title">Syllabus List</h4>
                 </div>
              </div>
              <div class="iq-card-body">
               <div id="table" class="table-editable">
                 <span class="table-add float-right mb-3 mr-2">
                    <button class="btn btn-sm iq-bg-success" data-toggle="modal" data-target="#staticBackdrop"><i
                       class="ri-add-fill"><span class="pl-1">Add New</span></i>
                    </button>
                 </span>
                 <table id="example" class="table table-bordered table-responsive-md table-striped text-center">
                   <thead>
                     <tr>
                       <th>Sl</th>
                       <th>PDF</th>
                       <th>Action</th>

                     </tr>
                   </thead>
                   <tbody>

                     @foreach ($classsubject as $kye => $User )


                     <tr>
                        <td>{{$kye+1}}</td>
                        <td>{{$User->subject}}</td>
                        <td>{{$User->pdfDocument}}</td>
                        <td>
                           <div class="flex align-items-center list-user-action">
                              {{-- <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href=""><i class="ri-pencil-line"></i></a> --}}
                              <a id="delete" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="{{route('onlineclass.delet', $User->id)}}"><i class="ri-delete-bin-line"></i></a>
                           </div>
                        </td>
                     </tr>

                    @endforeach

                   </tbody>
                 </table>
               </div>
           </div>
        </div>
  </div>

  <!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Add Schedule</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="iq-card">
                <div class="iq-card-body">
                   <form  method="POST" action="{{ url('onlineStore')}}" id="myForm" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">

                         <div class="col-md-12 mb-3">
                            <input type="hidden" class="form-control" name="classID" value="{{$clasid->id}}" >
                         </div>

                         <div class="col-md-12 mb-3">
                           <input type="hidden" class="form-control" name="versionId" value="{{$clasid->classVersionID}}" >
                        </div>
                      </div>
                      <div class="form-row">

                         <div class="col-md-12 mb-3">
                            <label for="validationTooltipUsername">Subject</label>
                            <input type="text" class="form-control" name="subject" id="validationTooltipUsername" >
                         </div>
                      </div>
                      <div class="form-row">

                         <div class="col-md-12 mb-3">
                            <label for="validationTooltipUsername">Upload Pdf</label>
                            <input type="file" class="form-control" name="pdfDocument" id="validationTooltipUsername" >
                         </div>
                      </div>
                      {{-- <div class="form-row">

                         <div class="col-md-12 mb-3">
                            <label for="validationTooltipUsername">Exam Date</label>
                            <input type="date" class="form-control" name="examDate" id="validationTooltipUsername" >
                         </div>

                      </div>
                      <div class="form-row">

                         <div class="col-md-12 mb-3">
                            <label for="validationTooltipUsername">Exam Time</label>
                            <input type="time" class="form-control" name="examTime" id="validationTooltipUsername" >
                         </div>

                      </div>
                      <div class="form-row">

                         <div class="col-md-12 mb-3">
                            <label for="validationTooltipUsername">Exam Link</label>
                            <input type="text" class="form-control" name="examLink" id="validationTooltipUsername" >
                         </div>

                      </div> --}}
                      <button class="btn btn-primary pull-right" type="submit">Submit</button>
                   </form>

                </div>
             </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
 </div>

</div>





@endsection

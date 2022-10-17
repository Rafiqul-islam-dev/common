@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="iq-card">
              <div class="iq-card-header d-flex justify-content-between">
                 <div class="iq-header-title">
                    <h4 class="card-title">Branche List</h4>
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
                       <th>Branche Image</th>
                       <th>Branche Name</th>
                       <th>Branche Location</th>
                       <th>Branche Address</th>
                       <th>Branche Number</th>
                       <th>Branche Description</th>
                       <th>Action</th>

                     </tr>
                   </thead>
                   <tbody>
                  @foreach ($allData as $kye => $row)
                    <tr>
                    <td >{{$kye+1}}</td>
                    <td><img src="{{URL::to($row->branchImage)}}" alt="" style="width: 150px; height:150px"></td>
                    <td >{{$row->branchName}}</td>
                    <td >{{$row->branchlocation}}</td>
                    <td >{{$row->branchAddress}}</td>
                    <td >{{$row->branchNumber}}</td>
                    <td >{!!$row->branchDescription!!}</td>
                      <td>
                        <div class="flex align-items-center list-user-action">
                        <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="{{route('branche.edit',$row->id)}}"><i class="ri-pencil-line"></i></a>
                            <a id="delete" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="{{route('branche.delet',$row->id)}}"><i class="ri-delete-bin-line"></i></a>
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
          <h5 class="modal-title" id="staticBackdropLabel">Add Branche</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="iq-card">
                <div class="iq-card-body">
                   <form  method="POST" action="{{route('branche.store')}}" id="myForm" enctype="multipart/form-data">
                    @csrf
                      <div class="form-row">
                        <div class="col-lg-12 mb-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label >Photo</label>
                                    <input type="file" class="form-control" name="branchImage" accept="image/*"  onchange="readURL(this);">
                                </div>
                                <div class="col-lg-6">
                                <img id="image" src="{{url('public/upload/noimage.png')}}" />
                                </div>
                            </div>
                        </div>

                         <div class="col-md-12 mb-3">
                            <label for="validationTooltipUsername">Branch Name</label>
                            <input type="text" class="form-control" name="branchName" id="validationTooltipUsername" >
                         </div>
                         <div class="col-md-12 mb-3">
                            <label for="validationTooltipUsername">Branch Location</label>
                            <input type="text" class="form-control" name="branchlocation" id="validationTooltipUsername" >
                         </div>
                         <div class="col-md-12 mb-3">
                          <label for="validationTooltipUsername">Branch Address</label>
                          <input type="text" class="form-control" name="branchAddress" id="validationTooltipUsername" >
                       </div>
                         <div class="col-md-12 mb-3">
                            <label for="validationTooltipUsername">Branch Number</label>
                            <input type="text" class="form-control" name="branchNumber" id="validationTooltipUsername" >
                         </div>
                         <div class="col-md-12 mb-3">
                            <label for="validationTooltip03">Description</label>
                            <textarea id="summernote" name="branchDescription" cols="50" rows="10"></textarea>
                         </div>
                      </div>
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

<script type="text/javascript">
	function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#image')
                  .attr('src', e.target.result)
                  .width(226)
                  .height(100);
          };
          reader.readAsDataURL(input.files[0]);
      }
   }
</script>



@endsection

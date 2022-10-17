@extends('layouts.app')
@section('content')

<style>
    .modal-backdrop {
    position: fixed;

    z-index: -1;

}
</style>

<div class="row">
    <div class="col-sm-12">
        <div class="iq-card">
              <div class="iq-card-header d-flex justify-content-between">
                 <div class="iq-header-title">
                    <h4 class="card-title">institution</h4>
                 </div>
              </div>
              @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
                  </div>
              @endif
              <div class="iq-card-body">

                   @foreach ($allData as $key => $row)
<div class="iq-card-body">
               <form  method="POST" action="{{route('institution.update', $row->id)}}" id="myForm" enctype="multipart/form-data">
                @csrf
                  <div class="form-row labelAll">
                    <div class="col-md-12 mb-3">
                        <label for="validationTooltipUsername">Institution Name</label>
                    <input type="text" class="form-control" name="institutionName" value="{{$row->institutionName}}" >
                     </div>
                      <div class="col-md-6 mb-3">
                        <label for="validationTooltipUsername">Institution Address</label>
                    <input type="text" class="form-control" name="institutionAddress" value="{{$row->institutionAddress}}" >
                     </div>
                      <div class="col-md-6 mb-3">
                        <label for="validationTooltipUsername">Institution Estd</label>
                    <input type="text" class="form-control" name="institutionEstd" value="{{$row->institutionEstd}}" >
                     </div>
                      <div class="col-md-6 mb-3">
                        <label for="validationTooltipUsername">Institution Email</label>
                    <input type="email" class="form-control" name="institutionEmail" value="{{$row->institutionEmail}}" >
                     </div>
                      <div class="col-md-6 mb-3">
                        <label for="validationTooltipUsername">Institution Number</label>
                    <input type="text" class="form-control" name="institutionNumber" value="{{$row->institutionNumber}}" >
                     </div>
                     <div class="col-lg-12 mb-3">
                        <div class="row">
                            <div class="col-lg-6">
                                <label >Chairman Logo</label>
                                <input type="file" class="form-control" name="institutionLogo"   accept="image/*"  onchange="readURL(this);">
                            </div>
                            <div class="col-lg-6">
                            <img id="image" src="{{ URL::to($row->institutionLogo) }}"  style="height: 80px; width: 80px;">
                            <input  type="hidden" name="old_photo" value="{{ $row->institutionLogo }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="validationTooltip03">Institution History</label>
                    <textarea id="summernote3" name="institutionHistory" cols="50" rows="10">{{$row->institutionHistory}}</textarea>
                     </div>
                     <p style="background: #F36883;padding: 10px 48px 10px 22px; color:#000;font-weight: bold;">Chairman Information</p>
                    <div class="col-md-12 mb-3">
                        <label for="validationTooltipUsername">Chairman Name</label>
                        <input type="text" class="form-control" name="chairmanName" value="{{$row->chairmanName}}" >
                     </div>
                    <div class="col-lg-12 mb-3">
                        <div class="row">
                            <div class="col-lg-6">
                                <label >Chairman Image</label>
                                <input type="file" class="form-control" name="chairmanImage"   accept="image/*"  onchange="readURL(this);">
                            </div>
                            <div class="col-lg-6">
                            <img id="image" src="{{ URL::to($row->chairmanImage) }}"  style="height: 80px; width: 80px;">
                            <input  type="hidden" name="old_photo" value="{{ $row->chairmanImage }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="validationTooltip03">Chairman Message</label>
                        <textarea id="summernote" name="chairmanMessage" cols="50" rows="10">{{$row->chairmanMessage}}</textarea>
                     </div>

                     <p style="background: #F36883;padding: 10px 48px 10px 22px; color:#000;font-weight: bold;">Principal Information</p>
                    <div class="col-md-12 mb-3">
                        <label for="validationTooltipUsername">Principal Name</label>
                        <input type="text" class="form-control" name="principalName" value="{{$row->principalName}}" >
                     </div>

                    <div class="col-lg-12 mb-3">
                        <div class="row">
                            <div class="col-lg-6">
                                <label >Principal Image</label>
                                <input type="file" class="form-control" name="principalImage"   accept="image/*"  onchange="readURL(this);">
                            </div>
                            <div class="col-lg-6">
                            <img id="image" src="{{ URL::to($row->principalImage) }}"  style="height: 80px; width: 80px;">
                            <input  type="hidden" name="old_photo" value="{{ $row->principalImage }}">
                            </div>
                        </div>
                    </div>

                     <div class="col-md-12 mb-3">
                        <label for="validationTooltip03">Principal Message</label>
                        <textarea id="summernote2" name="principalMessage" cols="50" rows="10">{{$row->principalMessage}}</textarea>
                     </div>
                  </div>
                  <button class="btn btn-primary pull-right saveButton" type="submit">Update</button>
               </form>

            </div>
                    @endforeach

               </div>
           </div>
        </div>
  </div>

  <!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Add Notice</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="iq-card">

                <div class="iq-card-body">
                   <form  method="POST" action="{{route('institution.store')}}" id="myForm" enctype="multipart/form-data">
                    @csrf
                      <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="validationTooltipUsername">Institution Name</label>
                            <input type="text" class="form-control" name="institutionName" id="validationTooltipUsername" >
                         </div>
                         <div class="col-md-12 mb-3">
                            <label for="validationTooltipUsername">Institution Name</label>
                            <input type="text" class="form-control" name="institutionName" id="validationTooltipUsername" >
                         </div>
                         <div class="col-lg-12 mb-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label >Institution Logo</label>
                                    <input type="file" class="form-control" name="institutionImage" accept="*"  onchange="readURL(this);">
                                </div>
                                <div class="col-lg-6">
                                <img id="image" src="{{url('public/upload/noimage.png')}}" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="validationTooltip03">Institution History</label>
                            <textarea id="summernote3" name="institutionHistory" cols="50" rows="10"></textarea>
                         </div>
                         <p style="background: #F36883;padding: 10px 48px 10px 22px; color:#000;font-weight: bold;">Chairman Information</p>
                        <div class="col-md-12 mb-3">
                            <label for="validationTooltipUsername">Chairman Name</label>
                            <input type="text" class="form-control" name="chairmanName" id="validationTooltipUsername" >
                         </div>
                        <div class="col-lg-12 mb-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label >Chairman Image</label>
                                    <input type="file" class="form-control" name="chairmanImage" accept="*"  onchange="readURL(this);">
                                </div>
                                <div class="col-lg-6">
                                <img id="image" src="{{url('public/upload/noimage.png')}}" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="validationTooltip03">Chairman Message</label>
                            <textarea id="summernote" name="chairmanMessage" cols="50" rows="10"></textarea>
                         </div>

                         <p style="background: #F36883;padding: 10px 48px 10px 22px; color:#000;font-weight: bold;">Principal Information</p>
                        <div class="col-md-12 mb-3">
                            <label for="validationTooltipUsername">Principal Name</label>
                            <input type="text" class="form-control" name="principalName" id="validationTooltipUsername" >
                         </div>

                        <div class="col-lg-12 mb-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label >Principal Image</label>
                                    <input type="file" class="form-control" name="principalImage" accept="*"  onchange="readURL(this);">
                                </div>
                                <div class="col-lg-6">
                                <img id="image" src="{{url('public/upload/noimage.png')}}" />
                                </div>
                            </div>
                        </div>

                         <div class="col-md-12 mb-3">
                            <label for="validationTooltip03">Principal Message</label>
                            <textarea id="summernote2" name="principalMessage" cols="50" rows="10"></textarea>
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

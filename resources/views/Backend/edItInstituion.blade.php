@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="iq-card">

            <div class="iq-card-body">
               <form  method="POST" action="{{route('institution.update', $editData->id)}}" id="myForm" enctype="multipart/form-data">
                @csrf
                  <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="validationTooltipUsername">Institution Name</label>
                    <input type="text" class="form-control" name="institutionName" value="{{$editData->institutionName}}" >
                     </div>
                    <div class="col-md-12 mb-3">
                        <label for="validationTooltip03">Institution History</label>
                    <textarea id="summernote3" name="institutionHistory" cols="50" rows="10">{{$editData->institutionHistory}}</textarea>
                     </div>
                     <p style="background: #F36883;padding: 10px 48px 10px 22px; color:#000;font-weight: bold;">Chairman Information</p>
                    <div class="col-md-12 mb-3">
                        <label for="validationTooltipUsername">Chairman Name</label>
                        <input type="text" class="form-control" name="chairmanName" value="{{$editData->chairmanName}}" >
                     </div>
                    <div class="col-lg-12 mb-3">
                        <div class="row">
                            <div class="col-lg-6">
                                <label >Chairman Image</label>
                                <input type="file" class="form-control" name="chairmanImage"   accept="image/*"  onchange="readURL(this);">
                            </div>
                            <div class="col-lg-6">
                            <img id="image" src="{{ URL::to($editData->chairmanImage) }}"  style="height: 80px; width: 80px;">
                            <input  type="hidden" name="old_photo" value="{{ $editData->chairmanImage }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="validationTooltip03">Chairman Message</label>
                        <textarea id="summernote" name="chairmanMessage" cols="50" rows="10">{{$editData->chairmanMessage}}</textarea>
                     </div>
                     
                     <p style="background: #F36883;padding: 10px 48px 10px 22px; color:#000;font-weight: bold;">Principal Information</p>
                    <div class="col-md-12 mb-3">
                        <label for="validationTooltipUsername">Principal Name</label>
                        <input type="text" class="form-control" name="principalName" value="{{$editData->principalName}}" >
                     </div>
                     
                    <div class="col-lg-12 mb-3">
                        <div class="row">
                            <div class="col-lg-6">
                                <label >Principal Image</label>
                                <input type="file" class="form-control" name="principalImage"   accept="image/*"  onchange="readURL(this);">
                            </div>
                            <div class="col-lg-6">
                            <img id="image" src="{{ URL::to($editData->principalImage) }}"  style="height: 80px; width: 80px;">
                            <input  type="hidden" name="old_photo" value="{{ $editData->principalImage }}">
                            </div>
                        </div>
                    </div>

                     <div class="col-md-12 mb-3">
                        <label for="validationTooltip03">Principal Message</label>
                        <textarea id="summernote2" name="principalMessage" cols="50" rows="10">{{$editData->principalMessage}}</textarea>
                     </div>
                  </div>
                  <button class="btn btn-primary pull-right" type="submit">Submit</button>
               </form>

            </div>
         </div>
  </div>

  <!-- Modal -->

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

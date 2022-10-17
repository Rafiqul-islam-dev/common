@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-sm-8 m-auto">
        <div class="iq-card">
            <div class="iq-card-body">
               <form  method="POST" action="{{route('branche.update',$editData->id)}}" id="myForm" enctype="multipart/form-data">
                @csrf
                  <div class="form-row">
                    <div class="col-lg-12 mb-3">
                        <div class="row">
                            <div class="col-lg-6">
                                <label >Photo</label>
                                <input type="file" class="form-control" name="albumImage"   accept="*"  onchange="readURL(this);">
                            </div>
                            <div class="col-lg-6">
                            <img id="image" src="{{ URL::to($editData->branchImage) }}"  style="height: 80px; width: 80px;">
                            <input  type="hidden" name="old_photo" value="{{ $editData->branchImage }}">
                            </div>
                        </div>
                        
                    </div>

                     <div class="col-md-12 mb-3">
                        <label for="validationTooltipUsername">Branch Name</label>
                     <input type="text" class="form-control" name="branchName" value="{{$editData->branchName}}" >
                     </div>
                     <div class="col-md-12 mb-3">
                        <label for="validationTooltipUsername">Branch Location</label>
                        <input type="text" class="form-control" name="branchlocation" value="{{$editData->branchlocation}}" >
                     </div>
                     <div class="col-md-12 mb-3">
                        <label for="validationTooltipUsername">Branch Address</label>
                     <input type="text" class="form-control" name="branchAddress" value="{{$editData->branchAddress}}" >
                     </div>
                     <div class="col-md-12 mb-3">
                        <label for="validationTooltipUsername">Branch Number</label>
                        <input type="text" class="form-control" name="branchNumber" value="{{$editData->branchNumber}}" >
                     </div>
                     <div class="col-md-12 mb-3">
                        <label for="validationTooltip03">Description</label>
                     <textarea id="summernote" name="branchDescription" cols="50" rows="10">{{$editData->branchDescription}}</textarea>
                     </div>
                  </div>
                  <button class="btn btn-primary pull-right" type="submit">Submit</button>
               </form>

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

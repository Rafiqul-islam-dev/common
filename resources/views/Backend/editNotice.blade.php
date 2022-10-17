@extends('layouts.app')
@section('content')

 <div class="modal-body">
            <div class="iq-card">
                <div class="iq-card-body">
                   <form  method="POST" action="{{route('notice.update',$editData->id)}}" id="myForm" enctype="multipart/form-data">
                    @csrf
                      <div class="form-row">
                        <div class="col-lg-12 mb-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label >Photo</label>
                                    <input type="file" class="form-control" name="imagePath"   accept="*"  onchange="readURL(this);">
                                </div>
                                <div class="col-lg-6">
                                <img id="image" src="{{ URL::to($editData->image) }}"  style="height: 80px; width: 80px;">
                                <input  type="hidden" name="old_photo" value="{{ $editData->image }}">
                                </div>
                            </div>
                        </div>

                         <div class="col-md-12 mb-3">
                            <label for="validationTooltipUsername">Title</label>
                            <input type="text" class="form-control" name="title"  value="{{ $editData->title }}" id="validationTooltipUsername" >
                         </div>
                         <div class="col-md-12 mb-3">
                            <label for="validationTooltip03">Description</label>
                            <textarea id="summernote" name="description" cols="50" rows="10">{{ $editData->description }}</textarea>
                         </div>
                      </div>
                      <button class="btn btn-primary pull-right" type="submit">Submit</button>
                   </form>

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

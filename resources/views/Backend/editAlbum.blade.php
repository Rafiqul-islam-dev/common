@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-sm-8 m-auto">
        <div class="iq-card">
            <div class="iq-card-body">
                <form  method="POST" action="{{route('album.update',$editData->id)}}" id="myForm" enctype="multipart/form-data">
                 @csrf
                   <div class="form-row">
                      <div class="col-md-12 mb-3">
                         <label for="validationTooltipUsername">Album Name</label>
                         <input type="text" class="form-control" name="albumName" value="{{ $editData->albumName }}" >
                      </div>

                      <div class="col-lg-12 mb-3">
                        <div class="row">
                            <div class="col-lg-6">
                                <label >Photo</label>
                                <input type="file" class="form-control" name="albumImage"   accept="*"  onchange="readURL(this);">
                            </div>
                            <div class="col-lg-6">
                            <img id="image" src="{{ URL::to($editData->albumImage) }}"  style="height: 80px; width: 80px;">
                            <input  type="hidden" name="old_photo" value="{{ $editData->albumImage }}">
                            </div>
                        </div>
                    </div>
                   </div>
                   <button class="btn btn-primary pull-right" type="submit">Submit</button>
                </form>

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

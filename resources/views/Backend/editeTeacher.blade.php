@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-sm-8 m-auto">
        <div class="iq-card">
            <div class="iq-card-body">
                <form  method="POST" action="{{route('teacher.update',$editData->id)}}" id="myForm" enctype="multipart/form-data">
                 @csrf
                   <div class="form-row">
                      <div class="col-md-12 mb-3">
                            <label for="validationTooltipUsername">Name</label>
                            <input type="text" class="form-control" name="name" value="{{$editData->name}}" >
                         </div>
                         <div class="col-md-12 mb-3">
                            <label for="validationTooltipUsername">Designation</label>
                            <input type="text" class="form-control" name="designation" value="{{$editData->designation}}" >
                         </div>
                         <div class="col-md-12 mb-3">
                            <label for="validationTooltipUsername">Mobil Number</label>
                            <input type="text" class="form-control" name="number" value="{{$editData->number}}" >
                         </div>
                         <div class="col-md-12 mb-3">
                            <label for="validationTooltipUsername">Email</label>
                            <input type="email" class="form-control" name="email" value="{{$editData->email}}" >
                         </div>
                         <div class="col-md-12 mb-3">
                            <label for="validationTooltipUsername">Joining Date</label>
                            <input type="date" class="form-control" name="joiningDate" value="{{$editData->joiningDate}}" >
                         </div>

                      <div class="col-lg-12 mb-3">
                        <div class="row">
                            <div class="col-lg-6">
                                <label >Photo</label>
                                <input type="file" class="form-control" name="image"   accept="*"  onchange="readURL(this);">
                            </div>
                            <div class="col-lg-6">
                            <img id="image" src="{{ URL::to($editData->image) }}"  style="height: 80px; width: 80px;">
                            <input  type="hidden" name="old_photo" value="{{ $editData->image }}">
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

@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-sm-8 m-auto">
        <div class="iq-card">
            <div class="iq-card-body">
                <form  method="POST" action="{{route('onlineExam.update', $editData->id)}}" id="myForm" enctype="multipart/form-data">
                 @csrf
                   <div class="form-row">
                      <div class="col-md-12 mb-3">
                            <label for="validationTooltipUsername">Class Name English</label>
                            <input type="text" class="form-control" name="classNameEnglish" value="{{$editData->classNameEnglish}}" >
                         </div>
                      </div>
                      <div class="form-row">

                         <div class="col-md-12 mb-3">
                            {{-- <label for="validationTooltipUsername">Class Name Bangla</label> --}}
                            <input type="hidden" class="form-control" name="classVersionID" value="{{$editData->classVersionID}}" >
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

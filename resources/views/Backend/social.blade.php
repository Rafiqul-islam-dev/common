@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-sm-8 m-auto">
        <div class="iq-card">
              <div class="iq-card-header d-flex justify-content-between">
                 <div class="iq-header-title">
                    <h4 class="card-title">Social List</h4>
                 </div>
              </div>
              <div class="iq-card-body">
                  @foreach ($cornerData as $row)


                <form  method="POST" action="{{route('social.update', $row->id)}}" id="myForm" enctype="multipart/form-data">
                @csrf
                  <div class="form-row labelAll">

                      <div class="col-md-6 mb-3">
                        <label for="validationTooltipUsername">Facebook</label>
                         <input type="text" class="form-control" name="facebook" value="{{$row->facebook}}" >
                     </div>
                     <div class="col-md-6 mb-3">
                        <label for="validationTooltipUsername">Youtube</label>
                         <input type="text" class="form-control" name="youtube" value="{{$row->youtube}}" >
                     </div>

                     <div class="col-md-12 mb-3">
                        <label for="validationTooltip03">Linkdin</label>
                        <input type="text" class="form-control" name="linkdin" value="{{$row->linkdin}}" >
                     </div>

                      <div class="col-md-12 mb-3">
                        <label for="validationTooltip03">Video Link(Home Page)</label>
                        <input type="text" class="form-control" name="fontvideo" value="{{$row->fontvideo}}" >
                     </div>
                     <div class="col-lg-12 mb-3">
                        <div class="row">
                            <div class="col-lg-6">
                                <label >Video Background Image</label>
                                <input type="file" class="form-control" name="videoImage"   accept="image/*"  onchange="readURL(this);">
                            </div>
                            <div class="col-lg-6">
                            <img id="image" src="{{ URL::to($row->videoImage) }}"  style="height: 80px; width: 80px;">
                            <input  type="hidden" name="old_photo" value="{{ $row->videoImage }}">
                            </div>
                        </div>
                    </div>



                  </div>
                  <button class="btn btn-primary pull-right saveButton" type="submit">Submit</button>
               </form>
            @endforeach
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

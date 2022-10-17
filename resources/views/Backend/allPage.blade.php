@extends('layouts.app')
@section('content')

<style>
    .modal-backdrop {
    position: fixed;

    z-index: -1;

}
</style>

<div class="row">
    <div class="col-sm-8 m-auto">
        <div class="iq-card">
              <div class="iq-card-header d-flex justify-content-between">
                 <div class="iq-header-title">
                    <h4 class="card-title">Page Data</h4>
                 </div>
              </div>
              <div class="iq-card-body">
                  @foreach ($pageData as $row)


                <form  method="POST" action="{{route('page.update', $row->id)}}" id="myForm" enctype="multipart/form-data">
                @csrf
                  <div class="form-row labelAll">

                      <div class="col-md-12 mb-3">
                            <label for="validationTooltip03">Admission circular</label>
                            <textarea id="summernote" name="admission" cols="50" rows="10">{!!$row->admission!!}</textarea>
                         </div>

                  </div>
                  <div class="form-row labelAll">

                      <div class="col-md-12 mb-3">
                            <label for="validationTooltip03">Extra curriculam activities</label>
                            <textarea id="summernote2" name="curriculam" cols="50" rows="10">{!!$row->curriculam!!}</textarea>
                         </div>

                  </div>
                  <button class="btn btn-primary pull-right saveButton" type="submit">Submit</button>
               </form>
             @endforeach
           </div>
        </div>
  </div>

  <!-- Modal -->


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

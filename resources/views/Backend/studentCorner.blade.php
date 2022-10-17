@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-sm-8 m-auto">
        <div class="iq-card">
              <div class="iq-card-header d-flex justify-content-between">
                 <div class="iq-header-title">
                    <h4 class="card-title">Branche List</h4>
                 </div>
              </div>
              <div class="iq-card-body">
                  @foreach ($cornerData as $row)


                <form  method="POST" action="{{route('studentCorner.update', $row->id)}}" id="myForm" enctype="multipart/form-data">
                @csrf
                  <div class="form-row labelAll">

                          <div class="col-lg-12">
                              <h4 style="font-weight: bold; margin-bottom: -20px;">Student Corner 1</h4> <br>
                          </div>

                      <div class="col-md-6 mb-3">
                        <label for="validationTooltipUsername">Name</label>
                         <input type="text" class="form-control" name="name1" value="{{$row->name1}}" >
                     </div>
                     <div class="col-md-6 mb-3">
                        <label for="validationTooltipUsername">Title</label>
                         <input type="text" class="form-control" name="title1" value="{{$row->title1}}" >
                     </div>

                     <div class="col-md-12 mb-3">
                        <label for="validationTooltip03">Description</label>
                        <textarea class="form-control" name="description1" >{{$row->description1}}</textarea>
                     </div>
                     <div class="col-lg-12">
                              <h4 style="font-weight: bold; margin-bottom: -20px;">Student Corner 2</h4> <br>
                          </div>
                     <div class="col-md-6 mb-3">
                        <label for="validationTooltipUsername">Name</label>
                         <input type="text" class="form-control" name="name2" value="{{$row->name2}}" >
                     </div>
                     <div class="col-md-6 mb-3">
                        <label for="validationTooltipUsername">Title</label>
                     <input type="text" class="form-control" name="title2" value="{{$row->title2}}" >
                     </div>

                     <div class="col-md-12 mb-3">
                        <label for="validationTooltip03">Description</label>
                        <textarea class="form-control" name="description2" >{{$row->description2}}</textarea>
                     </div>
                     <div class="col-lg-12">
                              <h4 style="font-weight: bold; margin-bottom: -20px;">Student Corner 3</h4> <br>
                          </div>
                     <div class="col-md-6 mb-3">
                        <label for="validationTooltipUsername">Name</label>
                         <input type="text" class="form-control" name="name3" value="{{$row->name3}}" >
                     </div>
                     <div class="col-md-6 mb-3">
                        <label for="validationTooltipUsername">Title</label>
                     <input type="text" class="form-control" name="title3" value="{{$row->title3}}" >
                     </div>

                     <div class="col-md-12 mb-3">
                        <label for="validationTooltip03">Description</label>
                        <textarea class="form-control" name="description3" >{{$row->description3}}</textarea>
                     </div>

                  </div>
                  <button class="btn btn-primary pull-right saveButton" type="submit">Submit</button>
               </form>
            @endforeach
           </div>
        </div>
  </div>

  <!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Add News & Event</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="iq-card">
                <div class="iq-card-body">
                   <form  method="POST" action="{{route('newsEvent.store')}}" id="myForm" enctype="multipart/form-data">
                    @csrf
                      <div class="form-row">
                        <div class="col-lg-12 mb-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label >Photo</label>
                                    <input type="file" class="form-control" name="image" accept="image/*"  onchange="readURL(this);">
                                </div>
                                <div class="col-lg-6">
                                <img id="image" src="{{url('public/upload/noimage.png')}}" />
                                </div>
                            </div>
                        </div>

                         <div class="col-md-12 mb-3">
                            <label for="validationTooltipUsername">Title</label>
                            <input type="text" class="form-control" name="title" id="validationTooltipUsername" >
                         </div>

                         <div class="col-md-12 mb-3">
                            <label for="validationTooltip03">Description</label>
                            <textarea id="summernote" name="description" cols="50" rows="10"></textarea>
                         </div>
                         <div class="col-md-12 mb-3">
                            <input class="form-check-input" type="checkbox" value="1" name="is_big" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Big
                            </label>
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

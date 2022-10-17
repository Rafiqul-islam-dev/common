@extends('layouts.app')
@section('content')

 <div class="modal-body">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="iq-card">
                <div class="iq-card-body">
                   <form  method="POST" action="{{route('impLink.update', $editData->id)}}" id="myForm" enctype="multipart/form-data">
                    @csrf
                      <div class="form-row">


                         <div class="col-md-12 mb-3">
                            <label for="validationTooltipUsername">Title</label>
                            <input type="text" class="form-control" name="title"  value="{{ $editData->title }}" id="validationTooltipUsername" >
                         </div>
                         <div class="col-md-12 mb-3">
                            <label for="validationTooltipUsername">Title</label>
                            <input type="text" class="form-control" name="link"  value="{{ $editData->link }}" id="validationTooltipUsername" >
                         </div>

                      </div>
                      <button class="btn btn-primary pull-right" type="submit">Submit</button>
                   </form>

                </div>
             </div>
                </div>
            </div>
        </div>





@endsection

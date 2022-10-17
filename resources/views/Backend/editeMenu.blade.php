@extends('layouts.app')
@section('content')

<div class="iq-card" style="margin-top: 140px;padding-bottom: 50px;">
    <div class="iq-card-body">
       <form class="needs-validation" method="POST" action="{{route('menu.update',$editData->id)}}" id="myForm">
        @csrf
          <div class="form-row">

          <div class="col-lg-12">
            <h3>Edit User</h3>
          </div>

             <div class="col-md-6 mb-3">
                <label for="validationTooltip02">Name English</label>
                <input type="text" class="form-control" id="validationTooltip02" value="{{$editData->MenuName}}" name="MenuName" >
             </div>
             <div class="col-md-6 mb-3">
                <label for="validationTooltip02">Name Bangla</label>
                <input type="text" class="form-control" id="validationTooltip02" value="{{$editData->MenunameBangla}}" name="MenunameBangla" >
             </div>
             <div class="col-md-6 mb-3">
                <label for="validationTooltip02">Parent id</label>
                <input type="text" class="form-control" id="validationTooltip02" value="{{$editData->ParentId}}" name="ParentId" >
             </div>
             <div class="col-md-6 mb-3">
                <label for="validationTooltip02">Url</label>
                <input type="text" class="form-control" id="validationTooltip02" value="{{$editData->url}}" name="url" >
             </div>
          </div>
          <button class="btn btn-primary pull-right" type="submit">Submit</button>
       </form>

    </div>
 </div>


@endsection

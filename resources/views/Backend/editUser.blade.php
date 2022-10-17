@extends('layouts.app')
@section('content')

<div class="iq-card" style="margin-top: 140px;padding-bottom: 50px;">
    <div class="iq-card-body">
       <form class="needs-validation" method="POST" action="{{route('users.update',$editData->id)}}" id="myForm">
        @csrf
          <div class="form-row">

          <div class="col-lg-12">
            <h3>Edit User</h3>
          </div>
            <div class="col-md-6 mb-3">
                <label for="validationTooltip04">User Type</label>
                <select class="form-control" name="userType" id="validationTooltip04" >
                   <option  value="">Select Role</option>
                   <option value="Admin" {{($editData->userType=="Admin")?"selected":""}}>Admin</option>
                   <option value="User" {{($editData->userType=="User")?"selected":""}}>User</option>
                </select>
             </div>

             <div class="col-md-6 mb-3">
                <label for="validationTooltip02">Name</label>
                <input type="text" class="form-control" id="validationTooltip02" value="{{$editData->name}}" name="name" >


             </div>
             <div class="col-md-6 mb-3">
                <label for="validationTooltipUsername">Email</label>
                <input type="email" class="form-control" name="email" value="{{$editData->email}}" id="validationTooltipUsername" >
             </div>
          </div>
          <button class="btn btn-primary pull-right" type="submit">Submit</button>
       </form>

    </div>
 </div>


@endsection

@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-sm-12">
          <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                   <div class="iq-header-title">
                      <h4 class="card-title">User List</h4>
                   </div>
                </div>
                <div class="iq-card-body">
                 <div id="table" class="table-editable">
                   <span class="table-add float-right mb-3 mr-2">
                      <button class="btn btn-sm iq-bg-success" data-toggle="modal" data-target="#staticBackdrop"><i
                         class="ri-add-fill"><span class="pl-1">Add New</span></i>
                      </button>
                   </span>
                   <table id="example" class="table table-bordered table-responsive-md table-striped text-center">
                     <thead>
                       <tr>
                         <th>Sl</th>
                         <th>Name</th>
                         <th>Email</th>
                         <th>Role</th>
                         <th>Action</th>
                       </tr>
                     </thead>
                     <tbody>
                         @foreach ($allData as $kye => $User )
                       <tr>
                         <td contenteditable="true">{{$kye+1}}</td>
                         <td contenteditable="true">{{$User->name}}</td>
                         <td contenteditable="true">{{$User->email}}</td>
                         <td contenteditable="true">{{$User->userType}}</td>
                         <td>
                            <div class="flex align-items-center list-user-action">
                               <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Add" href=""><i class="ri-user-add-line"></i></a>
                            <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="{{route('users.edit',$User->id)}}"><i class="ri-pencil-line"></i></a>
                               <a id="delete" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="{{route('users.delet',$User->id)}}"><i class="ri-delete-bin-line"></i></a>
                            </div>
                         </td>
                       </tr>
                       @endforeach
                     </tbody>
                   </table>
                 </div>
             </div>
          </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Add User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="iq-card">
                <div class="iq-card-body">
                   <form class="needs-validation" method="POST" action="{{route('users.store')}}" id="myForm">
                    @csrf
                      <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationTooltip04">User Type</label>
                            <select class="form-control" name="userType" id="validationTooltip04" >
                               <option selected="" disabled="" value="">Select Role</option>
                               <option value="Admin">Admin</option>
                               <option value="User">User</option>
                            </select>
                            <div class="valid-feedback">
                                Looks good!
                             </div>

                         </div>

                         <div class="col-md-6 mb-3">
                            <label for="validationTooltip02">Name</label>
                            <input type="text" class="form-control" id="validationTooltip02" name="name" >
                            <div class="valid-feedback">
                                Looks good!
                             </div>
                            <font style="color: red">{{($errors->has('name'))?($errors->first('name')):''}}</font>

                         </div>
                         <div class="col-md-6 mb-3">
                            <label for="validationTooltipUsername">Email</label>
                            <input type="email" class="form-control" name="email" id="validationTooltipUsername" >
                            <div class="valid-feedback">
                                Looks good!
                             </div>
                               <font style="color: red">{{($errors->has('email'))?($errors->first('email')):''}}</font>
                         </div>
                         <div class="col-md-6 mb-3">
                            <label for="validationTooltip03">Password</label>
                            <input type="password" class="form-control" name="password" id="validationTooltip03" required>
                            <div class="valid-feedback">
                                Looks good!
                             </div>
                         </div>

                         <div class="col-md-6 mb-3">
                            <label for="validationTooltip05">Conform Password</label>
                            <input type="password" class="form-control" name="password2" id="validationTooltip03" >

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

@endsection


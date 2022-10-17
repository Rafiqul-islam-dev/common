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
                         <th>ID</th>
                         <th>Name English</th>
                         <th>Name Bangla</th>
                         <th>Parent id</th>
                         <th>Display</th>
                         <th>Action</th>
                       </tr>
                     </thead>
                     <tbody>

                        @foreach ($allData as $kye => $menu )
                        <tr>
                          <td contenteditable="true">{{$menu->id}}</td>
                          <td contenteditable="true">{{$menu->MenuName}}</td>
                          <td contenteditable="true">{{$menu->MenunameBangla}}</td>
                          <td contenteditable="true">{{$menu->ParentId}}</td>
                          <td contenteditable="true">{{$menu->Is_Active}}</td>
                          <td>
                             <div class="flex align-items-center list-user-action">

                             <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="{{route('menu.edit',$menu->id)}}"><i class="ri-pencil-line"></i></a>
                                <a id="delete" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="{{route('menu.delet',$menu->id)}}"><i class="ri-delete-bin-line"></i></a>
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
                   <form class="needs-validation" method="POST" action="{{route('menu.store')}}" id="myForm">
                    @csrf
                      <div class="form-row">

                         <div class="col-md-6 mb-3">
                            <label for="validationTooltip02">Name Bangla</label>
                            <input type="text" class="form-control" id="validationTooltip02" name="MenunameBangla" >
                            <div class="valid-feedback">
                                Looks good!
                             </div>
                            <font style="color: red">{{($errors->has('name'))?($errors->first('name')):''}}</font>

                         </div>
                         <div class="col-md-6 mb-3">
                            <label for="validationTooltip02">Name English</label>
                            <input type="text" class="form-control" id="validationTooltip02" name="MenuName" >
                            <div class="valid-feedback">
                                Looks good!
                             </div>
                            <font style="color: red">{{($errors->has('name'))?($errors->first('name')):''}}</font>

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


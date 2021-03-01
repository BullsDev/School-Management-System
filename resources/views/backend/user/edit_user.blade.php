@extends('admin.admin_master')
@section('admin')

    <div class="content-wrapper">
        <div class="container-full">
            <section class="content">
                <section class="content">
                    <!-- Basic Forms -->
                    <div class="box">
                        <div class="box-header with-border">
                            <h4 class="box-title">Update User</h4>
                        </div>
                        <div class="box-body">
                            <div class="row">
                                <div class="col">
                                    <form method="POST" action="{{route('user.update', $editData->id)}}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12">
                                                {{-- First Row for User Type and User Name--}}
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <h5>Role <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <select name="usertype" id="usertype" value="" required= "" class="form-control">
                                                                    <option value="" selected="" disabled="">Select Role</option>
                                                                    <option value="Admin" {{ ($editData->usertype == "Admin" ? "selected": "") }}>Admin</option>
                                                                    <option value="User" {{ ($editData->usertype == "User" ? "selected": "") }}>User</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <h5>User Name <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="text" name="name" class="form-control" value="{{$editData->name}}"  required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- End Of Row --}}

                                                {{-- Second Row for Email and Password--}}
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <h5>Email <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="email" name="email" class="form-control" value="{{$editData->email}}"  required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <h5>Phone Number <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="text" name="mobile" class="form-control" value="{{$editData->mobile}}"  required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <h5>Address <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="text" name="address" class="form-control" value="{{$editData->address}}"  required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <h5>Gender <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="text" name="gender" class="form-control" value="{{$editData->gender}}"  required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- End Of Row --}}
                                            </div>
                                            <div class="text-xs-right">
                                                <input type="Submit" class="btn btn-rounded btn-info mb-5  ml-15" value="Udate">      
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
        </div>
    </div>
@endsection

@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <div class="content-wrapper">
        <div class="container-full">
            <section class="content">
                <section class="content">
                    <!-- Basic Forms -->
                    <div class="box">
                        <div class="box-header with-border">
                            <h4 class="box-title">Manage Profile</h4>
                        </div>
                        <div class="box-body">
                            <div class="row">
                                <div class="col">
                                    {{-- <form method="POST" action="{{route('profile.update', $editData->id)}}"> --}}
                                    <form method="POST" action="{{ route('profile.store') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12">


                                                {{-- First Row for Email and Phone --}}
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <h5>Name <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="text" name="name" class="form-control"
                                                                    value="{{ $editData->name }}" required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <h5>Email <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="email" name="email" class="form-control"
                                                                    value="{{ $editData->email }}" required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- Second Row for Address and Gender --}}
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <h5>Phone Number <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="text" name="mobile" class="form-control"
                                                                    value="{{ $editData->mobile }}" required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <h5>Address <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="text" name="address" class="form-control"
                                                                    value="{{ $editData->address }}" required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- Third Row for User Type and User Name --}}
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <h5>Gender<span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <select name="gender" id="gender" required=""
                                                                    class="form-control">

                                                                    <option value="Male"
                                                                        {{ $editData->gender == 'Male' ? 'selected' : '' }}>
                                                                        Male</option>
                                                                    <option value="Female"
                                                                        {{ $editData->gender == 'Femail' ? 'selected' : '' }}>
                                                                        Female</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <h5>Profile Image <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="file" name="image" class="form-control"
                                                                    id="image">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <img id="showImage"
                                                                    src="{{ !empty($editData->image) ? url('upload/user_images/' . $editData->image) : url('upload/no_image.jpg') }}"
                                                                    style="width: 100px; height: 100px; boarder: 2px solid #000000">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- End Of Row --}}
                                            </div>
                                            <div class="text-xs-right">
                                                <input type="Submit" class="btn btn-rounded btn-info mb-5  ml-15"
                                                    value="Udate">
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

    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result)
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });

    </script>
@endsection

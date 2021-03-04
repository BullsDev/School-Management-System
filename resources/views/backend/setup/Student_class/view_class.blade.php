@extends('admin.admin_master')
@section('admin')

    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Student Class List</h3>
                                <a href={{route('student.class.add')}} style="float: right;" class="btn btn-rounded btn-success mb-5">Add Student Class</a>
                            </div>
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th width="5%">SL</th>
                                                <th>Name</th>
                                                <th width="25%">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($allData as $key => $student)
                                            <tr>
                                                <td>{{$key+1}}</td>
                                                <td>{{$student->name}}</td>
                                                <td>
                                                    <a href={{route('student.class.edit',$student->id)}} class="btn btn-info btn-md">edit</a>
                                                    <a href={{route('student.class.delete',$student->id)}} class="btn btn-danger btn-md" id="delete">delete</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        {{-- <tfoot>
                                            <tr>
                                                 <td>SL</td>
                                                <td>Role</td>
                                                <td>Name</td>
                                                <td>Email</td>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot> --}}
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>
    </div>
@endsection

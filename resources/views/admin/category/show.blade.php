@extends('layouts.adminbase')

@section('title', 'Edit Category')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <a href="{{route('admin_category_edit', ['id' => $data ->id])}}" class="btn btn-info">Edit category</a>

        <a href="{{route('admin_category_destroy', ['id' => $data ->id])}}" class="btn btn-danger"
           onclick="return confirm('You\'re about the delete the item. Sure? ')" >Delete category</a>

        <p>
        </p>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Show Category {{$data->title}}</h6>
            </div>
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table table-striped">
                        <tr>
                            <th style="width: 30px">Id</th>
                            <td>{{$data->id}}</td>
                        </tr>
                        <tr>
                            <th style="width: 30px">Title</th>
                            <td>{{$data->title}}</td>
                        </tr>
                        <tr>
                            <th style="width: 30px">Keywords</th>
                            <td>{{$data->keywords}}</td>
                        </tr>
                        <tr>
                            <th style="width: 30px">Image</th>
                            <td>{{$data->image}}</td>
                        </tr>
                        <tr>
                            <th style="width: 30px">Status</th>
                            <td>{{$data->status}}</td>
                        </tr>
                        <tr>
                            <th style="width: 30px">Date Created</th>
                            <td>{{$data->created_at}}</td>
                        </tr>
                        <tr>
                            <th style="width: 30px">Date Updated</th>
                            <td>{{$data->updated_at}}</td>
                        </tr>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

@endsection



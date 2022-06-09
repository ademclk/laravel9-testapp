@extends('layouts.adminbase')

@section('title', 'Category list')

@section('content')
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <a href="{{route('admin_category_create')}}" class="btn btn-info">Add category</a>
            </div>
            <p>

            </p>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Category List</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" >
                            <thead>
                            <tr>
                                <th style="width: 10px">Id</th>
                                <th>Parent Id</th>
                                <th>Title</th>
                                <th>Keywords</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th style="width: 10px">Edit</th>
                                <th style="width: 10px">Delete</th>
                                <th style="width: 10px">Show</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $rs)
                            <tr>
                                <td>{{$rs -> id}}</td>
                                <td>{{$rs -> parent_id}}</td>
                                <td>{{$rs -> title}}</td>
                                <td>{{$rs -> keywords}}</td>
                                <td>{{$rs -> description}}</td>
                                <td>{{$rs -> image}}</td>
                                <td>{{$rs -> status}}</td>
                                <td><a href="{{route('admin_category_edit', ['id' => $rs -> id])}}" class="btn btn-primary " >Edit</a> </td>
                                <td><a href="{{route('admin_category_destroy', ['id' => $rs -> id])}}" class="btn btn-info "
                                    onclick="return confirm('You\'re about the delete the item. Sure? ')">Delete</a> </td>
                                <td><a href="{{route('admin_category_show', ['id' => $rs -> id])}}" class="btn btn-danger " >Show</a> </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            </div>
        <!-- End of Main Content -->

@endsection


@extends('layouts.adminbase')

@section('title', 'Category list')

@section('content')
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-4 text-gray-800">Category List</h1>

            </div>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
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
                                <td><a href="/admin/category/edit/{{$rs -> id}}" class="btn btn-primary btn-icon-split" >Edit</a> </td>
                                <td><a href="/admin/category/delete/{{$rs -> id}}" class="btn btn-info btn-icon-split" >Delete</a> </td>
                                <td><a href="/admin/category/show/{{$rs -> id}}" class="btn btn-danger btn-icon-split" >Show</a> </td>
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


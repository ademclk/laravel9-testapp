@extends('layouts.adminwindow')

@section('title', 'Product Image Gallery ')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
<h3>{{$product->title}}</h3>
        <hr>
            <!-- Card Content - Collapse -->
            <div class="collapse show" id="collapseCardExample">
                <div class="card-body">
                    <form action="{{route('admin_image_store', ['pid' => $product -> id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Title">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <input class="input-group-text" type="submit" value="Upload">
                            </div>
                        </div>


                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" >
                                        <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th style="width: 100px" >Image</th>
                                            <th style="width: 10px">Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($images as $rs)
                                            <tr>
                                                <td style="width: 200px">{{$rs -> title}}</td>
                                                <td>
                                                    @if($rs->image)
                                                        <img src="{{Storage::url($rs->image)}}" style="height: 100px">
                                                    @endif
                                                </td>
                                                <td><a href="{{route('admin_image_destroy', ['pid' => $product->id, 'id'=>$rs->id])}}" class="btn btn-danger "
                                                       onclick="return confirm('You\'re about the delete the item. Sure? ')">Delete</a> </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
            </div>

@endsection

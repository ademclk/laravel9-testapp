@extends('layouts.adminbase')

@section('title', 'Edit Category'.$data->title)

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Edit Product: {{$data -> title}}</h1>

        <!-- Collapsable Card-->
        <div class="card shadow mb-4">
            <!-- Card Header - Accordion -->
            <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
               role="button" aria-expanded="true" aria-controls="collapseCardExample">
                <h6 class="m-0 font-weight-bold text-primary">Product Elements</h6>
            </a>
            <!-- Card Content - Collapse -->
            <div class="collapse show" id="collapseCardExample">
                <div class="card-body">
                    <form action="{{route('admin_product_update', ['id' => $data ->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="card-body">

                            <div class="form-group">
                                <label >Parent Category</label>
                                <select class="form-control select2" name="parent_id" >
                                    @foreach ($datalist as $rs)
                                        <option value="{{ $rs->id }}" @if($rs-> id == $data ->parent_id) selected ="selected" @endif>
                                            {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" class="form-control" name="title" value="{{$data->title}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Keywords</label>
                                <input type="text" class="form-control" name="keywords" value="{{$data->keywords}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Description</label>
                                <input type="text" class="form-control" name="description" value="{{$data->description}}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="image">
                                        <label class="custom-file-label" for="InputFile">Choose image file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="custom-select" name="status">
                                    <option selected>{{$data->status}}</option>
                                    <option>Enable</option>
                                    <option>Disable</option>
                                </select>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

@endsection

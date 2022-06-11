<?php $__env->startSection('title', 'Edit Product'.$data->title); ?>

<?php $__env->startSection('content'); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Edit Category: <?php echo e($data -> title); ?></h1>

        <!-- Collapsable Card-->
        <div class="card shadow mb-4">
            <!-- Card Header - Accordion -->
            <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
               role="button" aria-expanded="true" aria-controls="collapseCardExample">
                <h6 class="m-0 font-weight-bold text-primary">Category Elements</h6>
            </a>
            <!-- Card Content - Collapse -->
            <div class="collapse show" id="collapseCardExample">
                <div class="card-body">
                    <form action="<?php echo e(route('admin_product_update', ['id' => $data ->id])); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>

                        <div class="card-body">

                            <div class="form-group">
                                <label >Parent Category</label>
                                <select class="form-control select2" name="category_id" >
                                    <?php $__currentLoopData = $datalist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($rs->id); ?>" <?php if($rs-> id == $data ->category_id): ?> selected ="selected" <?php endif; ?>>
                                            <?php echo e(\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title)); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" class="form-control" name="title" value="<?php echo e($data->title); ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Keywords</label>
                                <input type="text" class="form-control" name="keywords" value="<?php echo e($data->keywords); ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Description</label>
                                <input type="text" class="form-control" name="description" value="<?php echo e($data->description); ?>">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Price</label>
                                <input type="number" class="form-control" name="price" value="<?php echo e($data->price); ?>">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Months</label>
                                <input type="number" class="form-control" name="months" value="<?php echo e($data->months); ?>">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Detail</label>
                                <textarea class="form-control" name="detail">
                                            <?php echo e($data->detail); ?>

                                </textarea>
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
                                    <option selected><?php echo e($data->status); ?></option>
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminbase', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ademclk/PhpstormProjects/testapp/resources/views/admin/product/edit.blade.php ENDPATH**/ ?>
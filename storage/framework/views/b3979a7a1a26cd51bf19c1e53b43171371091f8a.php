<?php $__env->startSection('title', 'Product Image Gallery '); ?>

<?php $__env->startSection('content'); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">
<h3><?php echo e($product->title); ?></h3>
        <hr>
            <!-- Card Content - Collapse -->
            <div class="collapse show" id="collapseCardExample">
                <div class="card-body">
                    <form action="<?php echo e(route('admin_image_store', ['pid' => $product -> id])); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
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
                                        <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td style="width: 200px"><?php echo e($rs -> title); ?></td>
                                                <td>
                                                    <?php if($rs->image): ?>
                                                        <img src="<?php echo e(Storage::url($rs->image)); ?>" style="height: 100px">
                                                    <?php endif; ?>
                                                </td>
                                                <td><a href="<?php echo e(route('admin_image_destroy', ['pid' => $product->id, 'id'=>$rs->id])); ?>" class="btn btn-danger "
                                                       onclick="return confirm('You\'re about the delete the item. Sure? ')">Delete</a> </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
            </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminwindow', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ademclk/PhpstormProjects/testapp/resources/views/admin/image/index.blade.php ENDPATH**/ ?>
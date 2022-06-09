<?php $__env->startSection('title', 'Category list'); ?>

<?php $__env->startSection('content'); ?>
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <a href="<?php echo e(route('admin_category_create')); ?>" class="btn btn-info">Add category</a>
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
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($rs -> id); ?></td>
                                <td><?php echo e($rs -> parent_id); ?></td>
                                <td><?php echo e($rs -> title); ?></td>
                                <td><?php echo e($rs -> keywords); ?></td>
                                <td><?php echo e($rs -> description); ?></td>
                                <td>
                                    <?php if($rs->image): ?>
                                    <img src="<?php echo e(Storage::url($rs->image)); ?>" style="height: 50px">
                                    <?php endif; ?>
                                </td>
                                <td><?php echo e($rs -> status); ?></td>
                                <td><a href="<?php echo e(route('admin_category_edit', ['id' => $rs -> id])); ?>" class="btn btn-primary " >Edit</a> </td>
                                <td><a href="<?php echo e(route('admin_category_destroy', ['id' => $rs -> id])); ?>" class="btn btn-info "
                                    onclick="return confirm('You\'re about the delete the item. Sure? ')">Delete</a> </td>
                                <td><a href="<?php echo e(route('admin_category_show', ['id' => $rs -> id])); ?>" class="btn btn-danger " >Show</a> </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            </div>
        <!-- End of Main Content -->

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.adminbase', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ademclk/PhpstormProjects/testapp/resources/views/admin/category/index.blade.php ENDPATH**/ ?>
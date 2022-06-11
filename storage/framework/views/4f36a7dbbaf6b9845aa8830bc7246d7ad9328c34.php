<?php $__env->startSection('title', 'Show Product'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <a href="<?php echo e(route('admin_product_edit', ['id' => $data ->id])); ?>" class="btn btn-info">Edit product</a>

        <a href="<?php echo e(route('admin_product_destroy', ['id' => $data ->id])); ?>" class="btn btn-danger"
           onclick="return confirm('You\'re about the delete the item. Sure? ')" >Delete product</a>

        <p>
        </p>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Show Product <?php echo e($data->title); ?></h6>
            </div>
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table table-striped">
                        <tr>
                            <th style="width: 30px">Id</th>
                            <td><?php echo e($data->id); ?></td>
                        </tr>
                        <tr>
                            <th style="width: 30px">Category</th>
                            <td><?php echo e(\App\Http\Controllers\Admin\CategoryController::getParentsTree($data->category, $data->category->title)); ?></td>
                        </tr>
                        <tr>
                            <th style="width: 30px">Title</th>
                            <td><?php echo e($data->title); ?></td>
                        </tr>
                        <tr>
                            <th style="width: 30px">Keywords</th>
                            <td><?php echo e($data->keywords); ?></td>
                        </tr>
                        <tr>
                            <th style="width: 30px">Image</th>
                            <td> <?php if($data->image): ?>
                                    <img src="<?php echo e(Storage::url($data->image)); ?>" style="height: 150px">
                                <?php endif; ?></td>
                        </tr>
                        <tr>
                        <tr>
                            <th style="width: 30px">Price</th>
                            <td><?php echo e($data->price); ?></td>
                        </tr>
                        <tr>
                        <tr>
                            <th style="width: 30px">Months</th>
                            <td><?php echo e($data->months); ?></td>
                        </tr>
                        <tr>
                        <tr>
                            <th style="width: 30px">Detail</th>
                            <td><?php echo e($data->detail); ?></td>
                        </tr>
                        <tr>
                            <th style="width: 30px">Status</th>
                            <td><?php echo e($data->status); ?></td>
                        </tr>
                        <tr>
                            <th style="width: 30px">Date Created</th>
                            <td><?php echo e($data->created_at); ?></td>
                        </tr>
                        <tr>
                            <th style="width: 30px">Date Updated</th>
                            <td><?php echo e($data->updated_at); ?></td>
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

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.adminbase', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ademclk/PhpstormProjects/testapp/resources/views/admin/product/show.blade.php ENDPATH**/ ?>
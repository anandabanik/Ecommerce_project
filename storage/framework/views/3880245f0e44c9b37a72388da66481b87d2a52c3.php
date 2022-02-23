

<?php $__env->startSection('title'); ?>
    Manage Sub Category
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">All sub-category info goes here</div>
                </div>
                <div class="ibox-body">
                    <?php if($message = Session::get('message')): ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong><?php echo e($message); ?>!</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>
                    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>SL No</th>
                            <th>Sub Category Name</th>
                            <th>Category Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $subCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($subCategory->name); ?></td>
                                <td><?php echo e($subCategory->category->name); ?></td>
                                <td><?php echo e($subCategory->description); ?></td>
                                <td><img src="<?php echo e(asset($subCategory->image)); ?>" alt="" height="70" width="100"></td>
                                <td><?php echo e($subCategory->status == 1 ? 'Published' : 'Unpublished'); ?></td>
                                <td>
                                    <a href="<?php echo e(route('subcategory.edit', ['id' => $subCategory->id])); ?>" class="btn btn-success btn-xs">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="" class="btn btn-danger btn-xs" onclick="event.preventDefault(); document.getElementById('subcategoryDeleteForm<?php echo e($subCategory->id); ?>').submit();">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                    <form action="<?php echo e(route('subcategory.delete', ['id' => $subCategory->id])); ?>" method="POST" id="subcategoryDeleteForm<?php echo e($subCategory->id); ?>">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\ecom\resources\views/admin/sub-category/manage.blade.php ENDPATH**/ ?>
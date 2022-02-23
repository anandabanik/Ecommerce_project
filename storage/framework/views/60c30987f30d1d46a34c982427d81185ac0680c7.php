

<?php $__env->startSection('title'); ?>
    Manage Category
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">All category info goes here</div>
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
                            <th>Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($category->name); ?></td>
                            <td><?php echo e($category->description); ?></td>
                            <td><img src="<?php echo e(asset($category->image)); ?>" alt="" height="70" width="100"></td>
                            <td><?php echo e($category->status == 1 ? 'Published' : 'Unpublished'); ?></td>
                            <td>
                                <a href="<?php echo e(route('category.edit', ['id' => $category->id])); ?>" class="btn btn-success btn-xs">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="" class="btn btn-danger btn-xs" onclick="event.preventDefault(); document.getElementById('categoryDeleteForm<?php echo e($category->id); ?>').submit();">
                                    <i class="fa fa-trash"></i>
                                </a>
                                <form action="<?php echo e(route('category.delete', ['id' => $category->id])); ?>" method="POST" id="categoryDeleteForm<?php echo e($category->id); ?>">
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
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\ecom\resources\views/admin/category/manage.blade.php ENDPATH**/ ?>


<?php $__env->startSection('title'); ?>
    Add New Unit
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Add Unit Form</div>
                    <div class="ibox-tools">
                        <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                    </div>
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
                    <form class="form-horizontal" action="<?php echo e(route('unit.new')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Unit Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="name" placeholder="Unit Name"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Unit Description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="description" placeholder="Unit Description"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Publication Status</label>
                            <div class="col-sm-10">
                                <label><input type="radio" name="status" checked value="1"/> Published</label>
                                <label><input type="radio" name="status" value="0"/> UnPublished</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10 ml-sm-auto">
                                <button class="btn btn-info btn-block" type="submit">Create New Unit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\ecom\resources\views/admin/unit/add.blade.php ENDPATH**/ ?>
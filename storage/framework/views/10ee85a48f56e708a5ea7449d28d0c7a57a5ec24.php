

<?php $__env->startSection('title'); ?>
    Add New Product
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Add Product Form</div>
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
                    <form class="form-horizontal" action="<?php echo e(route('product.new')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Category Name</label>
                            <div class="col-sm-10">
                                <select class="form-control" required name="category_id" id="categoryId">
                                    <option value="" disabled selected> -- Select Category Name -- </option>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Sub Category Name</label>
                            <div class="col-sm-10">
                                <select class="form-control" required name="sub_category_id" id="subCategoryId">
                                    <option value="" disabled selected> -- Select Sub Category Name -- </option>
                                    <?php $__currentLoopData = $subCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($subCategory->id); ?>"><?php echo e($subCategory->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Brand Name</label>
                            <div class="col-sm-10">
                                <select class="form-control" required name="brand_id">
                                    <option value="" disabled selected> -- Select Brand Name -- </option>
                                    <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($brand->id); ?>"><?php echo e($brand->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Unit Name</label>
                            <div class="col-sm-10">
                                <select class="form-control" required name="unit_id">
                                    <option value="" disabled selected> -- Select Unit Name -- </option>
                                    <?php $__currentLoopData = $units; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($unit->id); ?>"><?php echo e($unit->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Product Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="name" placeholder="Category Name"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Product Code</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="code" placeholder="Product Code"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Regular Price</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" name="regular_price" placeholder="Regular Price"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Selling Price</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" name="selling_price" placeholder="Selling Price"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Short Description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="short_description" placeholder="Short Description"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Long Description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="summernote" name="long_description" placeholder="Short Description"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Product Image</label>
                            <div class="col-sm-10">
                                <input class="form-control-file" type="file" name="image" accept="image/*"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Product Sub Image</label>
                            <div class="col-sm-10">
                                <input class="form-control-file" type="file" name="sub_image[]" multiple accept="image/*"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Publication Status</label>
                            <div class="col-sm-10">
                                <label><input type="radio" name="status" value="1"/> Published</label>
                                <label><input type="radio" name="status" value="0"/> UnPublished</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10 ml-sm-auto">
                                <button class="btn btn-info btn-block" type="submit">Create New Product</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ecomfinal616\ecom\resources\views/admin/product/add.blade.php ENDPATH**/ ?>
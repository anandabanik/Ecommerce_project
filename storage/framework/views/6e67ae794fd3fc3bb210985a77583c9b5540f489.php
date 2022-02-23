

<?php $__env->startSection('title'); ?>
    Checkout
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <main class="main">
        <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
            <div class="container">
                <h1 class="page-title">Checkout<span>Shop</span></h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Shop</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="page-content">
            <div class="checkout">
                <div class="container">
                    <form action="<?php echo e(route('order.new')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-lg-9">
                                <h2 class="checkout-title text-center">Please fillup the form carefully</h2>
                                <hr/>
                                <label>Full Name <span class="text-danger">*</span></label>
                                <input type="text" name="name" required class="form-control"/>

                                <label>Email Address </label>
                                <input type="email" name="email" required class="form-control"/>

                                <label>Mobile Number <span class="text-danger">*</span></label>
                                <input type="text" name="mobile" required class="form-control"/>

                                <label>Delivery Address <span class="text-danger">*</span></label>
                                <textarea class="form-control" name="delivery_address" required cols="30" rows="4" placeholder="Please give order delivery address"></textarea>

                            </div><!-- End .col-lg-9 -->
                            <aside class="col-lg-3">
                                <div class="summary">
                                    <h3 class="summary-title">Your Order</h3>

                                    <table class="table table-summary">
                                        <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Total</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <?php ($sum=0); ?>
                                        <?php $__currentLoopData = $cart_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><a href="#"><?php echo e($cart_product->name); ?></a></td>
                                            <td><?php echo e($cart_product->price*$cart_product->qty); ?></td>
                                            <?php ($sum = $sum + ($cart_product->price*$cart_product->qty)); ?>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <tr class="summary-subtotal">
                                            <td>Subtotal:</td>
                                            <td><?php echo e(number_format($sum)); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Shipping:</td>
                                            <td>Free shipping</td>
                                        </tr>
                                        <tr>
                                            <td>Tax:</td>
                                            <td><?php echo e($tax = ($sum * 15)/100); ?></td>
                                        </tr>
                                        <tr class="summary-total">
                                            <td>Total:</td>
                                            <td><?php echo e($tax+$sum); ?></td>
                                            <?php Session::put('tax', $tax);?>
                                            <?php Session::put('total', ($tax+$sum));?>
                                        </tr>
                                        </tbody>
                                    </table><!-- End .table table-summary -->

                                    <button type="submit" class="btn btn-outline-primary-2 btn-order btn-block">
                                        <span class="btn-text">Place Order</span>
                                        <span class="btn-hover-text">Proceed to Checkout</span>
                                    </button>
                                </div><!-- End .summary -->
                            </aside><!-- End .col-lg-3 -->
                        </div><!-- End .row -->
                    </form>
                </div><!-- End .container -->
            </div><!-- End .checkout -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ecomfinal616\ecom\resources\views/front/checkout/checkout.blade.php ENDPATH**/ ?>
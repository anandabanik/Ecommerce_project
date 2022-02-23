

<?php $__env->startSection('title'); ?>
    Checkout
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <main class="main">
        <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
            <div class="container">
                <h1 class="page-title">Complete<span>Order</span></h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Customer</a></li>
                    <li class="breadcrumb-item"><a href="#">Order</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Complete Order</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="page-content">
            <div class="checkout">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="checkout-title text-center">
                                Wellcome <?php echo e(Session::get('name')); ?> ,
                                <?php echo e(Session::get('message')); ?>

                            </h2>
                        </div><!-- End .col-lg-9 -->
                    </div>
                </div><!-- End .container -->
            </div><!-- End .checkout -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\ecom\resources\views/customer/order/complete-order.blade.php ENDPATH**/ ?>
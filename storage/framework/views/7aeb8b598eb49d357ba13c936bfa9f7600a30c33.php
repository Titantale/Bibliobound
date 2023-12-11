

<?php $__env->startSection('content'); ?>
    <?php if(session('status')): ?>
        <div><?php echo e(session('status')); ?></div>
    <?php endif; ?>
    
    <head>
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
        .card {
            margin: 20px auto;
            width: 50%;
        }
        .card-header {
            text-align: center;
            font-size: 2em;
            font-weight: bold;
        }
        .card-body {
            text-align: center;
            font-size: 1.5em;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card" style="background-color: #f5f5f5; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
            <div class="card-header">
                Welcome!
            </div>
            <div class="card-body">
                <p>You have successfully logged in!</p>
                <p>Here, you can upload your own food.</p>
                <p>Use the sidebar to navigate your way around.</p>
            </div>
        </div>
    </div>
</body>

<div class="d-flex justify-content-center">
    <form method="POST" action="<?php echo e(route('logout')); ?>">
        <?php echo csrf_field(); ?>

        <button class="btn btn-danger" type="submit">
            <?php echo e(__('Logout')); ?>

        </button>
    </form>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.private', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sharekitpaV9\resources\views/dashboard.blade.php ENDPATH**/ ?>
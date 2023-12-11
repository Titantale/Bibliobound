

<?php $__env->startSection('content'); ?>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<h1 style="font-family: Arial; text-shadow: 2px 2px #808080;">Your Foods</h1>
<a class="btn btn-success mb-3" href="<?php echo e(url('/image')); ?>">Add Food</a>

<div class="card-columns">
    <?php $__currentLoopData = $foods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $food): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
    <div class="card" style="background-color: #f5f5f5; border: 1px solid #ccc; box-shadow: 2px 2px 5px #ccc;">
    <!-- <img src="<?php echo e(asset('storage/image/'.$food->image)); ?>" alt="image"> -->
        <div class="card-body text-center">
        <img src="<?php echo e(asset('public/storage/image/'.$food->image)); ?>" width="300" height="300" alt="" class="img-fluid">
        
            <h4 class="card-title"><?php echo e($food->food_name); ?></h4>
            <!-- <p class="card-text"><?php echo e($food->food_description); ?></p> -->
            <p class="card-text">Category: <?php echo e($food->category?->name); ?></p>
            <p class="card-text">Location: <?php echo e($food->location?->name); ?></p> 
            <p class="card-text">Best Before: <?php echo e($food->best_before); ?></p>
            <!-- <p class="card-text">User email: <?php echo e($food->user_email); ?></p> -->

            <p>
                <a href="<?php echo e(url('edit/'.$food->id)); ?>" class="btn btn-info btn-sm">Edit</a>
                <a href="<?php echo e(route('food-single', $food->id)); ?>" class="btn btn-warning btn-sm">View Details</a>
                <a href="<?php echo e(url('delete/'.$food->id)); ?>" class="btn btn-danger btn-sm">Delete</a>
           </p>
            
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   
 
</div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.private', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sharekitpaV9\resources\views/member/yourfood.blade.php ENDPATH**/ ?>
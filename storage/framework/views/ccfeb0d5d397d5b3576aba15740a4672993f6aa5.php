

<?php $__env->startSection('content'); ?>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<div >
    <h1 style="font-family: Arial; text-shadow: 2px 2px #808080;">Available Foods</h1>
</div>


<div class="col-md-6">
    <form action="<?php echo e(url('/member/feedPrivate')); ?>" method="GET">
    <!-- <?php echo e(url('/member/feedPrivate')); ?> -->
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <select name="location" class="form-select">
                        <option value="">All Location</option>
                            <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value=<?php echo e($location->id); ?>><?php echo e($location->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-dark py2">Filter</button>
            </div>
        </div>
    </form>
</div>

<br></br>
<style>
        .centered-image {
            display: block;
            margin: auto;
            padding-top: 10px;
        
        }
        
        .food-box-Dry{
            background-color: green;
        }
    </style>

<!-- <a class="btn btn-dark mb-3" href="<?php echo e(url('/image')); ?>">Add Food</a> -->
<div class="row">
    <?php $__currentLoopData = $foods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $food): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
    <div class="col-md-4 <?php echo e('food-box-'.$food->category); ?>">
    <div class="card">
    <img src="<?php echo e(asset('public/storage/image/'.$food->image)); ?>" width="300" height="300" alt="" class="img-fluid centered-image">
        <div class="card-body">
        <!-- <h4><img src="<?php echo e(asset('public/storage/image/'.$food->image)); ?>" width="300" height="300"></h4> -->
        
            <h4 class="card-title my-title"><?php echo e($food->food_name); ?></h4>
            <!-- <p class="card-text"><?php echo e($food->food_description); ?></p> -->
            <p class="card-text">Category: <?php echo e($food->category?->name); ?></p>
            <p class="card-text">Location: <?php echo e($food->location?->name); ?></p> 
            <p class="card-text">Best Before: <?php echo e($food->best_before); ?></p>
            <!-- <p class="card-text">User email: <?php echo e($food->user_email); ?></p> -->

            <p>
                <!-- <a href="<?php echo e(url('edit/'.$food->id)); ?>" class="btn btn-primary btn-sm">Edit</a>
                <a href="<?php echo e(url('delete/'.$food->id)); ?>" class="btn btn-danger btn-sm">Delete</a> -->
                <a href="<?php echo e(route('food-singlePub', $food->id)); ?>" class="btn btn-warning btn-sm">View Details</a>
           </p>
           <br></br>
            
        </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <!-- <?php echo e($foods->links()); ?> -->
   
 
</div>
<?php echo e($foods->links()); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.private', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sharekitpaV9\resources\views/member/feedPrivate.blade.php ENDPATH**/ ?>
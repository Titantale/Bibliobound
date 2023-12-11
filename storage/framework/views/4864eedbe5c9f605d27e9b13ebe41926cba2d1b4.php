
<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    <h4> EDIT Food Form</h4>
                </div>
                <div class="card-body">

                    <form action="<?php echo e(url('update/'.$makanan->id)); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>

                        <div class="mb-3">
                            <label for="">Food Name</label>
                            <input type="text" name="food_name" value="<?php echo e($makanan->food_name); ?>" required class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Category</label>
                            <select name="category_id" value="<?php echo e($makanan->category_id); ?>" required class="form-control">
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="">Location</label>
                            <select name="location_id" value="<?php echo e($makanan->location_id); ?>" required class="form-control">
                                <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($location->id); ?>"><?php echo e($location->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="">Best Before</label>
                            <input type="date" name="best_before" value="<?php echo e($makanan->best_before); ?>" required class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Description</label>
                            <input type="text" name="food_description" value="<?php echo e($makanan->food_description); ?>" required class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="">Upload Image</label>
                            <input type="file" name="image" class="course form-control">
                            <img src="<?php echo e(asset('public/storage/image/'.$makanan->image)); ?>" width="70" height="70">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.private', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sharekitpaV9\resources\views/edit.blade.php ENDPATH**/ ?>
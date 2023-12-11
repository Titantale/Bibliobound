

<?php $__env->startSection('content'); ?>
    <?php if(session('status')): ?>
        <div>
            <?php echo e(session('status')); ?>

        </div>
    <?php endif; ?>

    <?php if($errors->any()): ?>
        <div>
            <div><?php echo e(__('Whoops! Something went wrong.')); ?></div>

            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    
    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
    </div>

    <div class="container">
        <form class="user" method="POST" action="<?php echo e(route('login')); ?>">
            <?php echo csrf_field(); ?>

            <div class="form-group">
                <input type="email" class="form-control form-control-user" name="email" value="<?php echo e(old('email')); ?>" required autofocus placeholder="Email Address" />
            </div>

            <div class="form-group">
                <input type="password" class="form-control form-control-user" name="password" required autocomplete="current-password" placeholder="Password" />
            </div>

            <div class="form-group">
                <div class="custom-control custom-checkbox small">
                    <input type="checkbox" name="remember">
                    <label><?php echo e(__('Remember me')); ?></label>
                </div>
            </div>

            <div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                <?php echo e(__('Login')); ?>

                </button>
            </div>

            <hr>

            <?php if(Route::has('password.request')): ?>
                <div class="text-center">
                    <a class="small" href="<?php echo e(route('password.request')); ?>">
                        <?php echo e(__('Forgot your password?')); ?>

                    </a>
                </div>
            <?php endif; ?>

            <div class="text-center">
                <a class="small" href="/member/register">
                    <?php echo e(__('Create an account!')); ?>

                </a>
            </div>

            
        </form>
    </div>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.bglogin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sharekitpaV9\resources\views/member/login.blade.php ENDPATH**/ ?>
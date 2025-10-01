<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<div class="col-12">
    <h1 class="text-center my-3">Edit User</h1>
</div>
<div class="col-8 mx-auto">
    <form action="<?php echo e(route('users.update', $user->id)); ?>" method="POST" class="form border p-3">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <?php if($errors->any()): ?>
            <div class="alert alert-danger p-1">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <?php if(session()->get('success') != null): ?>
            <h3 class="text-success my-2"><?php echo e(session()->get('success')); ?></h3>
        <?php endif; ?>

        <div class="mb-3">
            <label for="">Name</label>
            <input type="text" value="<?php echo e(old('name', $user->name)); ?>" class="form-control" name="name">
        </div>

        <div class="mb-3">
            <label for="">Email</label>
            <input type="email" value="<?php echo e(old('email', $user->email)); ?>" class="form-control" name="email">
        </div>

        <div class="mb-3">
            <label for="">Password</label>
            <input type="password" class="form-control" name="password">
        </div>

        <div class="mb-3">
            <label for="">Confim-Password</label>
            <input type="password" class="form-control" name="confirm_password">
        </div>

        <div class="mb-3">
            <label for="">Type</label>
            <select name="type" class="form-control">
                <option <?php if(old('type', $user->type) == 'admin'): echo 'selected'; endif; ?> value="admin">Admin</option>
                <option <?php if(old('type', $user->type) == 'writer'): echo 'selected'; endif; ?> value="writer">Writer</option>
            </select>
        </div>

        <div class="mb-3">
            <input type="submit" class="form-control bg-info text-white" value="Save changes">
        </div>
    </form>
</div><?php /**PATH C:\Users\Softlaptop\Desktop\devio\resources\views/users/edit.blade.php ENDPATH**/ ?>
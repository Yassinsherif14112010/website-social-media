<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <div class="col-12">
        <h1 class=" text-center my-3">Add user</h1>
    </div>
    <div class="col-8 mx-auto">
        <form action="<?php echo e(route('users.store')); ?>" method="POST" class="form border p-3">
   <?php echo csrf_field(); ?>
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
                <input type="text"  class="form-control" name="name">
            </div>

            <div class="mb-3">
                <label for="">Email</label>
                <input type="email" class="form-control"   name="email" ></input>
            </div>
            <div class="mb-3">
                <label for="">Password</label>
                <input type="password" class="form-control"   name="password" ></input>
            </div>
            <div class="mb-3">
                <label for="">Confim-Password</label>
                <input type="password" class="form-control"   name="confirm_password" ></input>
            </div>
            <div class="mb-3">
                <label for="">Type</label>
                <select name="type" class="form-control">
                    <option value="admin">Admin</option>
                    <option value="writer">Writer</option>
                </select>
            </div>


            <div class="mb-3">
                <input type="submit" class="form-control bg-success text-white" value="Save">
            </div>

        </form>
<?php /**PATH C:\Users\Softlaptop\Desktop\devio\resources\views/users/create.blade.php ENDPATH**/ ?>
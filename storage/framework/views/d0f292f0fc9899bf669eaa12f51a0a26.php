<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <div class="col-12">
        <h1 class="p-3 border text-center my-3">Add Post</h1>
    </div>
    <div class="col-8 mx-auto">
        <form action="<?php echo e(route('posts.store')); ?>" method="POST" enctype="multipart/form-data" class="form border p-3">
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
                <label for="">Post Title</label>
                <input type="text" value="<?php echo e(old('title')); ?>" class="form-control" name="title">
            </div>

            <div class="mb-3">
                <label for="">Post Description</label>
                <textarea class="form-control" value="<?php echo e(old('description')); ?>"  name="description" rows="7"></textarea>
            </div>

            <div class="mb-3">
                <label for="">Writer</label>
                <select name="user_id" class="form-control">
                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($id); ?>"><?php echo e($name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
           <div class="mb-3">
                <label for="">image post</label>
                <input type="file" class="form-control"   name="image" ></input>
            </div> 
            <div class="mb-3">
                <input type="submit" class="form-control bg-success" value="Save">
            </div>

        </form>
<?php /**PATH C:\Users\Softlaptop\Desktop\devio\resources\views/posts/add.blade.php ENDPATH**/ ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<div class="col-12">
    <h1 class="p-3 border text-center my-3">تعديل المنشور</h1>
</div>
<div class="col-8 mx-auto">

    <form action="<?php echo e(route('posts.update', $post->id)); ?>" method="POST" class="form border p-3">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="mb-3">
            <label for="">عنوان المنشور</label>
            <input type="text" class="form-control" name="title" value="<?php echo e(old('title', $post->title)); ?>">
        </div>

        <div class="mb-3">
            <label for="">وصف المنشور</label>
            <textarea class="form-control" name="description" rows="7"><?php echo e(old('description', $post->description)); ?></textarea>
        </div>

        <div class="mb-3">
            <label for="">الكاتب</label>
            <select name="user_id" class="form-control">
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($id); ?>" <?php echo e($post->user_id == $id ? 'selected' : ''); ?>><?php echo e($name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <div class="mb-3">
            <input type="submit" class="form-control bg-info text-white" value="حفظ التعديلات">
        </div>

    </form>
</div>
<?php /**PATH C:\Users\Softlaptop\Desktop\devio\resources\views/posts/edit.blade.php ENDPATH**/ ?>
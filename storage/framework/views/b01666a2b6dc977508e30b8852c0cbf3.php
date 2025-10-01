<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts by <?php echo e($user->name); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-light">
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<div class="container py-5">
    <div class="row">
        <div class="col-12">

            <div class="d-flex justify-content-between align-items-center mb-4">
                <a href="<?php echo e(route('posts.create', ['user' => $user->id])); ?>" class="btn btn-primary">Add new post</a>
                <h1 class="h3 mb-0">All Posts By: <?php echo e($user->name); ?></h1>
            </div>

            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover align-middle">
                            <thead class="table-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Created At</th>
                                <th scope="col" class="text-center">Edit</th>
                                <th scope="col" class="text-center">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $user->posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($post->title); ?></td>
                                    <td><?php echo e($post->created_at->format('M d, Y')); ?></td>
                                    <td class="text-center">
                                        <a href="<?php echo e(route('posts.edit', $post->id)); ?>" class="btn btn-sm btn-info">
                                            تعديل
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <form action="<?php echo e(route('posts.destroy', $post->id)); ?>" method="POST" style="display:inline-block;">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('هل أنت متأكد من الحذف؟')">
                                                حذف
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="6" class="text-center">This user has not created any posts yet.</td>
                                </tr>
                            <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" xintegrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<?php /**PATH C:\Users\Softlaptop\Desktop\devio\resources\views/users/posts.blade.php ENDPATH**/ ?>
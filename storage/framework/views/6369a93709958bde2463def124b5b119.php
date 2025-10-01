<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body class="bg-light">
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<div class="container py-5">
    <div class="row">
        <div class="col-12">

            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="h3 mb-0">ALL USERS</h1>
                <a href="<?php echo e(route('users.create')); ?>" class="btn btn-primary">Add new user</a>
            </div>

            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover align-middle">
                            <thead class="table-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Type</th>
                                <th scope="col" class="text-center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($user->name); ?></td>
                                    <td><?php echo e($user->email); ?></td>
                                    <td><?php echo $user->type_badge; ?></td>
                                    <td class="text-center">
                                        <a href="<?php echo e(route('user.posts', $user->id)); ?>" class="btn btn-sm btn-success">
                                            عرض المشاركات
                                        </a>
                                        <a href="<?php echo e(route('users.edit', $user->id)); ?>" class="btn btn-sm btn-info mx-1">
                                            تعديل
                                        </a>
                                        <form action="<?php echo e(route('users.destroy', $user->id)); ?>" method="POST" class="d-inline">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('هل أنت متأكد من الحذف؟')">
                                                حذف
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH C:\Users\Softlaptop\Desktop\devio\resources\views/users/index.blade.php ENDPATH**/ ?>
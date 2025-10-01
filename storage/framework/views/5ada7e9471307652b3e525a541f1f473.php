<!doctype html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3flBFAEvoAPk8NF/DVbAHDgO/5A0" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body {
            background-color: #f8f9fa; /* A light grey background makes content pop */
        }
        .post-card {
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
            border: 0; /* Removes the default border for a cleaner, shadow-based look */
        }
        .post-card:hover {
            transform: translateY(-5px); /* Lifts the card on hover */
            box-shadow: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.1) !important; /* Enhances the shadow on hover */
        }
    </style>
</head>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<body class="bg-body-tertiary">
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-9">

            <h1 class="display-5 fw-bold text-center mb-5 pb-3 border-bottom">جميع المنشورات</h1>

            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card post-card mb-4 shadow-sm">

                    <div class="card-body p-4">
                        <h5 class="card-title fw-bold mb-3"><?php echo e($post->title); ?></h5>
                        <p class="card-text text-secondary"><?php echo e(Str::limit($post->description, 50)); ?></p>
                        <a class="btn btn-info" href="<?php echo e(route('posts.show', $post->id)); ?>">عرض المنشور</a>

                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
<?php /**PATH C:\Users\Softlaptop\Desktop\devio\resources\views/home.blade.php ENDPATH**/ ?>
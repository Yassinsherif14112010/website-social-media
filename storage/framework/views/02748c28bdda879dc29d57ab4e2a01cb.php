<!doctype html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"

          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>All Posts</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="<?php echo e(route('posts.index')); ?>">Dev.io</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('home')); ?>">الرئيسية</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('posts.index')); ?>">المنشورات</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('users.index')); ?>">الطلاب</a>
                </li>
            </ul>
            <form class="d-flex" action="<?php echo e(route('home')); ?>" method="GET">
                <input class="form-control me-2" type="search" name="search" placeholder="ابحث عن منشور..." value="<?php echo e(request('search')); ?>" aria-label="Search">
                <button class="btn btn-outline-secondary" type="submit">بحث</button>
            </form>
        </div>
    </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
<?php /**PATH C:\Users\Softlaptop\Desktop\devio\resources\views/layouts/app.blade.php ENDPATH**/ ?>
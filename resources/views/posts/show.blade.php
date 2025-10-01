<!doctype html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>المنشور </title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3flBFAEvoAPk8NF/DVbAHDgO/5A0" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        .post-content {
            font-size: 1.1rem;
            line-height: 1.8;
        }
        .post-meta span {
            margin-inline-end: 1rem;
        }
    </style>
</head>
<body class="bg-light">

@include('layouts.app')

<main class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">

            <div class="card shadow-sm border-0">
                <div class="card-body p-4 p-md-5">

                    <article>
                        <header class="mb-4">
                            <h1 class="fw-bold display-5 mb-3">{{ $post->title }}</h1>

                        </header>


                        <section class="post-content">
                            <p>
                                {{ $post->description }}
                            </p>

                        </section>

                        <hr class="my-4">

                        <footer class="d-flex justify-content-end">
                            <a href="{{ route('home') }}" class="btn btn-outline-secondary">
                                <i class="bi bi-arrow-right"></i> العودة إلى كل المنشورات
                            </a>
                        </footer>
                    </article>
                </div>
            </div>

        </div>
    </div>
</main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>

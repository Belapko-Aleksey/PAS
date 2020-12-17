<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Cover Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/cover/">

    <!-- Bootstrap core CSS -->
    <link href="/css/assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="/css/cover.css" rel="stylesheet">
</head>
<body class="text-center">
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="masthead mb-auto">
        <div class="inner">
            <h3 id="brand" class="masthead-brand">
                <a href="/" style=" text-decoration: none">PAS</a>
            </h3>
            <nav class="nav nav-masthead justify-content-center">
                <a id="home" class="nav-link" href="/">Home</a>
                <a id="payment" class="nav-link" href="/payment/create/12">Test Pay</a>
                <a id="contact" class="nav-link" href="/contact">Contact</a>
            </nav>
        </div>
    </header>

    <?=$body?>

    <footer class="mastfoot mt-auto">
        <div class="inner">
            <p><a href="/">PAS</a>, 2020</p>
        </div>
    </footer>

    <script src="/js/nav.js"></script>
</div>
</body>
</html>
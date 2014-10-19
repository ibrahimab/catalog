<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Catalog</title>

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="/components/bootstrap/dist/css/bootstrap.min.css">

    <!-- HTML5 Shim and Respond.js for IE8 -->
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <!-- Master css file -->
    <link rel="stylesheet" href="/css/master.css">
</head>
<body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">Catalog</a>
            </div>
        </div>
    </div>

    <div class="jumbotron">
        <div class="container">
            <h1>Catalog</h1>
            <p>This is a sample project to learn some Laravel! Click on a category to look at some products or simply click down here to see all products!</p>
            <p>
                @unless (Route::currentRouteName() === 'root')
                    <a href="{{ route('root') }}" class="btn btn-primary btn-lg">Home</a>
                @endunless
                <a href="{{ route('products') }}" class="btn btn-primary btn-lg">See all products</a>
            </p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @yield('content')
            </div>
        </div>
    </div>

<!-- jQuery + Bootstrap.js -->
<script src="/components/jquery/dist/jquery.min.js"></script>
<script src="/components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Holder.js -->
<script src="/components/holderjs/holder.js"></script>
<script src="/js/holderjs/custom.themes.js"></script>

<!-- Isotope -->
<script src="/components/isotope/dist/isotope.pkgd.js"></script>
<script src="/js/isotope/isotope.js"></script>
</body>
</html>
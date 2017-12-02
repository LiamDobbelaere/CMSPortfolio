<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="/css/materialize.css" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="/css/app.css" media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/></head>
<body>

<nav>
    <div class="nav-wrapper">
        <a href="/" class="brand-logo brand-logo-custom">Tom Dobbelaere</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            @include('partials.navigation')
        </ul>
        <ul class="side-nav" id="mobile-demo">
            @include('partials.navigation')
        </ul>
    </div>
</nav>

<main class="container">
    @yield('content')
</main>

<footer class="page-footer">
    <div class="container">
        <div class="row">
            <div class="col s6">
                <h5>Contact</h5>
                <p class="valign-wrapper"><i class="material-icons margin-right">email</i>
                    <a class="white-text" href="mailto:tom.dobbelaere@outlook.com">tom.dobbelaere@outlook.com</a></p>
                <p class="valign-wrapper"><i class="material-icons margin-right">phone</i>+32 471 43 76 55</p>
            </div>
            <div class="col s6">
                <h5>Downloads</h5>
                <p class="valign-wrapper"><i class="material-icons margin-right">file_download</i>
                    <a target="_blank" href="/files/cv.pdf" class="white-text">Download CV (PDF)</a>
                </p>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            Site made by Tom Dobbelaere using
            <a class="white-text" href="http://materializecss.com">Materialize</a>
            and <a class="white-text" href="https://laravel.com/    ">Laravel</a>
        </div>
    </div>
</footer>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="/js/materialize.min.js"></script>
<script type="text/javascript" src="/js/app.js"></script>

</body>
</html>
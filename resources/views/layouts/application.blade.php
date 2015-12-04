<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title or 'Extensionist' }}</title>

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,600|Open+Sans+Condensed:300" type="text/css">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">

    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>

<div class="nav-container">
    @include('shared._navbar')
</div>

<section class="search-container">
    <div class="container">
        <div class="col-md-9 col-sm-8">
            <form id="search-form" class="form form-horizontal">
                <div class="form-group">
                    <input type="search" name="search[query]" id="search_query" required autocomplete="off"
                           placeholder="Search Extensions..." class="form-control">
                    <p class="help-block">Extensionist Is a Central Location to Find PHP's Extensions</p>
                </div>
            </form>
        </div>
    </div>
</section>

<section class="content-container">
    <div class="container">
        @yield("content")
    </div>
</section>


<footer class="footer-container">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <a href="{{ url('about') }}">About Extensionist</a>
                <a href="{{ url('rss') }}">Atom/RSS Feeds</a>
            </div>
            <div class="col-md-2">
                <a href="{{ url('stats') }}">Statistics</a>
                <a href="{{ url('browse') }}">Browse Extensions</a>
            </div>
        </div>
    </div>
</footer>


</body>
</html>
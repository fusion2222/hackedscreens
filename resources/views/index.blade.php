<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME')}}</title>
    <meta name="description" content="List of scripts make websites to look like they have been hacked!"/>
    <!-- TODO: Make SEO friendly setup -->
    <link href="./css/app.css" rel="stylesheet" type="text/css">
</head>
<body>

    <div class="container hero">
        <h1 class="hero--logo">Hacked <span class="hero--logo--blackpart">Screens @svg(skull)</span></h1>
        <p class="hero--paragraph">
            Have you found cross-site scripting vulnerability on some website? Cool. Want make it to look more visually horrifying before showing to client? Just include one of these JS scripts into vulnerable website. Only visual changes will be made. Scripts are safe to use.
        </p>
    </div>

    <ul class="container script-list">
        @include('partials.scriptlistitem')
    </ul>
    <footer class="container-fluid footer">
        <a href="https://github.com/fusion2222/hackedscreens" title="Visit us on GitHub" target="_blank" rel="noopener">
            @svg(github) Visit us on GitHub
        </a>
        <span class="footer--separator">|</span>
        Icons made by <a href="https://www.flaticon.com/authors/pixel-perfect" title="Pixel perfect">Pixel perfect</a>
        from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a>
    </footer>
    <script src="./js/app.min.js" type="text/javascript"></script>
</body>
</html> 

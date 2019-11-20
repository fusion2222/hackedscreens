<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME')}}</title>
    <meta name="description" content="HackedScreens example site"/>
    <!-- TODO: Make SEO friendly setup -->
    <link href="/css/example.css" rel="stylesheet" type="text/css">
</head>
<body>
    <nav class="navbar js-navbar">
        <span class="navbar--logo">Example site logo</span>
        <ul class="navbar--content">
            <li class="navbar--item"><a href="#" class="navbar--link">Page 1</a></li>
            <li class="navbar--item"><a href="#" class="navbar--link">Page 2</a></li>
            <li class="navbar--item"><a href="#" class="navbar--link">Page 3</a></li>
            <li class="navbar--item"><a href="#" class="navbar--link">Page 4</a></li>
        </ul>
        <button class="navbar--opener js-navbar--opener">&equiv;</button>
    </nav>

    <div class="container">
        <h1>Example site</h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Auctor elit sed vulputate mi sit amet mauris. Vel pretium lectus quam id leo in vitae. Ultrices sagittis orci a scelerisque purus semper eget duis at. Eget est lorem ipsum dolor.
        </p>
    </div>

    <div class="container-fluid action-banner">
        <div class="container">
            <p>Auctor elit sed vulputate mi sit amet mauris. Vel pretium lectus quam id leo in vitae. Ultrices sagittis orci a scelerisque purus semper eget duis at. Eget est lorem ipsum dolor.</p>
            <button class="btn btn-black btn-big action-banner--button">Click here!</button>
        </div>
    </div>

    <div class="container clearfix">
        <h2>Article collection</h2>
        <ul class="article-list clearfix">
            @include('partials.examplearticle')
            @include('partials.examplearticle')
            @include('partials.examplearticle')
            @include('partials.examplearticle')
            @include('partials.examplearticle')
            @include('partials.examplearticle')
        </ul>
    </div>

    <footer class="container-fluid footer">
        An example site
    </footer>

    <script type="text/javascript">
        var Navbar = {
            CLASS_NAVBAR: 'js-navbar',
            CLASS_OPENER: 'js-navbar--opener',

            init: function(){
                var navbarButton = document.getElementsByClassName(this.CLASS_OPENER)[0];
                navbarButton.onclick = function(){
                    var navbar = document.getElementsByClassName(Navbar.CLASS_NAVBAR)[0];
                    var openClass = ' open';
                    if(navbar.className.indexOf(openClass) === -1){
                        navbar.className += openClass;
                    }else{
                        navbar.className = navbar.className.replace(openClass, '');
                    }
                }
            }
        };
        Navbar.init();
    </script>
    @if($script->exists)
        <ul class="global-navigation">
            <li class="global-navigation--item">
                <a href="{{ route('landingPage') }}" class="global-navigation--link">
                    &laquo; Back to Home page
                </a>
            </li>
        </ul>
        <script src="{{ $script->direct_link() }}{{ $script_params }}" type="text/javascript"></script>
    @endif
</body>
</html> 

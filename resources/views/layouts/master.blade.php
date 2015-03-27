<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{(isset($title))? $title : 'Olson-Hegge Wedding'}}</title>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans|Adamina' rel='stylesheet' type='text/css'>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="icon" href="favicon.ico">
    </head>
    <body id="{{(isset($page)) ? $page : ''}}-page">
    <nav class="navbar navbar-centered">
        <div class="container">
            <div class="navbar-header">
                <a class="mobile-brand" href="{{route('home')}}"><img src="{{asset('img/header-img.png')}}" alt="The Wedding of Brianna and Chris"></a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class=" text-link {{(isset($page) && $page == 'journey') ? 'active' : ''}}"><a href="{{route('journey')}}">Our<br/>Journey</a> <p id="embassy">EMBASSY SUITES</p></li>
                    <li class=" text-link {{(isset($page) && $page == 'wedding') ? 'active' : ''}}"><a href="{{route('wedding')}}">The<br/>Wedding</a></li>
                    <li id="header-img-li" class="{{(isset($page) && $page == 'home') ? 'active' : ''}}"><a href="{{route('home')}}"><img src="{{asset('img/header-img.png')}}" alt="The Wedding of Brianna and Chris"></a></li>
                    <li class=" text-link {{(isset($page) && $page == 'events') ? 'active' : ''}}"><a href="{{route('events')}}">Events</a><p id="bloomington">BLOOMINGTON</p></li>
                    <li class=" text-link {{(isset($page) && $page == 'guestbook') ? 'active' : ''}}"><a href="{{route('guestbook')}}">Guestbook</a></li>
                    <li class=" text-link mobile-only"><a href="{{route('gallery')}}">Gallery</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
    <div class="container">
        @yield('page')
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/slider.min.js')}}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    @yield('scripts')
    <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-57469829-3', 'auto');
	  ga('send', 'pageview');

	</script>
    </body>
</html>

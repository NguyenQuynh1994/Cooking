<!DOCTYPE HTML>
<html ng-app="cookApp">
<head>
    <title>{{ trans('layout.title') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,400italic,300italic,600italic,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/layout.css') }}" rel="stylesheet" type="text/css" media="all" />
    {{-- <base href="{!! url('/') !!}"/> --}}
    <base href="/">
</head>

<body>
    <!-- header -->
    <div class="header">
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="logo">
                        <a class="navbar-brand" href="#">{{ trans('layout.title') }}</a>
                    </div>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                    <nav class="cl-effect-13" id="cl-effect-13">
                        <ul class="nav navbar-nav">
                            <li><a href="/" class="active">{{ trans('layout.home') }}</a></li>
                            <li><a href="#">{{ trans('layout.blog') }}</a></li>
                            <li><a href="#">{{ trans('layout.createPost') }}</a></li>
                            <li><a href="#">{{ trans('layout.mailUs') }}</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <navigation></navigation>
                        </ul>
                    </nav>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
        </div>
    </div>
    <div class="container-fluid" >
        <div class="col-md-10 col-md-offset-1">
            <div ng-view></div>
        </div>
    </div>
    <!-- JavaScripts -->
    <script src="{{ asset("bower_components/jquery/dist/jquery.min.js")}}"></script>
    <script src="{{ asset("bower_components/bootstrap/dist/js/bootstrap.min.js")}}"></script>
    <script src="{{ asset("bower_components/angular/angular.min.js")}}"></script>
    <script src="{{ asset("bower_components/angular-route/angular-route.min.js")}}"></script>
    <script src="{{ asset("bower_components/angular-resource/angular-resource.min.js")}}"></script>
    <script src="{{ asset("bower_components/angular-truncate/src/truncate.js")}}"></script>
    <script src="{{ asset("bower_components/angular-loader/angular-loader.min.js")}}"></script>
    <script src="{{ asset("bower_components/angular-cookies/angular-cookies.min.js")}}"></script>
    <script src="{{ elixir('angularjs/app.js') }}"></script>
    <script src="{{ elixir('angularjs/controllers/loginCtrl.js') }}"></script>
    <script src="{{ elixir('angularjs/controllers/navCtrl.js') }}"></script>
    <script src="{{ elixir('angularjs/services/user.js') }}"></script>
</body>
</html>

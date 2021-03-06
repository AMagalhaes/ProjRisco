<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Câmara Municipal do Porto</title>

    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('/imgs/logoPorto.png') }}">

    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>

@unless(!Auth::check())
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://www.cm-porto.pt/">Porto</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/') }}">Ínicio</a></li>
                <li><a href="{{ route('activo.create') }}">Registo</a></li>
                <li><a href="{{ route('activo.index') }}">Ativos</a></li>
                <li><a href="{{ route('risco.index') }}">Riscos</a></li>
                <li><a href="{{ route('trata.index') }}">Controlos</a></li>
                <li><a href="{{ route('activo.risco.tratamento.index') }}">Análise</a></li>
                <li><a href="{{ route('charts.index') }}">Estatísticas</a></li>

            </ul>

            <ul class="nav navbar-nav navbar-right">
                @unless(Auth::user()->type !== 'admin')
                <li><a href="{{ url('/auth/register') }}">Register</a></li>
                @endunless

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{
                        Auth::user()->name }} <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
@endunless

@yield('content')

<!-- Scripts -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>

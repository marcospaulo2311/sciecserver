<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sciec</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vtp.css') }}">
    <link rel="stylesheet" href={{ asset('css/mdb.css') }}>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!--  Barra de navegação fixa -->
<nav class="navbar navbar-default navbar-fixed-top navbar-static-top">
    <div class="container-fluid">
        <div class="nav navbar-nav navbar-text">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <img src="{{ asset('imagens/logosciecp.png') }}" height="50px" width="125px"> <!--Adicionar Rotas-->
        </div>


        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-brand">
                <li><a href="#">Certificados<span class="sr-only">(current)</span></a></li>
                <li><a href="#">Artigos</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Eventos<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Categoria 1</a></li> <!--Adicionar Rotas-->
                        <li><a href="#">Categoria 2</a></li> <!--Adicionar Rotas-->
                        <li><a href="#">Categoria 3</a></li> <!--Adicionar Rotas-->
                        <li role="separator" class="divider"></li> <!--Adicionar Rotas-->
                        <li><a href="#">Categoria 4</a></li> <!--Adicionar Rotas-->
                        <li role="separator" class="divider"></li> <!--Adicionar Rotas-->
                        <li><a href="#">Categoria 5</a></li> <!--Adicionar Rotas-->
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Minicursos<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Categoria 1</a></li> <!--Adicionar Rotas-->
                        <li><a href="#">Categoria 2</a></li> <!--Adicionar Rotas-->
                        <li><a href="#">Categoria 3</a></li> <!--Adicionar Rotas-->
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Categoria 4</a></li> <!--Adicionar Rotas-->
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Categoria 5</a></li> <!--Adicionar Rotas-->
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right text-center ">
                @if(auth()->guest())
                    @if(!Request::is('auth/login'))
                        <li><a href="{{ url('/auth/login') }}"> <!--Adicionar Rotas-->
                                <button class="btn btn-success">
                                    <i class="fa fa-search fa-fw"></i>
                                    Login
                                </button>
                            </a></li>
                        <li><a href="{{ url('/auth/login') }}"> <!--Adicionar Rotas-->
                                <button class="btn btn-primary">
                                    <i class="fa fa-search fa-fw"></i>
                                    Cadastre-se
                                </button>
                            </a></li>
                    @endif
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-expanded="false">{{ auth()->user()->name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/auth/logout') }}">Logout</a></li> <!--Adicionar Rotas-->
                            <li><a href="{{ url('/auth/login') }}">Meu Perfil</a></li> <!--Adicionar Rotas-->
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<body>
<div>
    <a href="#top" class="glyphicon glyphicon-chevron-up"></a>
</div>
</body>

@yield('body')

<!--Footer-->
<footer class="page-footer green center-on-small-only-only">
    <!--Footer Links-->
    <div class="container-fluid">
        <div class="row">
            <!--First column-->
            <div class="col-md-3 offset-md-1">
                <h5 class="title"></h5>
                <p>Links Úteis sobre Eventos</p>
            </div>
            <!--/.First column-->

            <!--Second column-->
            <div class="col-md-2 offset-md-1">
                <h5 class="title"></h5>
            </div>
            <!--/.Second column-->

            <!--Third column-->
            <div class="col-md-2">
                <h5 class="title"></h5>
            </div>
            <!--/.Third column-->
            <!--Fourth column-->
            <div class="col-md-2">
                <h5 class="title"></h5>
            </div>
            <!--/.Fourth column-->
        </div>
    </div>
    <!--/.Footer Links-->

    <!--Copyright-->
    <div class="footer-copyright">
        <div class="container-fluid">
            © 2017 Copyright: <a href="https://ifto.paraiso.edu.br"  rel="nofollow"> 5º Periodo S.I IFTO - Campus Paraíso </a>

        </div>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->
@yield('footer')


<!-- Scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!-- Bootstrap core JavaScript
           ================================================== -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/vtp.js') }}"></script>
</body>
</html>

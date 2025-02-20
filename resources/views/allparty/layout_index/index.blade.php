<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Tooplate">
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"rel="stylesheet">
    <link rel="icon" href="/assets/images/logo.png">

    <title>AllParty - Festas & Eventos</title>

    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/owl-carousel.css">
    <link rel="stylesheet" href="/assets/css/tooplate-artxibition.css">

</head>
<style>

</style>

<body>

    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>

    <div class="pre-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <span>Olá! Confira já nossos eventos.</span>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="text-button">
                        <a href="rent-venue.html"> Contate-nos agora! <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-16">
                    <nav class="main-nav">
                        <a href="/" class="logo">ALL<em>Party</em></a>
                        <ul class="nav">
                            <li><a href="/">Início</a></li>
                            <li><a href="/about">Sobre nós</a></li>
                            <li><a href="/rent-venue">Local de aluguel</a></li>
                            <li><a href="/shows-events">Espetáculos e Eventos</a></li>
                            <li><a href="/tickets">Ingressos</a></li>

                            @auth
                                <li class="profile-img"><a href="/config">
                                        <img src="{{ Auth::user()->profile_picture ? asset(Auth::user()->profile_picture) : asset('assets/images/default-avatar.png') }}"
                                            alt="Perfil" class="profile-img">
                                    </a></li>
                                <li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                    </form>
                                    <a href="#" onclick="document.getElementById('logout-form').submit(); "
                                        class="logout-btn">
                                        Sair
                                    </a>
                                </li>
                            @else
                                <li>
                                    <a href="login" class="btn btn-login">Entrar</a>
                                </li>
                                <li>
                                    <a href="register" class="btn btn-register">Cadastrar</a>
                                </li>
                            @endauth
                        </ul>

                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </header>



    @yield('index')




    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="address">
                        <h4>Eventos e Espetacúlos</h4>
                        <a href="#"><span>Confira já <br>todos nossos<br>eventos</span></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="links">
                        <h4>Links úteis</h4>
                        <ul>
                            <li><a href="#">Informações</a></li>
                            <li><a href="#">Locais</a></li>
                            <li><a href="#">Guias</a></li>
                            <li><a href="#">Vídeos</a></li>
                            <li><a href="#">Divulgação</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="hours">
                        <h4>Horário de funcionamento</h4>
                        <ul>
                            <li>Seg a Sex: 10:00 às 20:00 PM</li>
                            <li>Sab - Dom: 11:00 às 16:00 PM</li>
                            <li>Feriados: Fechado</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="under-footer">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <p>Cabrália Paulista, São Paulo</p>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <p class="copyright">Copyright 2025 AllParty Company

                                    {{-- <br>Projeto: <a rel="nofollow" href="https://www.tooplate.com" target="_parent">Tooplate</a></p> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="sub-footer">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="logo"><span>ALL<em>Party</em></span></div>
                            </div>
                            <div class="col-12">
                                <div class="menu">
                                    <ul>
                                        <li><a href="/" class="active">Início</a></li>
                                        <li><a href="/about">Sobre nós</a></li>
                                        <li><a href="/rent-venue">Local de aluguel</a></li>
                                        <li><a href="/shows-events">Espetáculos e Eventos</a></li>
                                        <li><a href="/tickets">Ingressos</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="social-links">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="/assets/js/jquery-2.1.0.min.js"></script>
    <script src="/assets/js/popper.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/scrollreveal.min.js"></script>
    <script src="/assets/js/waypoints.min.js"></script>
    <script src="/assets/js/jquery.counterup.min.js"></script>
    <script src="/assets/js/imgfix.min.js"></script>
    <script src="/assets/js/mixitup.js"></script>
    <script src="/assets/js/accordions.js"></script>
    <script src="/assets/js/owl-carousel.js"></script>
    <script src="/assets/js/custom.js"></script>

</body>

</html>

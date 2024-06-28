<!doctype html>
<html lang="pt-br">

<head>
    <title>Crescente saber</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('assets/https://fonts.googleapis.com/css?family=DM+Sans:300,400,700|Indie+Flower') }}" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('assets/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">

    <!-- MAIN CSS -->

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">


</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


    <div class="site-wrap" id="home-section">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>



        <header class="site-navbar site-navbar-target" role="banner">

            <div class="container mb-3 d-none d-lg-block">
                <div class="d-flex align-items-center">
                    <div class="site-logo mr-auto">
                        <a href="{{ url('/') }}"><img src="../assets/images/img/logo.png" style="height: 130px; width: 140px;" alt="logo"><span class="text-primary"></span></a>
                    </div>
                    <div class="site-quick-contact">
                        <div class="row">
                            <div class="col">
                                <div class="site-info align-items-center mr-5">
                                    <span class="block-icon mr-3"><span class="icon-map-marker text-yellow"></span></span>
                                    <span> Av Marechal Tito, 1500 - São Miguel Paulista, São Paulo <br> Brasil</span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="site-info align-items-center">
                                    <span class="block-icon mr-3"><span class="icon-clock-o"></span></span>
                                    <span>Segunda - Sábado 7:00 - 18:00 <br> Sab - Dom FECHADO</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mb-3">
                <div class="d-flex align-items-center">
                    <div class="site-quick-contact d-lg-none">
                        <div class="row">
                            <div class="col">
                                <div class="site-info align-items-center mr-5">
                                    <span class="block-icon mr-3"><span class="icon-map-marker text-yellow"></span></span>
                                    <span> Av Marechal Tito, 1500 - São Miguel Paulista, São Paulo <br> Brasil</span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="site-info align-items-center">
                                    <span class="block-icon mr-3"><span class="icon-clock-o"></span></span>
                                    <span>Segunda - Sábado 7:00 - 18:00 <br> Sab - Dom FECHADO</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>






            <div class="container">
                <div class="menu-wrap d-flex align-items-center">
                    <span class="d-inline-block d-lg-none"><a href="#"
                            class="text-black site-menu-toggle js-menu-toggle py-5"><span
                                class="icon-menu h3 text-black"></span></a></span>



                    <nav class="site-navigation text-left mr-auto d-none d-lg-block main-menu" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav mr-auto ">
                            <li class="active"><a href="{{ route('/') }}" class="nav-link">Home</a></li>
                            <li><a href="{{ route('sobre') }}" class="nav-link">Sobre nós</a></li>

                            <style>
                                .sub-menu {
    display: none;
    position: absolute;
    background-color: #fff;
    padding: 10px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.2);
}

.menu-item:hover .sub-menu {
    display: block;
}

                            </style>
                            <li class="menu-item" ><p class="nav-link ">Ensino</p>
                                <ul class="sub-menu">
                                    <li><a href="{{ url('/ensino/maternal') }}">Maternal</a></li>
                                    <li><a href="{{ url('/ensino/jardim') }}">Jardim</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('contato') }}" class="nav-link">Contato</a></li>
                        </ul>



                    </nav>

                    <div class="top-social ml-auto">
                        <a href="{{ route('login') }}">Login</a>
                        <a href="#"><span class="icon-facebook text-teal"></span></a>
                        <a href="#"><span class="icon-twitter text-success"></span></a>
                        <a href="#"><span class="icon-linkedin text-yellow"></span></a>
                    </div>
                </div>
            </div>



        </header>

        <main>
            @yield('conteudo')
        </main>


        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <h2 class="footer-heading mb-3">Sobre nós</h2>
                        <p class="mb-5">Escola dedicada ao desenvolvimento integral da criança, onde aprendizado e
                            diversão se
                            encontram em um ambiente acolhedor. </p>

                        <h2 class="footer-heading mb-4">Newsletter</h2>
                        {{-- <form action="#" class="d-flex" class="subscribe">
                            <input type="text" class="form-control mr-3" placeholder="Email">
                            <input type="submit" value="Enviar" class="btn btn-primary">
                        </form> --}}

                        <form action="{{ route('contato.enviarNew') }}" method="POST" class="contact-form newsletter" id="new_letters">
                            @csrf
                            <div class="form-group">
                                <i class="far fa-envelope"></i>
                                <input class="form-control" type="email" name="emailNews" id="emailNews" placeholder="Endereço de E-mail" required="">
                            </div>

                            <button  type="submit" class="btn" onclick="new_letters(event)">Inscrever-se</button>

                            <div id="newsMensagem" class="msgContato"></div>

                        </form>

                    </div>
                    <div class="col-lg-8 ml-auto">
                        <div class="row">
                            <div class="col-lg-3 ml-auto">
                                <h2 class="footer-heading mb-4">Navegação</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#">Sobre nós</a></li>
                                    <li><a href="#">Na escola</a></li>
                                    <li><a href="#">Galeria</a></li>
                                    <li><a href="#">Mensalidade</a></li>
                                    <li><a href="#">Contato</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3">
                                <h2 class="footer-heading mb-4">Contato</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#">(11) 99657-0965</a></li>
                                    <li><a href="#">Av Marechal Tito, 1500</a></li>
                                    <li><a href="#">teste@teste</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-4">
                                <h2 class="footer-heading mb-4">Horario de funcionamento</h2>
                                <ul class="list-unstyled">
                                    <li>
                                        <p>Seg - Sex 7:00 - 18:00</p>
                                    </li>
                                    <li>
                                        <p>Sab - Dom FECHADO</p>
                                    </li>
                                </ul>

                            </div>



                        </div>
                    </div>
                </div>
                <div class="row pt-5 mt-5 text-center">
                    <div class="col-md-12">
                        <div class="border-top pt-5">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> Todos os direitos reservados a | <a
                                    href="https://github.com/CrockCry" target="_blank">Cloud Wise</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </footer>

    </div>

    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-migrate-3.0.0.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>

    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

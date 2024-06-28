@extends('layout-dash.layout-dash')

@section('tile', 'aluno')

@section('conteudoDash')

    <body class="g-sidenav-show bg-gray-200">
        <aside
            class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
            id="sidenav-main">
            <div class="sidenav-header">
                <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                    aria-hidden="true" id="iconSidenav"></i>
                <a class="navbar-brand m-0" href="#"
                    target="_blank">
                    <img src="{{ asset('assets/images/logo-ct.png') }}" class="navbar-brand-img h-100" alt="main_logo">
                    <span class="ms-1 font-weight-bold text-white">Area do aluno</span>
                </a>
            </div>
            <hr class="horizontal light mt-0 mb-2">
            <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white active bg-gradient-primary" href="../pages/dashboard.html">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">dashboard</i>
                            </div>
                            <span class="nav-link-text ms-1">Home</span>
                        </a>
                    </li>
                
                    <li class="nav-item">
                        <a class="nav-link text-white " href="../pages/billing.html">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">receipt_long</i>
                            </div>
                            <span class="nav-link-text ms-1">Pagamento</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white " href="../pages/notifications.html">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">notifications</i>
                            </div>
                            <span class="nav-link-text ms-1">Notificação</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white " href="../pages/sign-up.html">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">assignment</i>
                            </div>
                            <span class="nav-link-text ms-1">Sair</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
        <div class="main-content position-relative max-height-vh-100 h-100">
            <!-- Navbar -->
            <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
                data-scroll="true">
                <div class="container-fluid py-1 px-3">
                    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                            <div class="input-group input-group-outline">
                                <label class="form-label">Pesquisar</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <ul class="navbar-nav  justify-content-end">
                            <li class="nav-item px-3 d-flex align-items-center">
                                <a href="javascript:;" class="nav-link text-body p-0">
                                    <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                                </a>
                            </li>
                            <li class="nav-item dropdown pe-2 d-flex align-items-center">
                                <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-bell cursor-pointer"></i>
                                </a>
                                <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4"
                                    aria-labelledby="dropdownMenuButton">
                                    <li class="mb-2">
                                        <a class="dropdown-item border-radius-md" href="javascript:;">
                                            <div class="d-flex py-1">
                                                <div class="my-auto">
                                                    <img src="{{ asset('assets/images/team-2.jpg') }}"
                                                        class="avatar avatar-sm  me-3 ">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="text-sm font-weight-normal mb-1">
                                                        <span class="font-weight-bold">Nova mensagem</span> de Caio
                                                    </h6>
                                                    <p class="text-xs text-secondary mb-0">
                                                        <i class="fa fa-clock me-1"></i>
                                                        13 minutos atras
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mb-2">
                                        <a class="dropdown-item border-radius-md" href="javascript:;">
                                            <div class="d-flex py-1">
                                                <div class="my-auto">
                                                    <img src="{{ asset('assets/images/small-logos/logo-spotify.svg') }}"
                                                        class="avatar avatar-sm bg-gradient-dark  me-3 ">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="text-sm font-weight-normal mb-1">
                                                        <span class="font-weight-bold">Nova atividade</span> de Ingles
                                                    </h6>
                                                    <p class="text-xs text-secondary mb-0">
                                                        <i class="fa fa-clock me-1"></i>
                                                        1 dia
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item border-radius-md" href="javascript:;">
                                            <div class="d-flex py-1">
                                                <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                                                    <svg width="12px" height="12px" viewBox="0 0 43 36"
                                                        version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink">
                                                        <title>cartão de credito</title>
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <g transform="translate(-2169.000000, -745.000000)"
                                                                fill="#FFFFFF" fill-rule="nonzero">
                                                                <g transform="translate(1716.000000, 291.000000)">
                                                                    <g transform="translate(453.000000, 454.000000)">
                                                                        <path class="color-background"
                                                                            d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                                                            opacity="0.593633743"></path>
                                                                        <path class="color-background"
                                                                            d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                                                        </path>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="text-sm font-weight-normal mb-1">
                                                        Pagamento  realizado com sucesso!
                                                    </h6>
                                                    <p class="text-xs text-secondary mb-0">
                                                        <i class="fa fa-clock me-1"></i>
                                                        2 dias
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item d-flex align-items-center">
                                <a href="../pages/sign-in.html" class="nav-link text-body font-weight-bold px-0">
                                    <i class="fa fa-user me-sm-1"></i>
                                    <span class="d-sm-inline d-none">Sair</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="container-fluid px-2 px-md-4">
                <div class="page-header min-height-300 border-radius-xl mt-4"
                    style="background-image: url('https://images.unsplash.com/photo-1516383607781-913a19294fd1?q=80&w=2074&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
                    <span class="mask  bg-gradient-primary  opacity-6"></span>
                </div>
                <div class="card card-body mx-3 mx-md-4 mt-n6">
                    <div class="row gx-4 mb-2">
                        <div class="col-auto">
                            <div class="avatar avatar-xl position-relative">
                                <img src="{{ asset('assets/images/bruce-mars.jpg') }}" alt="profile_image"
                                    class="w-100 border-radius-lg shadow-sm">
                            </div>
                        </div>
                        <div class="col-auto my-auto">
                            <div class="h-100">
                                <h5 class="mb-1">
                                    Pedro Victor Kanta
                                </h5>
                                <p class="mb-0 font-weight-normal text-sm">
                                    Aluno
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                            <div class="nav-wrapper position-relative end-0">
                                <ul class="nav nav-pills nav-fill p-1" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link mb-0 px-0 py-1 active " data-bs-toggle="tab"
                                            href="javascript:;" role="tab" aria-selected="true">
                                            <i class="material-icons text-lg position-relative">home</i>
                                            <span class="ms-1">App</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href="javascript:;"
                                            role="tab" aria-selected="false">
                                            <i class="material-icons text-lg position-relative">email</i>
                                            <span class="ms-1">Messages</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href="javascript:;"
                                            role="tab" aria-selected="false">
                                            <i class="material-icons text-lg position-relative">settings</i>
                                            <span class="ms-1">Settings</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row">
                            <div class="col-12 col-xl-4">
                                <div class="card card-plain h-100">
                                    <div class="card-header pb-0 p-3">
                                        <h6 class="mb-0">Preferencias</h6>
                                    </div>
                                    <div class="card-body p-3">
                                        <h6 class="text-uppercase text-body text-xs font-weight-bolder">Notificações</h6>
                                        <ul class="list-group">
                                            <li class="list-group-item border-0 px-0">
                                                <div class="form-check form-switch ps-0">
                                                    <input class="form-check-input ms-auto" type="checkbox"
                                                        id="flexSwitchCheckDefault" checked>
                                                    <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                                        for="flexSwitchCheckDefault">Enviar email quando professor enviar mensagens</label>
                                                </div>
                                            </li>
                                            <li class="list-group-item border-0 px-0">
                                                <div class="form-check form-switch ps-0">
                                                    <input class="form-check-input ms-auto" type="checkbox"
                                                        id="flexSwitchCheckDefault1">
                                                    <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                                        for="flexSwitchCheckDefault1">Enviar email avisando de atividades</label>
                                                </div>
                                            </li>
                                            <li class="list-group-item border-0 px-0">
                                                <div class="form-check form-switch ps-0">
                                                    <input class="form-check-input ms-auto" type="checkbox"
                                                        id="flexSwitchCheckDefault2" checked>
                                                    <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                                        for="flexSwitchCheckDefault2">Enviar email de atualização de aulas e notas</label>
                                                </div>
                                            </li>
                                        </ul>
                                        <h6 class="text-uppercase text-body text-xs font-weight-bolder mt-4">Professor responsavel pela sala
                                        </h6>
                                        <ul class="list-group">
                                            <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2 pt-0">
                                                <div class="avatar me-3">
                                                    <img src="{{ asset('assets/images/professor.jpg') }}"
                                                        alt="kal" class="border-radius-lg shadow">
                                                </div>
                                                <div class="d-flex align-items-start flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Camila Tanco.</h6>
                                                    
                                                </div>
                                                <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto"
                                                    href="javascript:;">Ver professor</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-4">
                                <div class="card card-plain h-100">
                                    <div class="card-header pb-0 p-3">
                                        <div class="row">
                                            <div class="col-md-8 d-flex align-items-center">
                                                <h6 class="mb-0">Informações do aluno</h6>
                                            </div>
                                            <div class="col-md-4 text-end">
                                                <a href="javascript:;">
                                                    <i class="fas fa-user-edit text-secondary text-sm"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Edit Profile"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-3">
                                        <p class="text-sm">
                                            Ola me chamo Pedro, tenho 4 aninhos, sou um pouco introvertido, então tenho um
                                            pouco de dificuldade para fazer amizades, uso óculos com grau alto, então vou
                                            precisar estar sempre perto da lousa caso tenha alguma atividade, e tenho
                                            alergia a amendoim, caso eu coma, vou precisar de um antialeginco X com
                                            urgencia.
                                        </p>
                                        <hr class="horizontal gray-light my-4">
                                        <ul class="list-group">
                                            <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                                    class="text-dark">Nome do responsavel:</strong> &nbsp; Samanta Kanta</li>
                                            <li class="list-group-item border-0 ps-0 text-sm"><strong
                                                    class="text-dark">Telefone:</strong> &nbsp; (11) 9 1234 5678</li>
                                            <li class="list-group-item border-0 ps-0 text-sm"><strong
                                                    class="text-dark">Email:</strong> &nbsp; alunoX@mail.com</li>
                                            <li class="list-group-item border-0 ps-0 text-sm"><strong
                                                    class="text-dark">Localização:</strong> &nbsp; Rua X, Numero X, Cidade X</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-4">
                                <div class="card card-plain h-100">
                                    <div class="card-header pb-0 p-3">
                                        <h6 class="mb-0">Colegas de sala</h6>
                                    </div>
                                    <div class="card-body p-3">
                                        <ul class="list-group">
                                            <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2 pt-0">
                                                <div class="avatar me-3">
                                                    <img src="{{ asset('assets/images/kal-visuals-square.jpg') }}"
                                                        alt="kal" class="border-radius-lg shadow">
                                                </div>
                                                <div class="d-flex align-items-start flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Cleber B.</h6>
                                                    
                                                </div>
                                                <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto"
                                                    href="javascript:;">Ver aluno</a>
                                            </li>
                                            <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                                                <div class="avatar me-3">
                                                    <img src="{{ asset('assets/images/marie.jpg') }}" alt="kal"
                                                        class="border-radius-lg shadow">
                                                </div>
                                                <div class="d-flex align-items-start flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Anne Marie</h6>
                                                    
                                                </div>
                                                <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto"
                                                    href="javascript:;">Ver aluno</a>
                                            </li>
                                            <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                                                <div class="avatar me-3">
                                                    <img src="{{ asset('assets/images/ivana-square.jpg') }}"
                                                        alt="kal" class="border-radius-lg shadow">
                                                </div>
                                                <div class="d-flex align-items-start flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Henrique</h6>
                                                   
                                                </div>
                                                <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto"
                                                    href="javascript:;">Ver aluno</a>
                                            </li>
                                            <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                                                <div class="avatar me-3">
                                                    <img src="{{ asset('assets/images/team-4.jpg') }}" alt="kal"
                                                        class="border-radius-lg shadow">
                                                </div>
                                                <div class="d-flex align-items-start flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Peterson</h6>
                                                    
                                                </div>
                                                <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto"
                                                    href="javascript:;">Ver aluno</a>
                                            </li>
                                            <li class="list-group-item border-0 d-flex align-items-center px-0">
                                                <div class="avatar me-3">
                                                    <img src="{{ asset('assets/images/team-3.jpg') }}" alt="kal"
                                                        class="border-radius-lg shadow">
                                                </div>
                                                <div class="d-flex align-items-start flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Nicole</h6>
                                                    
                                                </div>
                                                <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto"
                                                    href="javascript:;">Ver aluno</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-4">
                                <div class="mb-5 ps-3">
                                    <h6 class="mb-1">Atividades</h6>
                                    <p class="text-sm">Projetos e ativdades realizados</p>
                                </div>
                                <div class="row">
                                    <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                        <div class="card card-blog card-plain">
                                            <div class="card-header p-0 mt-n4 mx-3">
                                                <a class="d-block shadow-xl border-radius-xl">
                                                    <img src="{{ asset('assets/images/home-decor-1.jpg') }}"
                                                        alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                </a>
                                            </div>
                                            <div class="card-body p-3">
                                                <p class="mb-0 text-sm">Project #2</p>
                                                <a href="javascript:;">
                                                    <h5>
                                                        Modern
                                                    </h5>
                                                </a>
                                                <p class="mb-4 text-sm">
                                                    Descrição atividade.
                                                </p>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <button type="button"
                                                        class="btn btn-outline-primary btn-sm mb-0">Ver atividade</button>
                                                    <div class="avatar-group mt-2">
                                                        <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                            data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                            title="Elena Morison">
                                                            <img alt="Image placeholder"
                                                                src="{{ asset('assets/images/team-1.jpg') }}">
                                                        </a>
                                                        <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                            data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                            title="Ryan Milly">
                                                            <img alt="Image placeholder"
                                                                src="{{ asset('assets/images/team-2.jpg') }}">
                                                        </a>
                                                        <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                            data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                            title="Nick Daniel">
                                                            <img alt="Image placeholder"
                                                                src="{{ asset('assets/images/team-3.jpg') }}">
                                                        </a>
                                                        <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                            data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                            title="Peterson">
                                                            <img alt="Image placeholder"
                                                                src="{{ asset('assets/images/team-4.jpg') }}">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                        <div class="card card-blog card-plain">
                                            <div class="card-header p-0 mt-n4 mx-3">
                                                <a class="d-block shadow-xl border-radius-xl">
                                                    <img src="{{ asset('assets/images/home-decor-2.jpg') }}"
                                                        alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                                                </a>
                                            </div>
                                            <div class="card-body p-3">
                                                <p class="mb-0 text-sm">Project #1</p>
                                                <a href="javascript:;">
                                                    <h5>
                                                        Uso das tintas
                                                    </h5>
                                                </a>
                                                <p class="mb-4 text-sm">
                                                    Descrição atividade.
                                                </p>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <button type="button"
                                                        class="btn btn-outline-primary btn-sm mb-0">Ver atividade</button>
                                                    <div class="avatar-group mt-2">
                                                        <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                            data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                            title="Nick Daniel">
                                                            <img alt="Image placeholder"
                                                                src="{{ asset('assets/images/team-3.jpg') }}">
                                                        </a>
                                                        <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                            data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                            title="Peterson">
                                                            <img alt="Image placeholder"
                                                                src="{{ asset('assets/images/team-4.jpg') }}">
                                                        </a>
                                                        <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                            data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                            title="Elena Morison">
                                                            <img alt="Image placeholder"
                                                                src="{{ asset('assets/images/team-1.jpg') }}">
                                                        </a>
                                                        <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                            data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                            title="Ryan Milly">
                                                            <img alt="Image placeholder"
                                                                src="{{ asset('assets/images/team-2.jpg') }}">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                        <div class="card card-blog card-plain">
                                            <div class="card-header p-0 mt-n4 mx-3">
                                                <a class="d-block shadow-xl border-radius-xl">
                                                    <img src="{{ asset('assets/images/home-decor-3.jpg') }}"
                                                        alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                </a>
                                            </div>
                                            <div class="card-body p-3">
                                                <p class="mb-0 text-sm">Project #3</p>
                                                <a href="javascript:;">
                                                    <h5>
                                                        Desenho criativo
                                                    </h5>
                                                </a>
                                                <p class="mb-4 text-sm">
                                                    Descrição atividade.
                                                </p>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <button type="button"
                                                        class="btn btn-outline-primary btn-sm mb-0">Ver atividade</button>
                                                    <div class="avatar-group mt-2">
                                                        <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                            data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                            title="Peterson">
                                                            <img alt="Image placeholder"
                                                                src="{{ asset('assets/images/team-4.jpg') }}">
                                                        </a>
                                                        <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                            data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                            title="Nick Daniel">
                                                            <img alt="Image placeholder"
                                                                src="{{ asset('assets/images/team-3.jpg') }}">
                                                        </a>
                                                        <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                            data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                            title="Ryan Milly">
                                                            <img alt="Image placeholder"
                                                                src="{{ asset('assets/images/team-2.jpg') }}">
                                                        </a>
                                                        <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                            data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                            title="Elena Morison">
                                                            <img alt="Image placeholder"
                                                                src="{{ asset('assets/images/team-1.jpg') }}">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                        <div class="card card-blog card-plain">
                                            <div class="card-header p-0 mt-n4 mx-3">
                                                <a class="d-block shadow-xl border-radius-xl">
                                                    <img src="{{ asset('assets/images/home-decor-4.jpg') }}"
                                                        alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                </a>
                                            </div>
                                            <div class="card-body p-3">
                                                <p class="mb-0 text-sm">Project #4</p>
                                                <a href="javascript:;">
                                                    <h5>
                                                        Atividade externa
                                                    </h5>
                                                </a>
                                                <p class="mb-4 text-sm">
                                                    Descrição atividade.
                                                </p>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <button type="button"
                                                        class="btn btn-outline-primary btn-sm mb-0">Ver atividade</button>
                                                    <div class="avatar-group mt-2">
                                                        <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                            data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                            title="Peterson">
                                                            <img alt="Image placeholder"
                                                                src="{{ asset('assets/images/team-4.jpg') }}">
                                                        </a>
                                                        <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                            data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                            title="Nick Daniel">
                                                            <img alt="Image placeholder"
                                                                src="{{ asset('assets/images/team-3.jpg') }}">
                                                        </a>
                                                        <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                            data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                            title="Ryan Milly">
                                                            <img alt="Image placeholder"
                                                                src="{{ asset('assets/images/team-2.jpg') }}">
                                                        </a>
                                                        <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                            data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                            title="Elena Morison">
                                                            <img alt="Image placeholder"
                                                                src="{{ asset('assets/images/team-1.jpg') }}">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer py-4  ">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-6 mb-lg-0 mb-4">
                        </div>
                        <div class="col-lg-6">
                            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com" class="nav-link text-muted"
                                        target="_blank">Creative Tim</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted"
                                        target="_blank">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com/blog" class="nav-link text-muted"
                                        target="_blank">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted"
                                        target="_blank">License</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <div class="fixed-plugin">
            <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
                <i class="material-icons py-2">settings</i>
            </a>
            <div class="card shadow-lg">
                <div class="card-header pb-0 pt-3">
                    <div class="float-start">
                        <h5 class="mt-3 mb-0">Material UI Configurator</h5>
                        <p>See our dashboard options.</p>
                    </div>
                    <div class="float-end mt-4">
                        <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                            <i class="material-icons">clear</i>
                        </button>
                    </div>
                    <!-- End Toggle Button -->
                </div>
                <hr class="horizontal dark my-1">
                <div class="card-body pt-sm-3 pt-0">
                    <!-- Sidebar Backgrounds -->
                    <div>
                        <h6 class="mb-0">Sidebar Colors</h6>
                    </div>
                    <a href="javascript:void(0)" class="switch-trigger background-color">
                        <div class="badge-colors my-2 text-start">
                            <span class="badge filter bg-gradient-primary active" data-color="primary"
                                onclick="sidebarColor(this)"></span>
                            <span class="badge filter bg-gradient-dark" data-color="dark"
                                onclick="sidebarColor(this)"></span>
                            <span class="badge filter bg-gradient-info" data-color="info"
                                onclick="sidebarColor(this)"></span>
                            <span class="badge filter bg-gradient-success" data-color="success"
                                onclick="sidebarColor(this)"></span>
                            <span class="badge filter bg-gradient-warning" data-color="warning"
                                onclick="sidebarColor(this)"></span>
                            <span class="badge filter bg-gradient-danger" data-color="danger"
                                onclick="sidebarColor(this)"></span>
                        </div>
                    </a>
                    <!-- Sidenav Type -->
                    <div class="mt-3">
                        <h6 class="mb-0">Sidenav Type</h6>
                        <p class="text-sm">Choose between 2 different sidenav types.</p>
                    </div>
                    <div class="d-flex">
                        <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark"
                            onclick="sidebarType(this)">Dark</button>
                        <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent"
                            onclick="sidebarType(this)">Transparent</button>
                        <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white"
                            onclick="sidebarType(this)">White</button>
                    </div>
                    <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
                    <!-- Navbar Fixed -->
                    <div class="mt-3 d-flex">
                        <h6 class="mb-0">Navbar Fixed</h6>
                        <div class="form-check form-switch ps-0 ms-auto my-auto">
                            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed"
                                onclick="navbarFixed(this)">
                        </div>
                    </div>
                    <hr class="horizontal dark my-3">
                    <div class="mt-2 d-flex">
                        <h6 class="mb-0">Light / Dark</h6>
                        <div class="form-check form-switch ps-0 ms-auto my-auto">
                            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version"
                                onclick="darkMode(this)">
                        </div>
                    </div>
                    <hr class="horizontal dark my-sm-4">
                    <a class="btn bg-gradient-info w-100"
                        href="https://www.creative-tim.com/product/material-dashboard-pro">Free Download</a>
                    <a class="btn btn-outline-dark w-100"
                        href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard">View
                        documentation</a>
                    <div class="w-100 text-center">
                        <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard"
                            data-icon="octicon-star" data-size="large" data-show-count="true"
                            aria-label="Star creativetimofficial/material-dashboard on GitHub">Star</a>
                        <h6 class="mt-3">Thank you for sharing!</h6>
                        <a href="https://twitter.com/intent/tweet?text=Check%20Material%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard"
                            class="btn btn-dark mb-0 me-2" target="_blank">
                            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
                        </a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/material-dashboard"
                            class="btn btn-dark mb-0 me-2" target="_blank">
                            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
                        </a>
                    </div>
                </div>
            </div>
        </div>

    @endsection

@extends('layouts.app')
@section('content')
<div class="container-fluid" id="wrapper">
    <div class="row">
        <nav class="sidebar col-xs-12 col-sm-4 col-lg-3 col-xl-2 bg-faded sidebar-style-1">
            <h1 class="site-title"><a href="dashboard.php"><em class="fa fa-rocket"></em> PAMI</a></h1>
            <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><em class="fa fa-bars"></em></a>
                <ul class="nav nav-pills flex-column sidebar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="dashboard.php"><em class="fa fa-dashboard"></em> Dashboard <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <a href="php/logout.php" class="logout-button"><em class="fa fa-power-off"></em> Salir</a></nav>
            <main class="col-xs-12 col-sm-8 offset-sm-4 col-lg-9 offset-lg-3 col-xl-10 offset-xl-2 pt-3 pl-4">
                <header class="page-header row justify-center">
                    <div class="col-md-6 col-lg-8">
                        <h1 class="float-left text-center text-md-left">Dashboard | PAMI</h1>
                    </div>
                    <div class="dropdown user-dropdown col-md-6 col-lg-4 text-center text-md-right"><a class="btn btn-stripped dropdown-toggle" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="images/pami3.png" alt="profile photo" class="circle float-left profile-photo" width="50" height="auto">                        
                        <div class="username mt-1">
                            <h4 class="mb-1">PAMI User</h4>
                            <h6 class="text-muted">PAMI Lv</h6>
                        </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" style="margin-right: 1.5rem;" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><em class="fa fa-power-off mr-1"></em> Salir</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </div>
                    <div class="clear"></div>
                </header>
                <section class="row">
                    <div class="col-sm-12">
                        <section class="row">
                            <div class="col-md-12 col-lg-8">
                                <div class="jumbotron">
                                    <h1 class="mb-4">Bienvenido a PAMI!</h1>
                                    <p class="lead">Esta es la Alpha en Desarrollo de PAMI, las funciones y operaciones pueden variar en las versiones posteriores, recomendamos seguir <a href="https://www.github.com/ViElectronicEntertainment/PAMI/wiki">Nuestra wiki de desarrollo</a>.</p>
                                    <p>El proyecto PAMI es un proyecto desarrollado para aumentar la productividad de las empresas mediante estrategias de Gamificacion.</p>
                                    <p class="lead"><a class="btn btn-primary btn-lg mt-2" href="#" role="button">Acerca del Proyecto PAMI</a></p>
                                </div>
                                <div class="card mb-4">
                                    <div class="card-block">
                                        <h3 class="card-title">Novedades</h3>
                                        <div class="dropdown card-title-btn-container">
                                            <button class="btn btn-sm btn-subtle" type="button"><em class="fa fa-list-ul"></em> Ver Todo</button>
                                        </div>
                                        <h6 class="card-subtitle mb-2 text-muted">Ultimas Noticias</h6>
                                        <div class="divider" style="margin-top: 1rem;"></div>
                                        <div class="articles-container">
                                            <div class="article border-bottom">
                                                <div class="col-xs-12">
                                                    <div class="row">
                                                        <div class="col-2 date">
                                                            <div class="large">1</div>
                                                            <div class="text-muted">Enero</div>
                                                        </div>
                                                        <div class="col-10">
                                                            <h4><a href="#">PAMI Funcional</a></h4>
                                                            <p>Presentamos la version de PAMI que permite interaciones como el registro y asignaciones.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                            <!--End .article-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-4">
                                <div class="card mb-4">
                                    <div class="card-block">
                                        <h3 class="card-title">Desarrollo</h3>
                                        <h6 class="card-subtitle mb-2 text-muted">Modulos PAMI</h6>
                                        <div class="user-progress justify-center">
                                            <div class="col-sm-3 col-md-2" style="padding: 0;">
                                                <img src="images/pami3.png" alt="profile photo" class="circle profile-photo" style="width: 100%; max-width: 100px;">
                                            </div>
                                            <div class="col-sm-6 col-md-8">
                                                <h6 class="pt-1">UX Interfaz</h6>
                                                <div class="progress progress-custom">
                                                    <div class="progress-bar bg-primary" style="width: 20%" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-md-2">
                                                <div class="progress-label">20%</div>
                                            </div>
                                        </div>
                                        <div class="user-progress justify-center">
                                            <div class="col-sm-3 col-md-2" style="padding: 0;">
                                                <img src="images/pami3.png" alt="profile photo" class="circle profile-photo" style="width: 100%; max-width: 100px;">
                                            </div>
                                            <div class="col-sm-6 col-md-8">
                                                <h6 class="pt-1">Registro</h6>
                                                <div class="progress progress-custom">
                                                    <div class="progress-bar bg-primary" style="width: 15%" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-md-2">
                                                <div class="progress-label">15%</div>
                                            </div>
                                        </div>
                                        <div class="user-progress justify-center">
                                            <div class="col-sm-3 col-md-2" style="padding: 0;">
                                                <img src="images/pami3.png" alt="profile photo" class="circle profile-photo" style="width: 100%; max-width: 100px;">
                                            </div>
                                            <div class="col-sm-6 col-md-8">
                                                <h6 class="pt-1">Crud de Asignacion</h6>
                                                <div class="progress progress-custom">
                                                    <div class="progress-bar bg-primary" style="width: 10%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-md-2">
                                                <div class="progress-label">10%</div>
                                            </div>
                                        </div>
                                        <div class="divider"></div>
                                        <div id="calendar"></div>
                                        <div class="divider"></div>
                                        <h3 class="card-title">Proximamente</h3>
                                        <h6 class="card-subtitle mb-2 text-muted">Que se aproxima en PAMI?</h6>
                                        <ul class="timeline">
                                            <li>
                                                <div class="timeline-badge"><em class="fa fa-camera"></em></div>
                                                <div class="timeline-panel">
                                                    <div class="timeline-heading">
                                                        <h5 class="timeline-title mt-2">Perfiles</h5>
                                                    </div>
                                                    <div class="timeline-body">
                                                        <p>Sistema de puntos visibles.</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-badge primary"><em class="fa fa-link"></em></div>
                                                <div class="timeline-panel">
                                                    <div class="timeline-heading">
                                                        <h5 class="timeline-title mt-2">URL Amigables</h5>
                                                    </div>
                                                    <div class="timeline-body">
                                                        <p>/%user% para describir los usuarios PAMI.</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-badge"><em class="fa fa-paperclip"></em></div>
                                                <div class="timeline-panel">
                                                    <div class="timeline-heading">
                                                        <h5 class="timeline-title mt-2">Sistema de Proyectos</h5>
                                                    </div>
                                                    <div class="timeline-body">
                                                        <p>Crear, Actualizar, Editar y Eliminar Proyectos.</p>
                                                    </div>
                                                </div>
                                                <div class="timeline-badge"><em class="fa fa-paperclip"></em></div>
                                                <div class="timeline-panel">
                                                    <div class="timeline-heading">
                                                        <h5 class="timeline-title mt-2">Sistema de Tareas</h5>
                                                    </div>
                                                    <div class="timeline-body">
                                                        <p>Crear, Actualizar, Editar y Eliminar Tareas.</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="row">
                            <div class="col-12 mt-1 mb-4">Diseñado por <a href="https://www.blinteruniverse.com">Sergio Veloza</a></div>
                        </section>
                    </div>
                </section>
            </main>
        </div>
    </div>
@endsection

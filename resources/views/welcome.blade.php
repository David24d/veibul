
@extends('layouts.template')


@section('content') 
@foreach ($tblServicios as $tblServicio)                                                                           
                                <!-- Services-->
                                
                                <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas {{ $tblServicio->icono }} fa-stack-1x fa-inverse"></i>
                        </span>

                        <h4 class="my-3">{{ $tblServicio->titulo }}</h4>
                        <p class="text-muted"> {{ $tblServicio->descripcion }}</p>
                    </div>                
                                @endforeach
@endsection 





@section('additional-content')
@foreach ($tblPortafolios as $tblPortafolio)                                                                         
                            <div class="col-lg-4 col-sm-6 mb-4">
                                                    <!-- Portfolio item 1-->
                            <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1{{ $tblPortafolio->id }}">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/{{ $tblPortafolio->imagen }}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">{{ $tblPortafolio->titulo }}</div>
                                <div class="portfolio-caption-subheading text-muted">{{ $tblPortafolio->subtitulo }}</div>
                            </div>
                        </div>
                    </div>
         <!-- Portfolio item 1 modal popup-->
         <div class="portfolio-modal modal fade" id="portfolioModal1{{ $tblPortafolio->id }}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">{{ $tblPortafolio->titulo }}</h2>
                                    <p class="item-intro text-muted">{{ $tblPortafolio->subtitulo }}</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/{{ $tblPortafolio->imagen }}" alt="..." />
                                    <p>{{ $tblPortafolio->descripcion }}</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Cliente:</strong>
                                            {{ $tblPortafolio->cliente }}
                                        </li>
                                        <li>
                                            <strong>Categoria:</strong>
                                            {{ $tblPortafolio->categoria }}
                                        </li>
                                        <li>
                                             <strong>URL:</strong>
                                             <a href="{{ $tblPortafolio->url }}">{{ $tblPortafolio->url }}</a>
                                         </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Cerrar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>                                   
                                            @endforeach
@endsection




    @section('footer-content')
    @foreach ($tblentradas as $tblentrada)
                                      
                                        <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/{{ $tblentrada->imagen }}" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>{{ $tblentrada->fecha }}</h4>
                                <h4 class="subheading">{{ $tblentrada->titulo }}</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">{{ $tblentrada->descripcion }}</p></div>
                        </div>
                    </li>                        
                                    @endforeach
@endsection




@section('header-content')
@foreach ($tblequipos as $tblequipo)
                                         
                                             
                     
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/{{ $tblequipo->imagen }}" alt="..." />
                            <h4>{{ $tblequipo->nombrecompleto }}</h4>
                            <p class="text-muted">{{ $tblequipo->puesto }}</p>
                            <a class="btn btn-dark btn-social mx-2" href="{{ $tblequipo->twiter }}" aria-label="Parveen Anand Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="{{ $tblequipo->facebook }}" aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            
                        </div>
                    </div>
                @endforeach
@endsection

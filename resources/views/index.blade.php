@extends('buania')
@section('plaafricalaw-body')
<div class="top"></div>
<div class="global-div">
    <div class="wrapper">

        <div class="banner">
            <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="" aria-current="true" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="" aria-current="true" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" class="" aria-current="true" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" class="" aria-current="true" aria-label="Slide 5"></button>

                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="storage/slides/1649335560.1644331708.agriculture.png" alt="">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="text-white text-star">
                                        <h2></h2>
                                        <h1>@lang("public.caroussel-p11")</h1>
                                        <p>@lang("public.caroussel-p12")</p>
                                        <a href="{{route('buania.expertise')}}" class="btn btn-1">@lang('public.read more')</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <img src="storage/slides/1649335612.1644385541.mine%20et%20hydrocarbure%202.webp" alt="">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="text-white text-star">
                                        <h2></h2>
                                        <h1>@lang("public.caroussel-p21")</h1>
                                        <p>@lang("public.caroussel-p22")</p>
                                        <a href="{{route('buania.expertise')}}" class="btn btn-1">@lang('public.read more')</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <img src="storage/slides/1649335649.1644386774.Infrastructures%201.webp" alt="">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="text-white text-star">
                                        <h2></h2>
                                        <h1>@lang("public.caroussel-p31")</h1>
                                        <p>@lang("public.caroussel-p32")</p>
                                        <a href="{{route('buania.expertise')}}" class="btn btn-1">@lang('public.read more')</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <img src="storage/slides/1649335698.1644391214.Banques%20finance%20et%20assurance.png" alt="">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="text-white text-star">
                                        <h2></h2>
                                        <h1>@lang("public.caroussel-p41")</h1>
                                        <p>@lang("public.caroussel-p42")</p>
                                        <a href="{{route('buania.expertise')}}" class="btn btn-1">@lang('public.read more')</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <img src="storage/slides/1649335748.1644395887.contentieux-et-arbitrage-2.png" alt="">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="text-white text-star">
                                        <h2></h2>
                                        <h1>@lang("public.caroussel-p51")</h1>
                                        <p>@lang("public.caroussel-p52")</p>
                                        <a href="{{route('buania.expertise')}}" class="btn btn-1">@lang('public.read more')</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <div class="block_1 mt-5">
            <div class="container">


                @if ($accueil_data!=null)
                <div class="row g-3 g-sm-3 g-lg-3">

                    @if(count($accueil_data["bureaux"])>0)
                    @foreach ($accueil_data['bureaux'] as $bureau)
                    <div class="col-lg-4 col-sm-6 col-12">
                        <a href="{{route('presence.detail',$bureau['id'])}}">
                            <div class="card">
                                <div class="text-star">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewbox="0 0 16 16">
                                            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                        </svg>
                                    </div>
                                    <h4>

                                        @if ($currentLocale=="fr")
                                        {{$bureau['pays_fr']}}
                                        @endif

                                        @if ($currentLocale=="en")
                                        {{$bureau['pays_en']}}
                                        @endif
                                    </h4>
                                    <h6>{{$bureau['nom']}}</h6>
                                    <p>Email : <span class="fw-bold"> {{$bureau['email']}}</span> </p>
                                    <p>Tel : <span class="fw-bold">{{$bureau['telephone']}}</span></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                    @endif
                </div>
                @endif

            </div>
        </div>
        <div class="about">
            <div class="d-flex justify-content-center align-items-center">
                <div class="container">
                    <div class="d-flex justify-content-center align-items-center  ">
                        <div class="row g-3 g-sm-5 g-lg-0">
                            <div class="col-lg-6 col-sm-6">
                                <div class=" new-card">
                                    <img src="storage/about/DSC_7803.jpg" alt="img">

                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-bar">
                                <h2>@lang('public.about us')</h2>
                                <h1>PLA Law Firm
                                </h1>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p>
                                            @lang('public.about-p1')

                                        </p>
                                        <p>
                                            @lang('public.about-pd2')
                                        </p>
                                    </div>
                                    <div class="col-sm-12">
                                        <a href="{{route('buania.about')}}" class="btn text-with">@lang('public.read more')</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>


        <div class="block_3" style="background: #1a1a1a;">
            <img src="assets/images/bg-cover2.html" class="img-cover">
            <div class="container">
                <div class="text-center">
                    <h2 class="mb-2">@lang("public.our")</h2>
                    <h1 style="color: #fff !important;">@lang("public.team")</h1>

                </div>
                @if ($accueil_data!=null)
                @if(count($accueil_data["avocats"])>0)
                <div id="slider-carousel" class="owl-carousel">

                    @foreach ($accueil_data["avocats"] as $avocat )
                    <div class="item">
                        <a href="{{route('team.detail',$avocat['id'])}}">
                            <div class="card">
                                <div class="card-img d-flex justify-content-center align-items-center ">
                                    <img style="height: 100%;width: auto;" src="{{$url_fichier.''.$avocat['photo']}}" alt="">
                                </div>
                                <div class="text-center mt-0 ">
                                    <h5>{{$avocat["prenom"]}} {{$avocat["nom"]}}</h5>

                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach

                </div>
                @endif
                @endif

            </div>

        </div>

        @if ($accueil_data!=null)
        @if (count($accueil_data["publications"])>0)
            <div class="block_9">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <h2 class="mb-2">@lang("public.our")</h2>
                                <h1>Publications</h1>

                            </div>
                        </div>
                    </div>
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                          @php
                            $chunks = collect($accueil_data["publications"])->chunk(3);
                          @endphp
                          @foreach ($chunks as $chunk)
                            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                              <div class="row">
                                @foreach ($chunk as $publication)
                                  <div class="col-md-4">
                                    <div style="  left: 0px; display: block; transition: all 1000ms ease 0s; transform: translate3d(0px, 0px, 0px);">
                                        <div>
                                            <div class="item">
                                                <div class="card">
                                                    <div class="category">
                                                        @if ($currentLocale=="fr")
                                                        {{$publication['domaine']['nom_fr']}}
                                                        @endif

                                                        @if ($currentLocale=="en")
                                                        {{$publication['domaine']['nom_en']}}
                                                        @endif

                                                    </div>
                                                    <div class="card-img">
                                                        <div class="content-img">
                                                            <img src="{{$url_fichier_pub.''.$publication["photo"]}}" alt="img">
                                                        </div>
                                                        <div class="date">
                                                            <span>{{ \Carbon\Carbon::parse($publication['created_at'])->format('d M') }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <a href="" style="margin-top:0">
                                                            <h6>

                                                                <div class="avatar">
                                                                    <img src="{{$url_fichier.''.$publication['avocat']['photo']}}" alt="">
                                                                </div>

                                                                {{$publication["avocat"]['prenom']}} {{$publication["avocat"]['nom']}}
                                                            </h6>
                                                        </a>
                                                        <h4>
                                                            @if ($currentLocale=="fr")
                                                            <span>{{$publication['titre_fr']}}</span>
                                                            @endif

                                                            @if ($currentLocale=="en")
                                                            <span>{{$publication['titre_en']}}</span>
                                                            @endif



                                                        </h4>

                                                        <div>
                                                            @if ($currentLocale=="fr")
                                                            <span>{{$publication['sous_titre_fr']}}</span>
                                                            @endif

                                                            @if ($currentLocale=="en")
                                                            <span>{{$publication['sous_titre_en']}}</span>
                                                            @endif
                                                        </div>
                                                        <a href="{{route('publication.detail',$publication['id'])}}">
                                                            @lang("public.read more")<i class="fas fa-angle-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                @endforeach
                              </div>
                            </div>
                          @endforeach
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                          <span class="glyphicon glyphicon-chevron-left"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                          <span class="glyphicon glyphicon-chevron-right"></span>
                          <span class="sr-only">Next</span>
                        </a>
                     </div>



                </div>
            </div>
        @endif
        @endif




    </div>
</div>
@include("contact")
@endsection

@section("plaafricalaw-title")
    Plaafricalaw | @lang("public.home")
@endsection

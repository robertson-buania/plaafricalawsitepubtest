@extends('buania')
@section('plaafricalaw-body')

<div class="wrapper">


    <div class="banner-sm">
        <img src="../assets/images/img3.jpg " alt="">
    </div>
    <div class="block_3" style="padding: 50px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="text-star">
                        <h1 class="title">@lang('public.our') @lang('public.team')</h1>

                    </div>
                </div>

            </div>


            <div class="block_3" style="padding: 50px 0;">
                <div class="container">
                    <div class="row g-4 g-lg-5">
                        <div class="col-lg-8 col-xl-9 col-md-8 order-2 order-lg-1 order-md-1">
                            <div class="text-star">
                                <div class="block-about">
                                    <div class="row">
                                        <div class="col-lg-9 col-md-8">
                                            <h1 style="font-size: 35px;">{{$avocat['prenom']}} {{$avocat['nom']}}</h1>
                                        </div>

                                    </div>
                                    <h6 class="mb-3 bureau"><i class="fas fa-map-marker"></i>
                                        @if (count($avocat['bureaux'])>0)
                                        <a id="btnverBureau">
                                            @if ($currentLocale=="fr")
                                            {{$avocat['bureaux'][0]['pays_fr']}}
                                            @endif

                                            @if ($currentLocale=="en")
                                            {{$avocat['bureaux'][0]['pays_en']}}
                                            @endif

                                        </a>
                                        @endif

                                    </h6>


                                    <div class="card">
                                        <div class="card-body">


                                          <!-- Bordered Tabs Justified -->
                                          <ul class="nav nav-tabs nav-tabs-bordered d-flex" id="borderedTabJustified" role="tablist">
                                            <li class="nav-item flex-fill" role="presentation">
                                              <button class="nav-link w-100 active" id="home-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-home" type="button" role="tab" aria-controls="home" aria-selected="true">
                                                <h2 >@lang("public.biography")</h2>
                                            </button>
                                            </li>

                                            <li class="nav-item flex-fill" role="presentation">
                                              <button class="nav-link w-100" id="contact-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-contact" type="button" role="tab" aria-controls="contact" aria-selected="false">
                                                <h2 >Publications</h2>
                                              </button>
                                            </li>
                                          </ul>
                                          <div class="tab-content pt-2" id="borderedTabJustifiedContent">
                                            <div class="tab-pane fade show active" id="bordered-justified-home" role="tabpanel" aria-labelledby="home-tab">
                                                <div class="container">

                                                    @if ($currentLocale=="fr")

                                                    <iframe frameborder="0" scrolling="no" onload="resizeIframe(this)" style=" top: 0;left: 0;width: 100%;height: 100%;" src="{{$url_fichier_team.''.$avocat["description_fr"]}}" height="100%" ; width="100%">

                                                    </iframe>
                                                    <div>
                                                        <label for="iframe-height">Défilement:</label>
                                                        <input type="range" id="iframe-height" min="500" max="5000" step="10" value="500" onchange="adjustIframeHeight(this.value)">

                                                    </div>
                                                    @endif

                                                    @if ($currentLocale=="en")

                                                    <iframe id="my-iframe" frameborder="0" scrolling="no" onload="resizeIframe(this)" style=" top: 0;left: 0;width: 100%;height: 100%;" src="{{$url_fichier_team.''.$avocat["description_en"]}}" height="100%" ; width="100%">

                                                    </iframe>
                                                    <div>
                                                        <label for="iframe-height">Défilement:</label>
                                                        <input type="range" id="iframe-height" min="500" max="5000" step="10" value="500" onchange="adjustIframeHeight(this.value)">

                                                    </div>

                                                    @endif
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="bordered-justified-contact" role="tabpanel" aria-labelledby="contact-tab">
                                                <div class="block_9" style="background: #fff;">
                                                    <div class="container-fluid px-lg-5">
                                                        <div class="row g-4">
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="text-star">
                                                                            <h1> </h1>
                                                                            <h3>{{count($avocat['publications'])}} Publication(s) </h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row g-lg-1 pub-container aos-init "    style="position: relative; height: 494px;">

                                                                    @foreach ($avocat['publications'] as $publication )
                                                                    <div class="col-lg-6 col-md-6 portfolio-item 9" style="position: absolute; left: 0px; top: 0px;">
                                                                        <div class="card">
                                                                            <div class="category">
                                                                                @if ($currentLocale=="fr")
                                                                                            {{$publication['titre_fr']}}
                                                                                            @endif

                                                                                            @if ($currentLocale=="en")
                                                                                            {{$publication['titre_en']}}
                                                                                            @endif
                                                                            </div>
                                                                            <div class="card-img">
                                                                                <div class="content-img">
                                                                                    <img src="{{$url_fichier_pub.''.$publication["photo"]}}" alt="img">
                                                                                </div>
                                                                                <div class="date">
                                                                                    <span class="text-white" >{{ \Carbon\Carbon::parse($publication['created_at'])->format('d M') }}</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="card-body">

                                                                                <h2>
                                                                                     @if ($currentLocale=="fr")
                                                                                    <span>{{$publication['titre_fr']}}</span>
                                                                                    @endif

                                                                                    @if ($currentLocale=="en")
                                                                                    <span>{{$publication['titre_en']}}</span>
                                                                                    @endif
                                                                                </h2>

                                                                                <p>
                                                                                    @if ($currentLocale=="fr")
                                                                                            <span>{{$publication['sous_titre_fr']}}</span>
                                                                                            @endif

                                                                                            @if ($currentLocale=="en")
                                                                                            <span>{{$publication['sous_titre_en']}}</span>
                                                                                            @endif
                                                                                </p>
                                                                                <a href="{{route('publication.detail',$publication['id'])}}">
                                                                                    @lang("public.read more")<i class="fas fa-angle-right"></i>
                                                                                </a>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    @endforeach

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                          </div><!-- End Bordered Tabs Justified -->

                                        </div>
                                      </div>


                                </div>

                            </div>

                        </div>
                        <div class="col-lg-4 col-xl-3 col-md-4 order-1 order-lg-2 order-md-2">
                            <div class="card" style="margin-top: 0;">
                                <style>
                                    .card:hover {
                                        transform: none !important;
                                    }

                                    .block_3 .card .text-center::before {
                                        transform: scale(0.5);
                                        bottom: 0 !important;
                                    }

                                    .block_3 .card .text-center::after {
                                        transform: scale(0.5);
                                        bottom: 10px !important;
                                    }

                                </style>
                                <div class="card-img card-md temBox">
                                    <img src="{{$url_fichier_team.''.$avocat['photo']}}" alt="">
                                </div>
                                <div class="text-center text-center-md">
                                    <h5>{{$avocat['prenom']}} {{$avocat['nom']}}</h5>
                                    <span>

                                        @if ($currentLocale=="fr")
                                        @foreach ($avocat['fonctions'] as $fonction)
                                        <span class="d-block">{{$fonction['nom_fr']}}</span>
                                        @endforeach
                                        @endif

                                        @if ($currentLocale=="en")
                                        @foreach ($avocat['fonctions'] as $fonction)
                                        <span class="d-block">{{$fonction['nom_en']}}</span>
                                        @endforeach
                                        @endif

                                    </span>
                                    @if ($avocat['cv'])
                                    <a href="{{route('avocat.cv',['pdfUrl' =>$avocat['cv']])}}" class="btn-download"><i class="fas fa-download"></i> @lang("public.downlaod") CV</a>
                                    @endif

                                </div>
                            </div>
                            <div class="card card-exp block-hidden2">
                                <h4>Plus d'Avocats</h4>
                                <div class="link-category">
                                    @foreach ($avocats as $avoc )
                                    <a href="{{route('team.detail',$avoc['id'])}}" class="link-avocat">
                                        {{$avoc['prenom']}} {{$avoc['nom']}}
                                        <div class="avatar">
                                            <img src="{{$url_fichier_team.''.$avoc['photo']}}" alt="">
                                        </div>
                                    </a>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    @endsection


    @section("javascript-swiper")
    <script>
        function adjustIframeHeight(height) {
            // Sélectionnez l'iframe en utilisant un sélecteur CSS approprié
            var iframe = document.querySelector("#my-iframe");
            iframe.style.height = height + "px";
        }

    </script>

    @endsection
    @section("plaafricalaw-title")
    Plaafricalaw | @lang("public.team")
    @endsection


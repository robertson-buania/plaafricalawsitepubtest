@extends('buania')
@section('plaafricalaw-body')

<div class="wrapper">


    <div class="banner-sm">
        <img src="../assets/images/img3.jpg" alt="">
    </div>
    <div class="block_10 block-presence">
        <div class="container mb-3 pb-3">
            <div class="row g-lg-5 g-3">
                <div class="col-lg-3 order-2">
                    <div class="list-group card-exp" id="list-tab" role="tablist">
                        <h4 class="mb-3">@lang("public.ours") @lang("public.offices") </h4>

                        @foreach ($bureaux as $bure)
                        <a class="list-group-item list-group-item-action show active scrollTop"
                        id="list-home-list"   href="{{route('presence.detail',$bure['id'])}}"
                          >


                            @if ($currentLocale=="fr")
                                             {{$bure['pays_fr']}}
                                            @endif

                                            @if ($currentLocale=="en")
                                                {{$bure['pays_en']}}
                                            @endif

                        </a>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-9 order-1">
                    <div class="tab-content" id="nav-tabContent">
                        <!-- SECTEURS -->
                        <div class=" "  aria-labelledby="list-home-list">
                            <div class="text-star">
                                <div class="row">
                                    <div class="col-lg-6 col-detail-presence">
                                        <h1>
                                            @if ($currentLocale=="fr")
                                             {{$bureau['pays_fr']}}
                                            @endif

                                            @if ($currentLocale=="en")
                                                {{$bureau['pays_en']}}
                                            @endif

                                        </h1>
                                        <h2> {{$bureau['nom']}}</h2>
                                        <p><span><i class="fas fa-envelope"></i> :</span> {{$bureau['email']}}</p>
                                        <p><span><i class="fas fa-phone"></i> :</span> {{$bureau['telephone']}}</p>
                                        <p><span><i class="fas fa-map-marker"></i> :</span>

                                             @if ($currentLocale=="fr")
                                             {{$bureau['adresse_physique_fr']}}
                                                @endif

                                                @if ($currentLocale=="en")
                                                {{$bureau['adresse_physique_en']}}
                                                @endif

                                        </p>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="card card-picture">
                                            <img src="{{$url_fichier_bureau.''.$bureau["photo"]}}" alt="">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <!--FIN SECTEURS -->
            </div>
        </div>
    </div>
</div>
@endsection

@section("plaafricalaw-title")
    Plaafricalaw | @lang("public.desk")
@endsection

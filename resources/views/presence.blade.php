@extends('buania')
@section('plaafricalaw-body')

<div class="wrapper">


    <div class="banner-sm">
        <img src="../assets/images/img3.jpg" alt="">
    </div>
    <div class="block_8">
        <div class="container">
            <div class="row g-3 justify-content-center g-lg-4">
                @foreach ($bureaux as $bureau )
                <div class="col-lg-4 col-md-6">
                    <a href="{{route('presence.detail',$bureau['id'])}}">
                        <div class="card card-location">
                            <div class="card-img">
                                <h5 class="text-white">
                                    <i class="fas fa-map-marker"></i>
                                    @if ($currentLocale=="fr")
                                    {{$bureau['pays_fr']}}
                                   @endif

                                   @if ($currentLocale=="en")
                                       {{$bureau['pays_en']}}
                                   @endif
                                </h5>
                                <img src="{{$url_fichier_bureau.''.$bureau["photo"]}}" alt="">
                            </div>
                            <div class="card-body">
                                <h6> {{$bureau['nom']}}</h6>
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
                        </div>
                    </a>
                </div>
                @endforeach


            </div>
        </div>
    </div>
</div>
@endsection

@section("plaafricalaw-title")
    Plaafricalaw | @lang("public.desk")
@endsection

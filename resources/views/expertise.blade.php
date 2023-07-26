@extends('buania')
@section('plaafricalaw-body')

<div class="wrapper">


    <div class="banner-sm">
        <img src="../assets/images/img3.jpg" alt="">
    </div>
    <div class="block_5">
        <div class="container">


            <div class="d-flex experti justify-content-between align-items-center  " >
                <div class="col-lg-6 card-buania   expertise-1">

                    <div class="text-star ">
                        <h1 class="">@lang("public.industry")</h1>
                    </div>

                    <div class="row g-3 g-lg-4  color-1">

                        @foreach ($expertisesSecteuractivite as $activiteIndice =>$activite )

                            <div class="col-lg-6 col-md-6 col-6">
                                    <a href="{{route('expertise.detail',$activite['id'])}}">
                                        <div class="card">
                                            <div class="num">{{$activiteIndice+1}}</div>
                                            <img src="{{$url_fichier_expertise.''.$activite["photo"]}}" alt="">
                                            <div class="content-text">
                                                <h5 class="mb-0">
                                                    @if ($currentLocale=="fr")
                                                    {{$activite['titre_fr']}}
                                                @endif

                                                @if ($currentLocale=="en")
                                                    {{$activite['titre_en']}}
                                                @endif
                                                </h5>
                                                <span class="icon">
                                                    <i class="fas fa-angle-right"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                            </div>

                         @endforeach

                    </div>
                </div>
                <div class="col-lg-6 card-buania  expertise-1">
                    <div class="text-star">
                        <h1>@lang('public.practise areas')</h1>
                    </div>

                    <div class="row g-5 g-lg-5 color-1 ">

                        @foreach ($expertisesDomainecompetence as $competenceIndice =>$competence )
                            <div class="col-lg-6 col-md-6 col-6">
                                <a href="{{route('expertise.detail',$competence['id'])}}">
                                    <div class="card">
                                        <div class="num">{{$competenceIndice+1}}</div>
                                        <img src="{{$url_fichier_expertise.''.$competence["photo"]}}" alt="">
                                        <div class="content-text">
                                            <h5 class="mb-0">
                                                @if ($currentLocale=="fr")
                                                {{$competence['titre_fr']}}
                                            @endif

                                            @if ($currentLocale=="en")
                                                {{$competence['titre_en']}}
                                            @endif
                                            </h5>
                                            <span class="icon">
                                                <i class="fas fa-angle-right"></i>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@section("plaafricalaw-title")
    Plaafricalaw | Expertise
@endsection

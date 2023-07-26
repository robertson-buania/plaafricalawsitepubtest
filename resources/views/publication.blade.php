@extends('buania')
@section('plaafricalaw-body')

<div class="wrapper">


    <div class="banner-sm">
        <img src="../assets/images/img3.jpg" alt="">
    </div>

    <div class="block_9" style="background: #fff;">
        <div class="container-fluid px-lg-5">
            <div class="row g-4">
                <div class="col-lg-12 col-md-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-star">
                                <h2 class="mb-1">@lang("public.ours") </h2>
                                <h1> </h1>
                                <h1>{{count($publications)}} Publication(s) </h1>
                            </div>
                        </div>
                    </div>
                    <div class="row g-lg-1 pub-container aos-init "    style="position: relative; height: 494px;">

                        @foreach ($publications as $publication )
                        <div class="col-lg-4 col-md-4 portfolio-item 9" style="position: absolute; left: 0px; top: 0px;">
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
                                        <span>{{ \Carbon\Carbon::parse($publication['created_at'])->format('d M') }}</span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="{{route('publication.detail',$publication['id'])}}" style="margin-top:0">
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
                {{-- <div class="col-lg-3 order-2">

                    <div class="card-exp">
                        <h3>Afficher par :</h3>
                        <hr>
                        <h4 class="">Catégories :</h4>
                        <div class="link-category">
                            <ul id="portfolio-flters">
                                <li data-filter="*" class="filter-active">Tous</li>
                                <li data-filter=".1">
                                    droit des femmes <span class="num">(0)</span>
                                </li>
                                <li data-filter=".2">
                                    droits humains <span class="num">(0)</span>
                                </li>
                                <li data-filter=".9">
                                    droits miniers <span class="num">(1)</span>
                                </li>
                                <li data-filter=".10">
                                    Toutes <span class="num">(0)</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div> --}}
            </div>
        </div>
    </div>
</div>
</div>
@endsection

@section("plaafricalaw-title")
    Plaafricalaw | Publications
@endsection

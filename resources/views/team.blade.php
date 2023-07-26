@extends('buania')
@section('plaafricalaw-body')

<div class="wrapper">

    <div class="banner-sm">
        <img src="../assets/images/img6.webp" alt="">
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


            <div class="row">
                <div class="col-lg-12">


                    <div class="row portfolio-container " data-aos="fade-up" data-aos-delay="1">
                        <div class="text-start"></div>
                        <div class="row">
                            @foreach ($teams as $avocat )
                            <div class="col-lg-4 buania portfolio-item filter-managingpartner">
                                <div class="item">
                                    <div class="col-lg-12 ">
                                        <a href="{{route('team.detail',$avocat['id'])}}">
                                            <div class="card card-team">
                                                <div class="">
                                                    <img src="{{$url_fichier_team.''.$avocat['photo']}}" alt="">
                                                </div>
                                                <div class="text-center">
                                                    <h5>{{$avocat['prenom']}} {{$avocat['nom']}}</h5>
                                                    @if ($currentLocale=="fr")
                                                    <span class="d-block" >{{$avocat['fonctions'][0]['nom_fr']}}</span>
                                                        {{-- @foreach ($avocat['fonctions'] as $fonction)
                                                        <span class="d-block" >{{$fonction['nom_fr']}}</span>
                                                        @endforeach --}}
                                                    @endif

                                                    @if ($currentLocale=="en")
                                                    <span class="d-block" >{{$avocat['fonctions'][0]['nom_en']}}</span>
                                                        {{-- @foreach ($avocat['fonctions'] as $fonction)
                                                        <span class="d-block" >{{$fonction['nom_en']}}</span>
                                                        @endforeach --}}
                                                    @endif



                                                    <span class="readMore btn">@lang("public.read more")</span>
                                                </div>
                                            </div>
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
@endsection
@section("plaafricalaw-title")
    Plaafricalaw | @lang("public.team")
@endsection

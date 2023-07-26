@extends('buania')
@section('plaafricalaw-body')

<div class="wrapper">


    <div class="banner-sm">
        <img src="../assets/images/img3.jpg" alt="">
    </div>
    <div class="block_10">
        <div class="container">
            <div class="row g-lg-5 g-3">
                <div class="col-lg-3 order-2">
                    <div class="card card-exp" style="padding-bottom: 60px">
                        <h4>@lang("public.publication") @lang("public.recente")</h4>
                        <div class="link-publ">

                            @foreach ($publications as $pub )
                            <a href="{{route('publication.detail',$pub['id'])}}">
                                <h6>
                                    @if ($currentLocale=="fr")
                                    <span >{{$pub['titre_fr']}}</span>
                                @endif

                                 @if ($currentLocale=="en")
                                     <span >{{$pub['titre_en']}}</span>
                                @endif

                                </h6>
                                <span class="sm-date">
                                    {{\Carbon\Carbon::parse($pub['updated_at'])->format('d M y')}}
                                </span>
                            </a>
                            @endforeach


                            <div class="block_btn d-flex w-100">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 order-1">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <a href="{{route('team.detail',$publication["avocat"]['id'])}}">
                                <h2>
                                    <div class="avatar">
                                        <img src="{{$url_fichier_avocats.''.$publication["avocat"]['photo']}}" alt="">
                                    </div>
                                    {{$publication["avocat"]['prenom']}} {{$publication["avocat"]['nom']}}
                                </h2>
                            </a>
                            <h1>@if ($currentLocale=="fr")
                                {{$publication['titre_fr']}}
                               @endif

                               @if ($currentLocale=="en")
                                {{$publication['titre_en']}}
                               @endif
                            </h1>
                            <div class=""><span class="date">
                                {{ \Carbon\Carbon::parse($publication['updated_at'])->format('d M y') }}

                            </span>
                            </div>

                            @if ($currentLocale=="fr")
                            <a href="{{route('publication.pdf',['pdfUrl' =>$publication['pdf_fr']])}}"  class="btn btn-download"><i class="fas fa-download"></i> Télécharger en PDF</a>

                               @endif

                               @if ($currentLocale=="en")
                               <a href="{{route('publication.pdf',['pdfUrl' =>$publication['pdf_en']])}}"  class="btn btn-download"><i class="fas fa-download"></i> Télécharger en PDF</a>

                               @endif


                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="card card-picture">
                                <img src="{{$url_fichier_publication.''.$publication["photo"]}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="text-start">
                        <hr>

                    </div>

                    <div class="container">
                        @if ($currentLocale=="fr")
                            @if($publication["contenu_fr"])
                            <iframe id="my-iframe" frameborder="0" scrolling="no" onload="resizeIframe(this)"
                                style=" top: 0;left: 0;width: 100%;height: 100%;" src="{{$url_fichier_publication.''.$publication["contenu_fr"]}}"
                                height= "100%" width="100%" >

                             </iframe>
                             <div>
                                <label for="iframe-height">Défilement:</label>
                                <input type="range" id="iframe-height" min="500" max="5000" step="10" value="500" onchange="adjustIframeHeight(this.value)">

                            </div>
                            @else

                        @endif

                       @endif

                       @if ($currentLocale=="en")

                         @if ($publication["contenu_en"])
                            <iframe id="my-iframe"   frameborder="0" scrolling="no" onload="resizeIframe(this)"
                                style=" top: 0;left: 0;width: 100%;height: 100%;" src="{{$url_fichier_publication.''.$publication["contenu_en"]}}"
                                height= "100%" width="100%" >

                            </iframe>
                            <div>
                                <label for="iframe-height">Défilement:</label>
                                <input type="range" id="iframe-height" min="500" max="5000" step="10" value="500" onchange="adjustIframeHeight(this.value)">

                            </div>
                         @endif
                       @endif
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
    Plaafricalaw | Publication -Details
@endsection

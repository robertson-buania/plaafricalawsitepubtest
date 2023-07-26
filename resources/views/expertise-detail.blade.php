@extends('buania')

@section('plaafricalaw-body')

<div class="wrapper">


    <div class="banner-sm">
        <img src="../assets/images/img3.jpg " alt="">
    </div>
    <div class="block_10">
        <div class="container">
            <div class="row g-lg-5 g-3">
                <div class="col-lg-3 order-2">
                    <div class="list-group card-exp" id="list-tab" role="tablist">
                        <h4 class="mb-3">
                            @if ($expertise['category']==1)
                                @lang("public.industry")
                            @endif

                            @if ($expertise['category']==2)
                                @lang("public.practise areas")
                            @endif

                        </h4>

                        @foreach ($expertises as $expert )
                        <a class="list-group-item list-group-item-action  scrollTop"
                         id="list-home-list" data-bs-toggle="list"
                         href="{{route('expertise.detail',$expert['id'])}}" >
                            @if ($currentLocale=="fr")
                                            {{$expert['titre_fr']}}
                                        @endif

                                        @if ($currentLocale=="en")
                                            {{$expert['titre_en']}}
                                        @endif
                        </a>
                        @endforeach



                    </div>
                </div>
                <div class="col-lg-9 order-1">
                    <div class="tab-content" id="nav-tabContent">

                        <div class="tab-pane fade  show active " id="Corporate" role="tabpanel" aria-labelledby="list-home-list">
                            <div class="text-star">
                                <div class="row ">
                                    <div class="col-lg-6 mt-4 ">
                                        <h1 class="mt-5">
                                            @if ($currentLocale=="fr")
                                            {{$expertise['titre_fr']}}
                                        @endif

                                        @if ($currentLocale=="en")
                                            {{$expertise['titre_en']}}
                                        @endif
                                        </h1>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="card card-picture">
                                            <img src="{{$url_fichier_expertise.''.$expertise["photo"]}}" alt="">
                                        </div>
                                    </div>

                                </div>
                                <hr>
                            </div>
                            <div  class="container" style=" height:max-content !important; ">


                                {{-- <iframe   frameborder="0" scrolling="no" onload="resizeIframe(this)"
                                  style=" top: 0;left: 0;width: 100%;height: 100%;" src="../Prénom Nom.html"
                                  height= "100%"; width="100%" >

                                </iframe> --}}
                                @if ($currentLocale=="fr")

                                 <iframe id="my-iframe" frameborder="0" scrolling="no" onload="resizeIframe(this)"
                                        style=" top: 0;left: 0;width: 100%;height: 100%;" src="{{$url_fichier_expertise.''.$expertise["contenu_fr"]}}"
                                        height= "100%"; width="100%" >

                                </iframe>
                                @endif

                                @if ($currentLocale=="en")

                                  <iframe id="my-iframe"  frameborder="0" scrolling="no" onload="resizeIframe(this)"
                                        style=" top: 0;left: 0;width: 100%;height: 100%;" src="{{$url_fichier_expertise.''.$expertise["contenu_en"]}}"
                                        height= "100%"; width="100%" >

                                </iframe>
                                @endif

                                <div>
                                    <label for="iframe-height">Défilement:</label>
                                    <input type="range" id="iframe-height" min="500" max="5000" step="10" value="500" onchange="adjustIframeHeight(this.value)">

                                </div>
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
    Plaafricalaw | Expertise -- Details
@endsection

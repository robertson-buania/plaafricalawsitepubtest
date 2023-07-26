<header class="fixed-top ">
    <div class="topbar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-8 col-md-4">
                    <div class="d-flex net-work"></div>
                </div>
                <div class="col-lg-8 col-4 col-md-8">
                    <div class="d-flex contact-info justify-content-end">

                        <p class="mb-0">
                            <i class="fas fa-envelope"></i>
                            <span>
                                info@plaafricalaw.com</span>
                        </p>

                        <p class="mb-0">
                            <i class="fas fa-phone"></i>
                            <span>+243 82 423 3125</span>
                        </p>

                        <p class="mb-0 lien">
                            @if ($currentLocale=="en")
                            <a rel="alternate" hreflang="en" href="{{route('buania.lang','en')}}" class="active">
                                EN
                            </a>
                            @else
                            <a rel="alternate" hreflang="en" href="{{route('buania.lang','en')}}" class="">
                                EN
                            </a>
                            @endif

                        </p>
                        <p class="mb-0 lien">

                            @if ($currentLocale=="fr")
                            <a rel="alternate" hreflang="fr" href="{{route('buania.lang','fr')}}" class="active">
                                FR
                            </a>
                            @else
                            <a rel="alternate" hreflang="fr" href="{{route('buania.lang','fr')}}" class="">
                                FR
                            </a>
                            @endif

                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg">
        <div class="menu-toggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('buania.home')}}">
                <img src="{{url('assets/images/PLA%20logo.png')}}" alt="img">
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link  me-4 {{ request()->routeIs('buania.home') ? 'active' : '' }}  " aria-current="page" href="{{route('buania.home')}}">@lang('public.home')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  me-4 {{ request()->routeIs('buania.about') ? 'active' : '' }}" href="{{route('buania.about')}}">
                            @lang('public.about us')
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  me-4 {{ request()->routeIs('buania.expertise') ? 'active' : '' }}" href="{{route('buania.expertise')}}">@lang('public.expertise')</a>
                        <div class="subMenu">
                            <ul>
                                <li class="list-item">
                                    <a class="list-link">@lang('public.industry')</a>
                                    <div class="dropMenu dropMenu-lg">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-12">

                                                    <ul>
                                                        @foreach ($accueil_data['expertisesSecteuractivite'] as $activite )

                                                        <li>
                                                            <a href="{{route('expertise.detail',$activite['id'])}}">
                                                                @if ($currentLocale=="fr")
                                                                {{$activite['titre_fr']}}
                                                                @endif

                                                                @if ($currentLocale=="en")
                                                                {{$activite['titre_en']}}
                                                                @endif
                                                            </a>
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </li>
                                <li class="list-item">
                                    <a class="list-link {{ request()->routeIs('buania.expertise') ? 'active' : '' }}">@lang('public.practise areas')</a>
                                    <div class="dropMenu dropMenu-lg">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                   @if ($accueil_data['expertisesDomainecompetence'])
                                                    <ul>
                                                        @foreach ($accueil_data['expertisesDomainecompetence'] as $competence )

                                                        <li>
                                                            <a href="{{route('expertise.detail',$competence['id'])}}">
                                                                @if ($currentLocale=="fr")
                                                                {{$competence['titre_fr']}}
                                                                @endif

                                                                @if ($currentLocale=="en")
                                                                {{$competence['titre_en']}}
                                                                @endif
                                                            </a>
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                    @endif

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link  me-4 {{ request()->routeIs('buania.team') ? 'active' : '' }}" href="{{route('buania.team')}}">@lang('public.team')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  me-4 {{ request()->routeIs('buania.presence') ? 'active' : '' }}" href="{{route('buania.presence')}}">@lang('public.presence')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('buania.publication') ? 'active' : '' }} " href="{{route('buania.publication')}}">@lang('public.publication')</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>


@extends('buania')
@section('plaafricalaw-body')

<div class="wrapper">
    <div class="banner-sm">
        <img src="../assets/images/img3.jpg" alt="">
    </div>
    <div class="about about-sm">
        <div class="container">
            <div class="row g-3 g-sm-5 g-lg-5">
                <div class="col-lg-6 col-sm-6 ">
                    <h2>@lang('public.about us')</h2>
                    <h1>PLA Law Firm</h1>

                    <div class='row'>
                        <div class="col-sm-12">
                            <p>
                                @lang('public.about-p1')

                            </p>
                            <p>
                                @lang('public.about-p2')
                            </p>
                            <p>
                                @lang('public.about-p3')
                            </p>
                            <a href="#" class="btn text-with me-5 mb-5" data-bs-toggle="modal" data-bs-target="#modal-read-more"
                                class="read"  > @lang('public.read more')</a>

                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 d-flex justify-content-center align-items-center ">

                    <div class="temBox">
                        <div class=" card-buania">
                            <img src="../storage/about/webpconverter/DSC_7787.webp" alt="img">
                            <div class="block-badge">
                                <span>10</span>
                                <span>@lang('public.years')</span>
                                <span>Experiences</span>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div class="modal fade" id="modal-read-more" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <h3>
                                @lang('public.about us')
                            </h3>
                            <div class="content-about">
                                <h1>PLA Law Firm</h1>

                                <p>
                                    @lang('public.about-p1')

                                </p>
                                <p>
                                    @lang('public.about-p2')
                                </p>
                                <p>
                                    @lang('public.about-p3')
                                </p>
                                <p>
                                    @lang('public.about-p4')

                                </p>
                                <p>
                                    @lang('public.about-p4')
                                </p>

                                <ul  class="list-group">
                                    <li style="font-size: 0.9rem !important"  class="list-group-item">
                                        <p>
                                            @lang('public.about-p5')
                                        </p>
                                    </li>
                                    <li style="font-size: 0.9rem !important" class="list-group-item">
                                        <p>
                                            @lang('public.about-p6')
                                        </p>
                                    </li>
                                    <li style="font-size: 0.9rem !important" class="list-group-item">
                                        <p>
                                            @lang('public.about-p6')
                                        </p>
                                    </li>
                                    <li style="font-size: 0.9rem !important" class="list-group-item">
                                        <p>
                                            @lang('public.about-p7')
                                        </p>
                                    </li>
                                    <li style="font-size: 0.9rem !important" class="list-group-item">
                                        <p>
                                            @lang('public.about-p8')
                                        </p>
                                    </li>
                                    <li style="font-size: 0.9rem !important" class="list-group-item">
                                        <p>
                                            @lang('public.about-p9')
                                        </p>
                                    </li>
                                    <li style="font-size: 0.9rem !important" class="list-group-item">
                                        <p>
                                            @lang('public.about-p10')
                                        </p>
                                    </li>
                                    <li style="font-size: 0.9rem !important" class="list-group-item">
                                        <p>
                                            @lang('public.about-p11')
                                        </p>
                                    </li>
                                    <li style="font-size: 0.9rem !important" class="list-group-item">
                                        <p>
                                            @lang('public.about-p12')
                                        </p>
                                    </li>
                                    <li style="font-size: 0.9rem !important" class="list-group-item">
                                        <p>
                                            @lang('public.about-p13')
                                        </p>
                                    </li>
                                    <li style="font-size: 0.9rem !important" class="list-group-item">
                                        <p>
                                            @lang('public.about-p14')
                                        </p>
                                    </li>
                                    <li style="font-size: 0.9rem !important" class="list-group-item">
                                        <p>
                                            @lang('public.about-p15')
                                        </p>
                                    </li>
                                    <li></li>
                                </ul>


                                <p>
                                    @lang('public.about-p16')
                                </p>
                                <p>
                                    @lang('public.about-p17')
                                </p><p>
                                    @lang('public.about-p18')

                                </p>
                                <p>
                                    @lang('public.about-p19')
                                </p>
                                <p>
                                    @lang('public.about-p20')
                                </p>
                                <p>
                                    @lang('public.about-p21')
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

</div>
@endsection
@section("plaafricalaw-title")
    Plaafricalaw | @lang("public.about us")
@endsection

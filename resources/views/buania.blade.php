<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="gCfjgkU7sRfDU9zHnBDQ5HDGUhF4RBViPUnu5VPQ" />

    <title>
        @yield("plaafricalaw-title")
    </title>
    <link rel="shortcut icon" href="{{url('assets/images/PlaLogo.ico')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
    <link rel=" stylesheet" href="{{url('assets/font/css/all.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/select2/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="js/parsley/parsley.css')}}">
    <link href="{{url('js/sweetalert/sweetalert.css')}}" rel="stylesheet">
    <link href="{{url('css/summernote/summernote.css')}}" rel="stylesheet">
    <link href="{{url('assets/css/read-more.css')}}" rel="stylesheet">
    <link href="{{url('assets/css/aos.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
<style>
    #my-iframe {
  /* Définissez une hauteur minimale pour l'iframe */
  min-height: 700px;
}
</style>
    @yield("javascript-swiper")



</head>

<body>


    @include("navbar")

    {{-- @php
        $homepage = file_get_contents('http://www.buania.net/');
echo $homepage;
    @endphp --}}
    @yield("plaafricalaw-body")



   @include("footer")
    <div class="bottombar">
        <div class="text-center">
            <p class="mb-0" style="opacity: .5;">Copyright © Pathy Liongo & Associates 2023</p>
            <p class="mb-0" style="font-size: 14px;">
                <small>Designed By
                    <a href="https://www.buania.net/" target="_blank">Buania</a>
                </small>
            </p>
        </div>
    </div>
    <script src="{{url('assets/js/app.js')}}"></script>
    <script src="{{url('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{url('assets/js/select2/select2.full.min.js')}}"></script>

    <script src="{{url('js/sweetalert/sweetalert.min.js')}}"></script>
    <script src="{{url('js/parsley/js/parsley.js')}}"></script>
    <script src="{{url('js/parsley/i18n/fr.js')}}"></script>

    <script src="{{url('js/summernote/summernote.min.js')}}"></script>

    <script src="{{url('assets/js/aos.js')}}"></script>
    <script src="{{url('assets/js/glightbox.min.js')}}"></script>
    <script src="{{url('assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{url('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{url('assets/js/scriptcarousel.js')}}"></script>
    <script async src='https://stackwhats.com/pixel/4958f4367609133da9d63d60b8f3ca'></script>


    <script>


        $(window).scroll(function() {

            if ($(this).scrollTop() > 40) {
                $(".navbar").addClass('bg-white');
                $('.topbar').addClass('active')

            } else {
                $(".navbar").removeClass('bg-white');
                $('.topbar').removeClass('active')
            }
        });
        $(".select2_demo_3").select2({
            placeholder: "Recherche"
            , allowClear: true
        });
        $('.menu-toggle').click(function() {
            $(this).toggleClass('active')
            $('.full-menu').addClass('active')
        })
        $('.close-menu').click(function() {
            $('.menu-toggle').removeClass('active')
            $('.full-menu').removeClass('active')
        })
        $(window).on('load', function() {
            $('.loading').addClass('complete');
        });
        $('.scrollTop').click(function() {
            var getElement = $(this).attr('href');
            if ($(getElement).length) {
                var getOffset = $(getElement).offset().top - $('.navbar').height();
                $('html,body').animate({
                    scrollTop: getOffset
                }, 1000);
            }
            return false;
        })
        $(document).ready(function() {
            $('.summernote').summernote();
            $("#formnewsletter").on("submit", function(e) {
                e.preventDefault();
                // alert('ok');

                // add("#formnewsletter", '#btNewsletter', '../add.newsletter')
            });
        });

        function add(form, idLoad, url) {
            var f = form;

            var u = url;
            $(idLoad).addClass('disabled');
            $.ajax({
                url: u
                , method: "POST"
                , data: $(f).serialize()
                , success: function(data) {
                    $(idLoad).removeClass('disabled');
                    if (!data.reponse) {
                        swal({
                            title: data.msg
                            , icon: 'error'
                        })
                    } else {
                        swal({
                            title: data.msg
                            , icon: 'success'
                        })

                        $(f)[0].reset();
                    }

                }
            });

        }

        $(document).ready(function() {
            $('ul.nav-item > li').click(function(e) {
                e.preventDefault();
                $('ul.nav-item > li').removeClass('active');
                $(this).addClass('active');
            });
        });
    </script>



</body>

</html>


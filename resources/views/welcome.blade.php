<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>{{ __('seo.title') }}</title>
    <meta name="description" content="{{ __('seo.description') }}">
    <meta name="keywords" content="{{ __('seo.keywords') }}">
    <meta name="author" content="Edu Faith Development Team">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ __('seo.title') }}">
    <meta property="og:description" content="{{ __('seo.description') }}">
    <meta property="og:image" content="{{ asset('faith/images/logo_3.png') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="{{ __('seo.title') }}">
    <meta property="twitter:description" content="{{ __('seo.description') }}">
    <meta property="twitter:image" content="{{ asset('faith/images/logo_3.png') }}">

    <!-- Robots -->
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- bootstrap css -->
{{--    <link rel="stylesheet" href="faith/css/bootstrap.min.css">--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    <!-- style css -->
    <link rel="stylesheet" href="faith/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="faith/css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="faith/favicon.png" type="image/gif" />
    <!-- Tweaks for older IEs-->
{{--    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">--}}

    <!--[if lt IE 9]>
<!--    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>-->
<!--    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->
<![endif]-->
    <script>
        @if(\Session::get('message'))
            alert('{!! \Session::get('message') !!}')
        @endif
    </script>
</head>
<!-- body -->
<!-- header -->
<div class="header fixed-top ">

    <div class="container-fluid fixed-top border-bottm pt-2" style="background-color:rgba(46,66,139,255)">
        <div class="row d_flex container mx-auto">
            <div class=" col-md-2 col-sm-3 col logo_section" >
                <div class="full">
                    <div class="center-desk">
                        <div class="logo ">
                            <a href="#" ><img style="width: 100px;"  src="faith/images/logo_3.png" alt="#" /></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-sm-12">
                <nav class="navigation navbar navbar-expand-md navbar-dark ">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarsExample04">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Asosiy</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tarif">Tariflar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about">Biz haqimizda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Bog'lanish</a>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>

            <div class="col-md-2  d_none">
                <ul class="email text_align_right">
                    <li class="nav-item">

                        <a class="-link " href="https://+998911157709" target="_blank">
                            <i class="fa fa-phone d-inline mr-2"></i>998911157709
                        </a>
                    </li>
                    <li class="nav-item">

                        <a class="nav-link d-inline" href="https://t.me/livelongevity" target="_blank">
                            <i class="fa fa-telegram d-inline"></i>
                        </a>
                        <a class="nav-link d-inline" href="https://t.me/livelongevity" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="nav-link d-inline" href="https://t.me/livelongevity" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div>
<!-- end header inner -->
<!-- top -->
<div class="full_bg">
    <div class="slider_main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- carousel code -->
                    <div id="banner1" class="carousel slide">
                        <ol class="carousel-indicators">
                            <li data-target="#banner1" data-slide-to="0" class="active"></li>
                            <li data-target="#banner1" data-slide-to="1"></li>
                            <li data-target="#banner1" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <!-- first slide -->
                            <div class="carousel-item active">
                                <div class="carousel-caption relative">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="dream">
                                                <h1>
                                                    Edu-faith o`quv markazlarni avtomatlashtirish platformasi
                                                </h1>
                                                <a class="read_more text-primary" href="#footer_demo">Demo sinash</a>
                                                <a class="read_more text-primary" href="#contact">Bog'lanish </a>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="dream_img mb-5">
                                                <figure><img class="rounded" src="faith/images/about_4.png" alt="#"/></figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- controls -->
                            <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
                                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end banner -->



    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 text-center">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/MTXvU1aIQ9M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 text-center">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/8Sm1xfvFQWQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>

    </div>

    <!-- guarantee -->
    <div class="guarantee">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage text_align_center">
                        <h2>Biz <span class="blue_light">kafolat beramiz</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div id="ho_co" class="guarantee-box_main">
                        <div class="guarantee-box text_align_center">
                            <i>
                                <img  src="faith/images/computer.png">

                            </i>
                            <h3>MARKETING</h3>
                            <p>Platforma yordamida marketing bo`limini avtomatlashtirishingiz va samaradorligini oshirishingiz, konversiyani o`lchashingiz mumkin</p>
                        </div>
                        <a class="read_more" href="#contact">Bog'lanish</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div id="ho_co" class="guarantee-box_main">
                        <div class="guarantee-box text_align_center">
                            <i>
                                <svg height="90" viewBox="0 0 44 60" width="90" xmlns="http://www.w3.org/2000/svg">
                                    <g id="Page-1" >
                                        <g id="022---SSD"  fill-rule="nonzero">

                                            <img src="faith/images/Graph-PNG-Background.png" alt="">

                                        </g>
                                    </g>
                                </svg>
                            </i>
                            <h3>MOLIYA</h3>
                            <p>Moliya bo`limida barcha to`lovlar, xarajatlar va oylik ish haqi hamda qarzdorliklarning hisob-kitobi avtomatik amalga oshiriladi</p>
                        </div>
                        <a class="read_more" href="#contact">Bog'lanish</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div id="ho_co" class="guarantee-box_main">
                        <div class="guarantee-box text_align_center">
                            <i>
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 512 512" xml:space="preserve" height="80pt"
                                     width="80pt">
                              <g>
                                  <g>
                                      <g>
                                          <img src="faith/images/pngtree-money-clipart-with-sack-png-image_5826043.png" alt="">
                                      </g>
                                  </g>
                              </g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                           </svg>
                            </i>
                            <h3>SOTUV</h3>
                            <p>Platforma yordamida sizga kelib tushayotgan so`rovlarni bir joyga yig`ishingiz, ularga tez va sifatli aloqaga chiqishingiz mumkin</p>
                        </div>
                        <a class="read_more" href="#contact">Bog'lanish</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div id="ho_co" class="guarantee-box_main">
                        <div class="guarantee-box text_align_center">
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" height="80pt" version="1.1" viewBox="-38 0 512 512.00142" width="80pt" fill-rule="nonzero">
                                    <g id="surface1">
                                        <img src="faith/images/11641123626wtxfwk475dm0ifwcipu4aavze8x34vl7s7zwpulacesljax4nqkcihhgrdzk7ywrke0ct4cwdxujyguwvtyyuobas9t8cbp4kn5p.png" alt="">
                                    </g>
                                </svg>
                            </i>
                            <h3>XIZMAT KO'RSATISH</h3>
                            <p>Siz doimiy mijozlaringiz bilan kunlik aloqani yaxshilash, sms-xabarlar yuborish va ko`plab xizmatlar ko`rsatishingiz mumkin.</p>
                        </div>
                        <a class="read_more" href="#contact">Bog'lanish</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end guarantee -->
    <!-- order -->
    <div class="order" id="tarif">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="titlepage text_align_center">
                        <h2>
                            <img src="faith/images/edu_logo_trans.png" alt="" width="200px">
                            <br>
                            <br> <span class="blue_light">Tariflar</span></h2>
                        <p>
                            O'ZINGIZGA MOS TA'RIFNI TANLANG
                        </p>
                    </div>
                </div>
            </div>

            <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Start</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Silver</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Gold</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row">
                <div class="col-md-3">
                    <div id="ho_co" class="order-box_main">
                        <div class="order-box text_align_center">
                            <h3>1 OY UCHUN</h3>
                            <p><span>180.000</span></p>
                            <p class="pt-0 mt-0">SO'M</p>
                            <a href="Javascript:void(0)">CRM tizim</a>
                            <ul class="supp">
                                <li>1-250 o'quvchi</li>
                                <li>SMS servis</li>
                                <li>24/7 online kuzatish</li>
                                <li>Avto oylik hisoblash</li>
                                <li>Oylik grafik</li>
                                <li>Test o'tkazish</li>
                            </ul>
                        </div>
                        <a class="read_more" href="#contact">SOTIB OLISH</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div id="ho_co" class="order-box_main">
                        <div class="order-box text_align_center">
                            <h3>3 OY UCHUN</h3>
                            <p>  <span>480.000</span></p>
                            <p class="pt-0 mt-0">SO'M</p>

                            <a href="Javascript:void(0)">CRM tizim</a>
                            <ul class="supp">
                                <li>1-250 o'quvchi</li>
                                <li>SMS servis</li>
                                <li>24/7 online kuzatish</li>
                                <li>Avto oylik hisoblash</li>
                                <li>Oylik grafik</li>
                                <li>Test o'tkazish</li>
                            </ul>
                        </div>
                        <a class="read_more" href="#contact">SOTIB OLISH</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div id="ho_co" class="order-box_main">
                        <div class="order-box text_align_center">
                            <h3>6 OY UCHUN</h3>
                            <p><span>840.000</span></p>
                            <p class="pt-0 mt-0">SO'M</p>
                            <a href="Javascript:void(0)">CRM tizim </a>
                            <ul class="supp">
                                <li>1-250 o'quvchi</li>
                                <li>SMS servis</li>
                                <li>24/7 online kuzatish</li>
                                <li>Avto oylik hisoblash</li>
                                <li>Oylik grafik</li>
                                <li>Test o'tkazish</li>
                            </ul>
                        </div>
                        <a class="read_more" href="#contact">SOTIB OLISH</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div id="ho_co" class="order-box_main">
                        <div class="order-box text_align_center">
                            <h3>12 OY UCHUN</h3>
                            <p><span>1.600.000</span></p>
                            <p class="pt-0 mt-0">SO'M</p>
                            <a href="Javascript:void(0)">CRM tizim </a>
                            <ul class="supp">
                                <li>1-250 o'quvchi</li>
                                <li>SMS servis</li>
                                <li>24/7 online kuzatish</li>
                                <li>Avto oylik hisoblash</li>
                                <li>Oylik grafik</li>
                                <li>Test o'tkazish</li>
                            </ul>
                        </div>
                        <a class="read_more" href="#contact">SOTIB OLISH</a>
                    </div>
                </div>
            </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="row">
                <div class="col-md-3">
                    <div id="ho_co" class="order-box_main">
                        <div class="order-box text_align_center">
                            <h3>1 OY UCHUN</h3>
                            <p><span>300.000</span></p>
                            <p class="pt-0 mt-0">SO'M</p>
                            <a href="Javascript:void(0)">CRM tizim</a>
                            <ul class="supp">
                                <li>250-500 o'quvchi</li>
                                <li>SMS servis</li>
                                <li>24/7 online kuzatish</li>
                                <li>Avto oylik hisoblash</li>
                                <li>Oylik grafik</li>
                                <li>Test o'tkazish</li>
                            </ul>
                        </div>
                        <a class="read_more" href="#contact">SOTIB OLISH</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div id="ho_co" class="order-box_main">
                        <div class="order-box text_align_center">
                            <h3>3 OY UCHUN</h3>
                            <p>  <span>900.000</span></p>
                            <p class="pt-0 mt-0">SO'M</p>

                            <a href="Javascript:void(0)">CRM tizim</a>
                            <ul class="supp">
                                <li>250-500 o'quvchi</li>
                                <li>SMS servis</li>
                                <li>24/7 online kuzatish</li>
                                <li>Avto oylik hisoblash</li>
                                <li>Oylik grafik</li>
                                <li>Test o'tkazish</li>
                            </ul>
                        </div>
                        <a class="read_more" href="#contact">SOTIB OLISH</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div id="ho_co" class="order-box_main">
                        <div class="order-box text_align_center">
                            <h3>6 OY UCHUN</h3>
                            <p><span>1.600.000</span></p>
                            <p class="pt-0 mt-0">SO'M</p>
                            <a href="Javascript:void(0)">CRM tizim </a>
                            <ul class="supp">
                                <li>250-500 o'quvchi</li>
                                <li>SMS servis</li>
                                <li>24/7 online kuzatish</li>
                                <li>Avto oylik hisoblash</li>
                                <li>Oylik grafik</li>
                                <li>Test o'tkazish</li>
                            </ul>
                        </div>
                        <a class="read_more" href="#contact">SOTIB OLISH</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div id="ho_co" class="order-box_main">
                        <div class="order-box text_align_center">
                            <h3>12 OY UCHUN</h3>
                            <p><span>2.500.000</span></p>
                            <p class="pt-0 mt-0">SO'M</p>
                            <a href="Javascript:void(0)">CRM tizim </a>
                            <ul class="supp">
                                <li>250-500 o'quvchi</li>
                                <li>SMS servis</li>
                                <li>24/7 online kuzatish</li>
                                <li>Avto oylik hisoblash</li>
                                <li>Oylik grafik</li>
                                <li>Test o'tkazish</li>
                            </ul>
                        </div>
                        <a class="read_more" href="#contact">SOTIB OLISH</a>
                    </div>
                </div>
            </div>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class="row">
                <div class="col-md-3">
                    <div id="ho_co" class="order-box_main">
                        <div class="order-box text_align_center">
                            <h3>1 OY UCHUN</h3>
                            <p><span>550.000</span></p>
                            <p class="pt-0 mt-0">SO'M</p>
                            <a href="Javascript:void(0)">CRM tizim</a>
                            <ul class="supp">
                                <li>500-800 o'quvchi</li>
                                <li>SMS servis</li>
                                <li>24/7 online kuzatish</li>
                                <li>Avto oylik hisoblash</li>
                                <li>Oylik grafik</li>
                                <li>Test o'tkazish</li>
                            </ul>
                        </div>
                        <a class="read_more" href="#contact">SOTIB OLISH</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div id="ho_co" class="order-box_main">
                        <div class="order-box text_align_center">
                            <h3>3 OY UCHUN</h3>
                            <p>  <span>1.700.000</span></p>
                            <p class="pt-0 mt-0">SO'M</p>

                            <a href="Javascript:void(0)">CRM tizim</a>
                            <ul class="supp">
                                <li>500-800 o'quvchi</li>
                                <li>SMS servis</li>
                                <li>24/7 online kuzatish</li>
                                <li>Avto oylik hisoblash</li>
                                <li>Oylik grafik</li>
                                <li>Test o'tkazish</li>
                            </ul>
                        </div>
                        <a class="read_more" href="#contact">SOTIB OLISH</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div id="ho_co" class="order-box_main">
                        <div class="order-box text_align_center">
                            <h3>6 OY UCHUN</h3>
                            <p><span>2.900.000</span></p>
                            <p class="pt-0 mt-0">SO'M</p>
                            <a href="Javascript:void(0)">CRM tizim </a>
                            <ul class="supp">
                                <li>500-800 o'quvchi</li>
                                <li>SMS servis</li>
                                <li>24/7 online kuzatish</li>
                                <li>Avto oylik hisoblash</li>
                                <li>Oylik grafik</li>
                                <li>Test o'tkazish</li>
                            </ul>
                        </div>
                        <a class="read_more" href="#contact">SOTIB OLISH</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div id="ho_co" class="order-box_main">
                        <div class="order-box text_align_center">
                            <h3>12 OY UCHUN</h3>
                            <p><span>5.500.000</span></p>
                            <p class="pt-0 mt-0">SO'M</p>
                            <a href="Javascript:void(0)">CRM tizim </a>
                            <ul class="supp">
                                <li>500-800 o'quvchi</li>
                                <li>SMS servis</li>
                                <li>24/7 online kuzatish</li>
                                <li>Avto oylik hisoblash</li>
                                <li>Oylik grafik</li>
                                <li>Test o'tkazish</li>
                            </ul>
                        </div>
                        <a class="read_more" href="#contact">SOTIB OLISH</a>
                    </div>
                </div>
            </div>
                </div>
            </div>




        </div>
    </div>
    <!-- end order -->
    <!-- about -->
    <div class="about" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage text_align_center">
                        <h2>BIZ <span class="blue_light">  HAQIMIZDA</span></h2>
                    </div>
                </div>

                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner bg-transparent">
                        <div class="carousel-item justify-content-center active" style="max-height: 500px">
                            <div class="d-flex justify-content-center">
                                <img src="faith/images/about_1.png" class="d-block h-100" alt="...">
                            </div>
                        </div>
                        <div class="carousel-item justify-content-center" style="max-height: 500px">
                            <div class="d-flex justify-content-center">
                                <img src="faith/images/about_2.png" class="d-block h-100" alt="...">
                            </div>
                        </div>
                        <div class="carousel-item justify-content-center" style="max-height: 500px">
                            <div class="d-flex justify-content-center">
                                <img src="faith/images/about_3.png" class="d-block h-100" alt="...">
                            </div>
                        </div>
                        <div class="carousel-item justify-content-center" style="max-height: 500px">
                            <div class="d-flex justify-content-center">
                                <img src="faith/images/about_4.png" class="d-block h-100" alt="...">
                            </div>
                        </div>
                        <div class="carousel-item justify-content-center" style="max-height: 500px">
                            <div class="d-flex justify-content-center">
                                <img src="faith/images/about_5.png" class="d-block h-100" alt="...">
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
                        <span class="carousel-control-prev-icon p-4 bg-success rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
                        <span class="carousel-control-next-icon  p-4 bg-success rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </button>
                </div>

                <div class="col-md-10 offset-md-1">
                    <div class="about_img text_align_center">
{{--                        <figure><img src="faith/images/about_1.png" alt="#"/></figure>--}}
                        <p class="h3">
                            Biz 2022-yildan boshlab o`z faoliyatimizni boshladik.
                            Ushbu davrda o`quv markazlarni avtomatlashtirish
                            orqali ularning rivojlanishiga o`z hissamizni qo`shdik.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end about -->

    <!-- contact -->
    <div class="contact" id="contact">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="titlepage text_align_center">
                        <h2>ALOQA<span class="blue_light"></span></h2>
                    </div>
                </div>
                <div class="col-md-10 offset-md-1">
                    <form id="request" class="main_form" action="{{ route('message') }}" method="post">
                        <div class="row">
                            @csrf
                            <div class="col-md-12 ">
                                <input class="contactus" placeholder="Ism" type="type" name="name" required>
                            </div>
                            <div class="col-md-12">
                                <input class="contactus" placeholder="Telefon raqam" type="number" name="phone" required>
                            </div>
                            <div class="col-md-12">
                                <input class="contactus" placeholder="Markaz nomi" type="type" name="center" required>
                            </div>
                            <div class="col-md-12">
                                <textarea class="textarea" placeholder="Izoh" type="type" name="comment" required></textarea>
                            </div>
                            <div class="col-md-12">
                                <button class="send_btn mb-3">Ariza Qoldirish</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- contact -->
    <!--  footer -->
    <footer>
        <div class="footer" id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="infoma">
                            <h3>Manzil.</h3>
                            <ul class="conta">
                                <li><i class="fa fa-map-marker" aria-hidden="true"></i>Address : Farg'ona shaxar
                                </li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i>Call : +998331157709</li>
                                <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="Javascript:void(0)"> Email : edu.faith.uz@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="infoma">
                            <h3>Company.</h3>
                            <ul class="menu_footer">
                                <li><a href="#index">Asosiy</a></li>
                                <li><a href="#about">Biz haqimizda </a></li>
                                <li><a href="#contact">Aloqa</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="infoma text_align_left">
                            <h3>Xizmatlar.</h3>
                            <ul class="commodo">
                                <li>CRM tizimlar</li>
                                <li>Automatlashtirish</li>
                                <li>Veb saytlar</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6" id="footer_demo">
                        <div class="infoma text_align_left">
                            <h3>
                                Demo sinash
                            </h3>
                            <ul class="commodo">
                                <li>Demo : <a class="text-light" href="https://demo.faith.uz" target="_blank">demo.faith.uz</a></li>
                                <li>Login : superadmin@gmail.com</li>
                                <li>Parol : 11221122</li>
                                <li>
                                    <a href="https://www.youtube.com/@EduFaith" class="text-light h3" target="_blank">
                                        <i class="fa fa-youtube-play "></i>
                                        Video qo'llanma
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p>© 2022-2023 Huquqlar himoyalangan. <a href="https://abdurahman.uz" target="_blank">Developer</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="faith/js/jquery.min.js"></script>
    <script src="faith/js/bootstrap.bundle.min.js"></script>
    <!-- sidebar -->
    <script src="faith/js/custom.js"></script>
</body>
</html>

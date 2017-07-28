<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <style>
        .navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus, .navbar-default .navbar-nav > li > a.active {
            background: #372e30;
            color: #fff;
        }

        .navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {
            background: #372e30;
            color: #fff;
        }

        body {
            font: 400 15px Lato, sans-serif;
            line-height: 1.8;
            color: #818181;
        }

        h2 {
            font-size: 24px;
            text-transform: uppercase;
            color: #303030;
            font-weight: 600;
            margin-bottom: 30px;
        }

        h4 {
            font-size: 19px;
            line-height: 1.375em;
            color: #303030;
            font-weight: 400;
            margin-bottom: 30px;
        }

        .container-fluid {
            padding: 60px 50px;
        }

        .bg-yellow {
            background-color: #ffcb08;
        }

        .logo-small {
            color: #372e30;
            font-size: 50px;
        }

        .logo {
            color: #372e30;
            font-size: 200px;
        }

        .thumbnail {
            padding: 0 0 15px 0;
            border: none;
            border-radius: 0;
        }

        .thumbnail img {
            width: 100%;
            height: 100%;
            margin-bottom: 10px;
        }

        .item h4 {
            font-size: 19px;
            line-height: 1.375em;
            font-weight: 400;
            font-style: italic;
            margin: 70px 0;
        }

        h3{
            color: #372e30;
        }

        .item span {
            font-style: normal;
        }

        .panel {
            border: 1px solid #372e30;
            border-radius: 0 !important;
            transition: box-shadow 0.5s;
        }

        .panel:hover {
            box-shadow: 5px 0 40px rgba(0, 0, 0, .2);
        }

        .panel-footer .btn:hover {
            border: 1px solid #372e30;
            background-color: #fff !important;
            color: #372e30;
        }

        .panel-heading {
            color: #ffcb08 !important;
            background-color: #372e30 !important;
            border-bottom: 1px solid transparent;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
        }

        .panel-footer {
            background-color: #372e30 !important;
        }

        .panel-footer h3 {
            font-size: 32px;
        }

        .panel-footer h4 {
            color: #aaa;
            font-size: 14px;
        }

        .panel-footer .btn {
            margin: 15px 0;
            background-color: #372e30;
            color: #fff;
        }

        .navbar {
            background-color: #372e30;
            margin-bottom: 0;
            z-index: 9999;
            border: 0;
            font-size: 12px !important;
            line-height: 1.42857143 !important;
            letter-spacing: 4px;
            border-radius: 0;
            font-family: Montserrat, sans-serif;
        }

        .navbar-default .navbar-toggle {
            border-color: transparent;
            color: #ffcb08 !important;
        }



        .slideanim {
            visibility: hidden;
        }

        .slide {
            animation-name: slide;
            -webkit-animation-name: slide;
            animation-duration: 1s;
            -webkit-animation-duration: 1s;
            visibility: visible;
        }

        @keyframes slide {
            0% {
                opacity: 0;
                transform: translateY(70%);
            }
            100% {
                opacity: 1;
                transform: translateY(0%);
            }
        }

        @-webkit-keyframes slide {
            0% {
                opacity: 0;
                -webkit-transform: translateY(70%);
            }
            100% {
                opacity: 1;
                -webkit-transform: translateY(0%);
            }
        }

        @media screen and (max-width: 768px) {
            .col-sm-4 {
                text-align: center;
                margin: 25px 0;
            }

            .btn-lg {
                width: 100%;
                margin-bottom: 35px;
            }
        }

        @media screen and (max-width: 480px) {
            .logo {
                font-size: 150px;
            }
        }

        hr {
            width: 200px;
            display: block;
            height: 1px;
            border: 0;
            background-color: #ffcb08;
        }
    </style>
</head>
<body id="app" data-spy="scroll" data-target=".navbar" data-offset="60">
<nav class="navbar navbar-default navbar-fixed-top" style="margin: 0;">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#" aria-expanded="false">
                <table>
                    <tbody>
                    <tr>
                        <td>
                            <img src="{{asset('resources/logo-yellow.png')}}" class="img-responsive" alt=""
                                 style="width: 24px; height: 24px; margin-right: 12px;">
                        </td>
                        <td>
                            <div style="color: #ffcb08;">
                                Traffic.uz
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#about" class="active" style="color: #ffcb08;">О НАС</a></li>
                <li><a href="#pricing" style="color: #ffcb08;">ТАРИФЫ</a></li>
                <li><a href="#contacts" style="color: #ffcb08;">КОНТАКТЫ</a>
                <li><a href="#" style="color: #ffcb08;">СДЕЛАТЬ ЗАКАЗ</a></li>
                @if(Auth::check())
                    <li><a href="{{ url('/home') }}" style="color: #ffcb08;"><i class="fa fa-home" aria-hidden="true"></i> ГЛАВНАЯ</a></li>
                @else
                    <li><a href="{{ url('/login') }}" style="color: #ffcb08;"><i class="fa fa-sign-in" aria-hidden="true"></i> ВОЙТИ</a></li>
                    <li><a href="{{ url('/register') }}" style="color: #ffcb08;"><i class="fa fa-unlock-alt" aria-hidden="true"></i>
                            ЗАРЕГИСТРИРОВАТЬСЯ</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>

<div class="jumbotron text-center" style="background-color: #372e30; padding: 100px 25px; margin: 0;">
    <img src="{{asset('resources/logo-yellow.png')}}" style="width: 128px; height: 128px;">
    <h1 style="color: #ffcb08; font-weight: bold;">TRAFFIC.UZ</h1>
    <hr>
    <p style="color: #ffcb08;">Самый крупный автопарк!</p>
    <button class="btn" style="color: #372e30; background-color: #ffcb08; font-size: 18px;">
        СДЕЛАТЬ ЗАКАЗ
    </button>
</div>

<div class="container-fluid text-center bg-yellow">
    <div id="about" class="container">
        <h2>8 причин заказывать грузоперевозки в «Траффик»</h2>
        <br>
        <div class="row slideanim">
            <div class="col-sm-3">
                <span class="glyphicon glyphicon-thumbs-up logo-small"></span>
                <h4>Низкие цены</h4>
            </div>
            <div class="col-sm-3">
                <span class="glyphicon glyphicon-dashboard logo-small"></span>
                <h4>Срочная подача машины через 15 минут!</h4>
            </div>
            <div class="col-sm-3">
                <span class="glyphicon glyphicon-calendar logo-small"></span>
                <h4>Работаем 24 часа без выходных</h4>
            </div>
            <div class="col-sm-3">
                <span class="fa fa-handshake-o logo-small"></span>
                <h4>100% материальная ответственность</h4>
            </div>
        </div>
        <br>
        <div class="row slideanim">
            <div class="col-sm-3">
                <span class="fa fa-truck logo-small"></span>
                <h4>Собственный автопарк более 3500 машин!</h4>
            </div>
            <div class="col-sm-3">
                <span class="fa fa-credit-card logo-small"></span>
                <h4>Удобные способы оплаты, рассрочка</h4>
            </div>
            <div class="col-sm-3">
                <span class="fa fa-address-card-o logo-small"></span>
                <h4 style="color:#303030;">Опытные водители и аккуратные грузчики</h4>
            </div>
            <div class="col-sm-3">
                <span class="glyphicon glyphicon-ok-circle logo-small"></span>
                <h4>Высокий уровень сервиса грузоперевозок</h4>
            </div>
        </div>
        <br>
    </div>
</div>

<div class="container-fluid text-center">
    <div class="container" id="pricing">
        <div class="text-center">
            <h2>ТАРИФЫ</h2>
        </div>
        <div class="row slideanim">
            <div class="col-sm-6 col-xs-12">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h3 style="color: #ffcb08;">Внутри города</h3>
                    </div>
                    <div class="panel-body">
                        <h4><strong>Цена за час:</strong> 50000 сум</h4>
                        <h4><strong>Час по умолчанию:</strong> 1 час</h4>
                        <h4><strong>Начальная цена:</strong> 100000 сум</h4>
                        <h4><strong>Плата за обслуживание погрузчика:</strong> 30000 сум</h4>
                        <h4><strong>Скидка:</strong> 15 %</h4>
                    </div>
                    <div class="panel-footer">
                        <button class="btn btn-lg" style="color: #ffcb08;">Заказать</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xs-12">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h3 style="color: #ffcb08;">За городом</h3>
                    </div>
                    <div class="panel-body">
                        <h4><strong>Цена за км:</strong> 3000 сум</h4>
                        <h4><strong>Км по умолчанию:</strong> 50 км</h4>
                        <h4><strong>Начальная цена:</strong> 100000 сум</h4>
                        <h4><strong>Плата за обслуживание погрузчика:</strong> 40000 сум</h4>
                        <h4><strong>Скидка:</strong> 0 %</h4>
                    </div>
                    <div class="panel-footer">
                        <button class="btn btn-lg" style="color: #ffcb08;">Заказать</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="contacts" class="container-fluid text-center bg-yellow">
    <div class="container">
        <div class="row slideanim">
            <h2>Телефоны колл-центра</h2>
            <img src="{{asset('resources/call.png')}}" alt="" style="width: 96px; height: 96px;">
            <h2>+998 (90) 373-73-73</h2>
            <h2>+998 (71) 147-73-73</h2>
            <h3>Звоните в любое время и когда угодно!</h3>
        </div>
    </div>
</div>

<footer class="container-fluid text-center" style="background-color: #372e30;">
    <a href="#" data-scroll-goto="0" data-section="top">
        <button class="btn"
                style="margin-top: -150px; background-color: #372e30; width: 64px; height: 64px; border-radius: 32px; box-shadow: 0 0px 6px #ffcb08;">
            <i class="fa fa-angle-up" style="font-size: 24px; color: #ffcb08;"></i>
        </button>
    </a>

    <div class="container">
        <div class="row slideanim">
            <div class="col-md-12 col-sm-12">
                <ul style="list-style-type: none; margin: 0; padding: 0;">
                    <li style="display: inline; margin: 4px;"><a href="#"><i class="fa fa-facebook" aria-hidden="true"
                                                                             style="font-size: 32px; color: #ffcb08;"></i></a></li>
                    <li style="display: inline; margin: 4px;"><a href="#"><i class="fa fa-twitter" aria-hidden="true"
                                                                             style="font-size: 32px; color: #ffcb08;"></i></a></li>
                    <li style="display: inline; margin: 4px;"><a href="#"><i class="fa fa-rss" aria-hidden="true"
                                                                             style="font-size: 32px; color: #ffcb08;"></i></a></li>
                    <li style="display: inline; margin: 4px;"><a href="#"><i class="fa fa-google-plus"
                                                                             aria-hidden="true"
                                                                             style="font-size: 32px; color: #ffcb08;"></i></a></li>
                    <li style="display: inline; margin: 4px;"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"
                                                                             style="font-size: 32px; color: #ffcb08;"></i></a></li>
                    <li style="display: inline; margin: 4px;"><a href="#"><i class="fa fa-skype" aria-hidden="true"
                                                                             style="font-size: 32px; color: #ffcb08;"></i></a></li>
                    <li style="display: inline; margin: 4px;"><a href="#"><i class="fa fa-vimeo" aria-hidden="true"
                                                                             style="font-size: 32px; color: #ffcb08;"></i></a></li>
                    <li style="display: inline; margin: 4px;"><a href="#"><i class="fa fa-tumblr" aria-hidden="true"
                                                                             style="font-size: 32px; color: #ffcb08;"></i></a></li>
                </ul>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <p style="color: #ffcb08;">IUTLAB © All Rights Reserved</p>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="col-md-12 col-sm-12">
            <h4 style="color: #ffcb08;">Ташкент 2017</h4>
        </div>
    </div>
</footer>

<script src="{{ asset('js/app.js') }}"></script>
<script>
    $(document).ready(function () {
        // Add smooth scrolling to all links in navbar + footer link
        $(".navbar a, footer a[href='#myPage']").on('click', function (event) {
            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 900, function () {

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });

        $(window).scroll(function () {
            $(".slideanim").each(function () {
                var pos = $(this).offset().top;

                var winTop = $(window).scrollTop();
                if (pos < winTop + 600) {
                    $(this).addClass("slide");
                }
            });
        });
    });
</script>
</body>
</html>

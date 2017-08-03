<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Traffic.uz</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
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

        h3 {
            color: #372e30;
        }

        .item span {
            font-style: normal;
        }

        .panel {
            border: 1px solid #372e30;
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

        #main_hr {
            width: 200px;
            display: block;
            height: 1px;
            border: 0;
            background-color: #ffcb08;
        }

        label {
            padding-top: 6px;
        }

        .modal {
            padding-top: 60px;
        }

        .modal-header {
            background-color: #372e30;
            color: #ffcb08;
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
                <li><a href="#makeorder" style="color: #ffcb08;">СДЕЛАТЬ ЗАКАЗ</a></li>
                <li><a href="#about" class="active" style="color: #ffcb08;">О НАС</a></li>
                <li><a href="#pricing" style="color: #ffcb08;">ТАРИФЫ</a></li>
                <li><a href="#contacts" style="color: #ffcb08;">КОНТАКТЫ</a>
                @if(Auth::check())
                    <li><a href="{{ url('/home') }}" style="color: #ffcb08;"><i class="fa fa-home"
                                                                                aria-hidden="true"></i> ГЛАВНАЯ</a></li>
                @else
                    <li><a href="{{ url('/login') }}" style="color: #ffcb08;"><i class="fa fa-sign-in"
                                                                                 aria-hidden="true"></i> ВОЙТИ</a></li>
                    <li><a href="{{ url('/register') }}" style="color: #ffcb08;"><i class="fa fa-unlock-alt"
                                                                                    aria-hidden="true"></i>
                            ЗАРЕГИСТРИРОВАТЬСЯ</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>

<div class="jumbotron text-center" style="background-color: #372e30; padding: 100px 25px; margin: 0;">
    <img src="{{asset('resources/logo-yellow.png')}}" style="width: 128px; height: 128px;">
    <h1 style="color: #ffcb08; font-weight: bold;">TRAFFIC.UZ</h1>
    <hr id="main_hr">
    <p style="color: #ffcb08;">Самый крупный автопарк!</p>
    <button class="btn" style="color: #372e30; background-color: #ffcb08; font-size: 18px;">
        СДЕЛАТЬ ЗАКАЗ
    </button>
</div>

<div class="container-fluid bg-yellow">
    <div class="container" id="makeorder">
        {{Form::open(['route' => ['user.order.submit'], 'method'=>'post'])}}
        {{csrf_field()}}
        <div class="panel panel-default">
            <div class="panel-heading">
                СДЕЛАТЬ ЗАКАЗ
            </div>
            <div class="panel-body">
                <div class="col-md-6">
                    <div class="form-group col-md-12">
                        <label for="tarif" class="col-md-4">Тариф:</label>
                        <div class="col-md-8">
                            {{Form::select('tarif', $tarif, null, ['class'=>'form-control', 'onchange'=>'changeTarif()', 'id'=>'tarif_id'])}}
                        </div>
                    </div>

                    <div class="col-md-12">
                        <hr>
                    </div>

                    <div class="form-group col-md-12">
                        <label class="col-md-4">Тип автомобиля:</label>
                        <div class="col-md-8">
                            {{Form::select('car', $car, null, ['class'=>'form-control', 'onchange' => 'changeCar()', 'id' => 'car_id'])}}
                        </div>
                    </div>
                    <div class="form-group col-md-12 text-center">
                        <img id="car_image" src="{{asset('automobile/'.$cars[0]->image)}}" data-toggle="modal"
                             data-target="#carModal" onclick="showAutoInfo()">
                        <p style="margin-top: 10px;">Нажмите на автомобиль чтобы увидеть информацию об автомобиле</p>
                    </div>

                    <div class="col-md-12">
                        <hr>
                    </div>

                    <div class="form-group col-md-12">
                        <label class="col-md-4">Количество грузчиков:</label>
                        <div class="col-md-8">
                            {{Form::number('persons', 0, ['max' => 8, 'min'=>0, 'class'=>'form-control', 'id' =>'person_id', 'onchange' => 'personsChange()'])}}
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="date_id" class="col-md-4">Время подачи:</label>
                        <div class="col-md-5">
                            <input type="date" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}"
                                   name="date"
                                   class="form-control"
                                   id="date_id">
                        </div>
                        <div class="col-md-3">
                            <input type="time"
                                   value="{{ \Carbon\Carbon::now()->setTimezone('Asia/Tashkent')->format('H:i') }}"
                                   name="time"
                                   class="form-control" id="date_id">
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="unit_id" id="label_tarif" class="col-md-4">Срок аренды (час):</label>
                        <div class="col-md-8">
                            <input name="unit" type="number"
                                   value="{{ $tarifs[0]->min_hour  }}" min="{{ $tarifs[0]->min_hour  }}"
                                   class="form-control" required id="unit_id"
                                   onchange="unitChange()">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    @if ($errors->has('point_A'))
                        <div class="col-md-12">
                                            <span class="help-block">
                                                <strong class="alert-danger">{{ $errors->first('point_A') }}</strong>
                                            </span>
                        </div>
                    @endif
                    <div class="form-group col-md-12">

                        <label class="col-md-3">Откуда:</label>
                        <div class="col-md-8">
                            {{Form::text('address_A',null, ['class'=>'form-control', 'id'=>'address_a', 'readOnly'])}}
                        </div>
                        <div class="col-md-1">
                            <button type="button" class="btn btn-default" data-toggle="modal"
                                    data-target="#firstMapModal" onclick="setStartPoint()"><i class="fa fa-compass"></i>
                            </button>
                        </div>
                    </div>
                    @if ($errors->has('point_B'))
                        <div class="col-md-12">
                                            <span class="help-block">
                                                <strong class="alert-danger">{{ $errors->first('point_B') }}</strong>
                                            </span>
                        </div>
                    @endif
                    <div class="form-group col-md-12">

                        <label class="col-md-3">Куда:</label>
                        <div class="col-md-8">
                            {{Form::text('address_B',null, ['class'=>'form-control', 'id'=>'address_b', 'readOnly'])}}
                        </div>
                        <div class="col-md-1">
                            <button type="button" class="btn btn-default" data-toggle="modal"
                                    data-target="#firstMapModal" onclick="setEndPoint()"><i class="fa fa-compass"></i>
                            </button>
                        </div>
                    </div>

                    <div class="col-md-4">
                        {{Form::hidden('point_A',null, ['id'=>'point_a', 'class'=>'form-control'])}}
                    </div>
                    <div class="col-md-4">
                        {{Form::hidden('point_B',null,['id'=>'point_b', 'class'=>'form-control'])}}
                    </div>

                    <div class="col-md-12">
                        <hr>
                    </div>
                    @if ($errors->has('name'))
                        <div class="col-md-4">
                        <span class="help-block">
                            <strong class="alert-danger">{{ $errors->first('name') }}</strong>
                        </span>
                        </div>
                    @endif
                    <div class="form-group col-md-12">

                        <label class="col-md-3">Имя заказчика:</label>
                        <div class="col-md-9">
                            {{Form::text('name', '',['class'=>'form-control'])}}
                        </div>
                    </div>
                    @if ($errors->has('phone'))
                        <div class="col-md-4">
                        <span class="help-block">
                            <strong class="alert-danger">{{ $errors->first('phone') }}</strong>
                        </span>
                        </div>
                    @endif
                    <div class="form-group col-md-12">
                        <label class="col-md-3">Телефон:</label>
                        <div class="col-md-9">
                            {{Form::text('phone','',['class'=>'form-control'])}}
                        </div>
                    </div>

                    <div class="col-md-12">
                        <hr>
                    </div>

                    <div class="form-group col-md-12">
                        <label for="discount_id" class="col-md-3">Скидка:</label>
                        <div class="col-md-3">
                            {{Form::number('discount', $tarifs[0]->discard, ['id' => 'discount_id', 'class' => 'form-control', 'readonly'])}}
                        </div>
                        <div class="col-md-1">
                            <label>%</label>
                        </div>
                        <div class="col-md-4">
                            {{Form::number('discount', 0, ['id' => 'sum_discount_id', 'class' => 'form-control', 'readonly'])}}
                        </div>
                        <div class="col-md-1">
                            <label>сум</label>
                        </div>
                    </div>

                    <div class="form-group col-md-12">
                        <label class="col-md-3">Цена:</label>
                        <div class="col-md-8">
                            {{Form::number('sum',null, ['class'=>'form-control', 'id'=>'sum_id', 'readOnly'])}}
                        </div>
                        <label class="col-md-1">
                            сум
                        </label>
                    </div>

                    <div class="col-md-12">
                        <hr>
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-block"
                                style="background-color: #372e30; color: #ffcb08; font-size: 18px;">
                            ЗАКАЗАТЬ
                        </button>
                    </div>
                </div>
            </div>
        </div>
        {{Form::close()}}

        <div class="modal fade" id="carModal" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content" style="border-radius: 0;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"
                                style="color: #ffcb08;">&times;</button>
                        <p class="modal-title">Автомобиль</p>
                    </div>
                    <div class="modal-body">
                    <textarea id="automobile_info" style="width: 100%; resize: none; border-width: 0;"
                              readonly></textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="firstMapModal" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content" style="border-radius: 0;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"
                                style="color: #ffcb08;">&times;</button>
                        <p class="modal-title">Карта</p>
                    </div>
                    <div class="modal-body" style="height: 500px; padding: 0; background-color: #372e30;">
                        <div id="firstMap" class="col-md-12" style="height: 500px;"></div>
                    </div>
                    <div class="modal-footer" style="background-color: #372e30;">
                        <button type="button" class="btn btn-default" data-dismiss="modal"
                                style="background-color: #ffcb08; color: #0d3625;">Закрыт
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                                                                             style="font-size: 32px; color: #ffcb08;"></i></a>
                    </li>
                    <li style="display: inline; margin: 4px;"><a href="#"><i class="fa fa-twitter" aria-hidden="true"
                                                                             style="font-size: 32px; color: #ffcb08;"></i></a>
                    </li>
                    <li style="display: inline; margin: 4px;"><a href="#"><i class="fa fa-rss" aria-hidden="true"
                                                                             style="font-size: 32px; color: #ffcb08;"></i></a>
                    </li>
                    <li style="display: inline; margin: 4px;"><a href="#"><i class="fa fa-google-plus"
                                                                             aria-hidden="true"
                                                                             style="font-size: 32px; color: #ffcb08;"></i></a>
                    </li>
                    <li style="display: inline; margin: 4px;"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"
                                                                             style="font-size: 32px; color: #ffcb08;"></i></a>
                    </li>
                    <li style="display: inline; margin: 4px;"><a href="#"><i class="fa fa-skype" aria-hidden="true"
                                                                             style="font-size: 32px; color: #ffcb08;"></i></a>
                    </li>
                    <li style="display: inline; margin: 4px;"><a href="#"><i class="fa fa-vimeo" aria-hidden="true"
                                                                             style="font-size: 32px; color: #ffcb08;"></i></a>
                    </li>
                    <li style="display: inline; margin: 4px;"><a href="#"><i class="fa fa-tumblr" aria-hidden="true"
                                                                             style="font-size: 32px; color: #ffcb08;"></i></a>
                    </li>
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

<script>
    var baseUrl = '{{ URL::asset("") }}';
    automobiles = {!! $cars !!};

    function showAutoImage() {
        document.getElementById('car_image').src = baseUrl + "automobile/" + automobiles[document.getElementById('car_id').selectedIndex]['image'];
    }

    function showAutoInfo() {
        var info = automobiles[document.getElementById('car_id').selectedIndex]['info'];
        var rows = 0;
        for (var i = 0; i < info.length; i++)
            if (info[i] === '\n')
                rows++;
        document.getElementById('automobile_info').rows = rows + 4;
        document.getElementById('automobile_info').innerHTML = info;
    }

    var firstMap;
    var startPoint = false;
    var endPoint = false;
    var path;

    ymaps.ready(init);

    function init() {
        firstMap = new ymaps.Map("firstMap", {
            center: [41.299496, 69.240073],
            zoom: 13,
            controls: []
        }, {searchControlProvider: 'yandex#search'});

        firstMap.controls.add('geolocationControl');
        firstMap.controls.add('searchControl');
        firstMap.controls.add('zoomControl');
        firstMap.controls.get('searchControl').options.set('size', 'large');

        firstMap.events.add('click', function (event) {
            var coords = event.get('coords');
            if (startPoint === false) {
                startPoint = new ymaps.Placemark(coords, {
                    balloonContent: 'Пункт А'
                }, {
                    draggable: true,
                    preset: 'islands#redHomeIcon',
                    iconColor: '#F44336'
                });

                firstMap.geoObjects.add(startPoint);

                startPoint.events.add('dragend', function (e) {
                    setPoint(startPoint, 'address_a', 'point_a');
                });

                setPoint(startPoint, "address_a", "point_a");
                return;
            }
            if (endPoint === false) {
                endPoint = new ymaps.Placemark(coords, {
                    balloonContent: 'Пункт Б'
                }, {
                    draggable: true,
                    preset: 'islands#redGovernmentIcon',
                    iconColor: '#F44336'
                });

                firstMap.geoObjects.add(endPoint);

                endPoint.events.add('dragend', function (e) {
                    setPoint(endPoint, 'address_b', 'point_b');
                });
                setPoint(endPoint, "address_b", "point_b");
            }
        });
    }

    function setPoint(placemark, id_address, id_point) {
        var coords = placemark.geometry.getCoordinates();
        ymaps.geocode(coords).then(function (res) {
            var firstGeoObject = res.geoObjects.get(0);
            document.getElementById(id_address).value = firstGeoObject.getAddressLine();
        });
        document.getElementById(id_point).value = coords;
        drawPath();
    }

    function drawPath() {
        if (startPoint === false || startPoint === false)
            return;

        firstMap.geoObjects.remove(path);

        ymaps.route([startPoint.geometry.getCoordinates(), endPoint.geometry.getCoordinates()], {
            mapStateAutoApply: true,
            multiRoute: false
        }).then(function (route) {
                    path = route;
                    distance = (route.getLength() / 1000).toFixed(2);
                    if (tarifs[tarif_index]['type'] === 1) {
                        document.getElementById('unit_id').value = distance;
                        calculatePrice();
                    }
                    firstMap.geoObjects.add(route);
                    path.getWayPoints().removeAll();
                }, function (error) {
                    alert("Возникла ошибка: " + error.message);
                }
        );
    }

    function setStartPoint() {
        document.getElementById('point_a').value = document.getElementById('address_a').value = "";
        firstMap.geoObjects.remove(startPoint);
        firstMap.geoObjects.remove(path);
        startPoint = false;
    }

    function setEndPoint() {
        document.getElementById('point_b').value = document.getElementById('address_b').value = "";
        firstMap.geoObjects.remove(endPoint);
        firstMap.geoObjects.remove(path);
        endPoint = false;
    }

    var tarifs = {!! $tarifs !!};
    var tarif_index = 0;
    var car_index = 0;
    var hour = 0;
    var distance = 0;
    var min_price = 0;
    var price_for_unit;
    var min_price_unit;
    var price_per_person;
    var discount = 0;
    var car_price = 0;
    var persons = 0;

    function changeTarif() {
        tarif_index = document.getElementById('tarif_id').selectedIndex;
        var unit = document.getElementById('unit_id');
        if (tarifs[tarif_index]['type'] === 0) {
            unit.min = tarifs[tarif_index]['min_hour'];
            unit.value = tarifs[tarif_index]['min_hour'] > hour ? tarifs[tarif_index]['min_hour'] : hour;
            unit.readOnly = false;
            price_for_unit = tarifs[tarif_index]['price_per_hour'];
            min_price_unit = tarifs[tarif_index]['min_hour'];
            document.getElementById('label_tarif').innerHTML = 'Срок аренды (час):';
        } else {
            unit.min = tarifs[tarif_index]['min_distance'];
            unit.value = tarifs[tarif_index]['min_distance'] > distance ? tarifs[tarif_index]['min_distance'] : distance;
            unit.readOnly = true;
            price_for_unit = tarifs[tarif_index]['price_per_distance'];
            min_price_unit = tarifs[tarif_index]['min_distance'];
            document.getElementById('label_tarif').innerHTML = 'Дистанция (км):';
        }
        min_price = tarifs[tarif_index]['price_minimum'];
        price_per_person = tarifs[tarif_index]['price_per_person'];
        document.getElementById('discount_id').value = discount = tarifs[tarif_index]['discard'];

        calculatePrice();
    }

    function changeCar() {
        car_index = document.getElementById('car_id').selectedIndex;
        car_price = automobiles[car_index]['price'];
        showAutoImage();
        calculatePrice();
    }

    function personsChange() {
        persons = document.getElementById('person_id').value;
        calculatePrice();
    }

    function unitChange() {
        calculatePrice();
    }

    function calculatePrice() {
        var price = min_price;
        price += car_price;
        price += price_for_unit * (document.getElementById('unit_id').value - min_price_unit);
        price += persons * price_per_person;

        price -= (document.getElementById('sum_discount_id').value = (price * (discount / 100))).toFixed(0);
        document.getElementById('sum_id').value = price;
    }

    window.onload = function () {
        tarif_index = document.getElementById('tarif_id').selectedIndex = 0;
        car_index = document.getElementById('car_id').selectedIndex = 0;
        changeTarif();
        changeCar();
    }
</script>
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

@extends('layouts.spec')
@section('title', $title.' - ROOMIX')
@section('description', $description)
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 md-3">

            <h1 class="title-section">Ремонт погрузчиков в Алматы</h1>

            <div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padding-left-none padding-right-15 md-padding-right-none md-padding-left-15 sm-padding-left-15 sm-padding-right-none xs-padding-left-none xs-padding-right-none xs-padding-top-20 sidebar_right sidebar-widget side-content">
  <h4 style="color: #2d2d2d; padding-left: 30px;">ДВС </h4>
  <ul class="shortcode type-checkboxes ">
    <li><span><i class="fa fa-check"></i></span>замена гильз</li>
    <li><span><i class="fa fa-check"></i></span>шлифовка коленвала (при необходимости востановление до стандарта или замена коленвала)</li>
    <li><span><i class="fa fa-check"></i></span>замена распределительного вала</li>
    <li><span><i class="fa fa-check"></i></span>замена втулок клапанов</li>
    <li><span><i class="fa fa-check"></i></span>замена клапанов с притиркой гнезд</li>
    <li><span><i class="fa fa-check"></i></span>шлифовка головки блока</li>
    <li><span><i class="fa fa-check"></i></span>замена водяного насоса</li>
    <li><span><i class="fa fa-check"></i></span>замена маслянного насоса</li>
    <li><span><i class="fa fa-check"></i></span>замена навесного оборудования (стартер, ТНВД, фильтры и т.д.), включая насосы гидросистемы и рулевой системы</li>
    <li><span><i class="fa fa-check"></i></span>замена зубчатого венца маховика</li>
  </ul>
  <h4 style="color: #2d2d2d; padding-left: 30px;">ГДП </h4>
  <ul class="shortcode type-checkboxes ">
    <li><span><i class="fa fa-check"></i></span>замена подшипников</li>
    <li><span><i class="fa fa-check"></i></span>замена поршней бустеров</li>
    <li><span><i class="fa fa-check"></i></span>замена насоса КТМ</li>
    <li><span><i class="fa fa-check"></i></span>замена оси в сборе</li>
    <li><span><i class="fa fa-check"></i></span>замена всех дисков</li>
    <li><span><i class="fa fa-check"></i></span>замена гидротрансформатора (при необходимости)</li>
    <li><span><i class="fa fa-check"></i></span>замена распределителя РХТД</li>
  </ul>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padding-left-none padding-right-15 md-padding-right-none md-padding-left-15 sm-padding-left-15 sm-padding-right-none xs-padding-left-none xs-padding-right-none xs-padding-top-20 sidebar_right sidebar-widget side-content">
  <h4 style="color: #2d2d2d; padding-left: 30px;">Ведущий мост</h4>
  <ul class="shortcode type-checkboxes ">
    <li><span><i class="fa fa-check"></i></span>замена главной передачи</li>
    <li><span><i class="fa fa-check"></i></span>замена тормозных механизмов в сборе</li>
    <li><span><i class="fa fa-check"></i></span>ревизия бортовых редукторов</li>
    <li><span><i class="fa fa-check"></i></span>замена</li>
  </ul>
  <h4 style="color: #2d2d2d; padding-left: 30px;">Управляемый мост</h4>
  <ul class="shortcode type-checkboxes ">
    <li><span><i class="fa fa-check"></i></span>замена сошки</li>
    <li><span><i class="fa fa-check"></i></span>замена вала сошки</li>
    <li><span><i class="fa fa-check"></i></span>замена</li>
    <li><span><i class="fa fa-check"></i></span>замена шкворней</li>
    <li><span><i class="fa fa-check"></i></span>замена штока гидроцилиндра</li>
    <li><span><i class="fa fa-check"></i></span>замена подшипников</li>
  </ul>
  <h4 style="color: #2d2d2d; padding-left: 30px;">Подъемное устройство</h4>
  <ul class="shortcode type-checkboxes ">
    <li><span><i class="fa fa-check"></i></span>замена роликов</li>
    <li><span><i class="fa fa-check"></i></span>замена цепей (при необходимости)</li>
    <li><span><i class="fa fa-check"></i></span>замена вил (при необходимости)</li>
    <li><span><i class="fa fa-check"></i></span>замена штоков гидроцилиндров</li>
    <li><span><i class="fa fa-check"></i></span>замена РВД</li>
  </ul>
  <h4 style="color: #2d2d2d; padding-left: 30px;">Электрооборудование </h4>
  <ul class="shortcode type-checkboxes ">
    <li><span><i class="fa fa-check"></i></span>замена всех агрегатов </li>
  </ul>
</div>
</div>

</div>
<div class="col-md-8 col-md-offset-2 top-buffer" id="vin" style="background: #f2ecff;">
                    <div class="modal-header">
                        <h4 class="modal-title">Оставьте заявку на сервис</h4>
                    </div>
                    <div class="modal-body">
                        @if(Session::has('message'))
                            <div class="alert alert-info">
                                {{Session::get('message')}}
                            </div>
                        @endif
                        <form class="form-horizontal" method="post" action="{{ action('RequestController@getRequestFormSpecService') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="inputTel3" class="col-sm-3 control-label">Телефон</label>
                                <div class="col-sm-9">
                                    <input type="tel" class="form-control" id="inputTel3" name="telephone" placeholder="+7(777)777-77-77" data-format="+7 (ddd) ddd-dddd" required>
                                </div>

                            </div>
                            
                            <div class="form-group">
                                <label for="inputName2" class="col-sm-3 control-label">Поломка</label>
                                <div class="col-sm-9">
                                    <textarea rows="5" class="form-control" id="inputName2" name="parts" placeholder="Замена роликов"></textarea>
                                </div>
                            </div>
                            

                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-12">
                                    <button v-on:click="submitted=true" :disabled="submitted" type="submit" onclick="yaCounter39775005.reachGoal('ORDER'); return true;" class="btn btn-default">Отправить заявку</button>
                                </div>
                            </div>
                        </form>
                    </div>
            </div>

<div class="col-md-10 col-md-offset-1 top-buffer">

            <h2 class="title-section">Почему нас рекомендуют</h2>															

<div class="list-recomend">
    <div class="row">
        <div class="col-sm-6">
                                            <div class="left_col">
                <ul class="items-recomend">
                                                                <li class="left_item">Гарантия на ремонт и запасные запчасти</li>
                                                                <li class="left_item">Честность: меняем только то, что нужно менять</li>
                                                                
                                                                <li class="left_item">Вежливый персонал</li>
                                                                
                                                                <li class="left_item">Выполняем ремонт в оговоренные сроки</li>
                                                                <li class="left_item">Скорость доставки необходимых запчастей</li>
                                                        </ul>
            </div>
                                        </div>
        <div class="col-sm-6">
                                            <div class="right_col">
                <ul class="items-recomend">
                                                                <li class="right_item">Видеонаблюдение боксов </li>
                                                                
                                                                
                                                                <li class="right_item">Выбор запчастей в наличии и под заказ</li>
                                                                <li class="right_item">Безналичный расчет</li>
                                                                <li class="right_item">Наличный расчет</li>
                                                                <li class="right_item">Доступ в ремонтную зону</li>
                                                        </ul>
            </div>
                                        </div>
    </div>
</div><!--end list-recomend-->
            </div>
            <div class="col-md-8 col-md-offset-2 top-buffer" id="vin" style="background: #f2ecff;">
                    <div class="modal-header">
                        <h4 class="modal-title">Закажите обратный звонок</h4>
                    </div>
                    <div class="modal-body">
                        @if(Session::has('message'))
                            <div class="alert alert-info">
                                {{Session::get('message')}}
                            </div>
                        @endif
                        <form class="form-horizontal" method="post" action="{{ action('RequestController@getRequestForm') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="inputTel3" class="col-sm-3 control-label">Телефон</label>
                                <div class="col-sm-6">
                                    <input type="tel" class="form-control" id="inputTel3" name="telephone" placeholder="+7(777)777-77-77" data-format="+7 (ddd) ddd-dddd" required>
                                </div>

                            </div>
                            
                            <div class="form-group" style="display:none;">
                                <label for="inputName2" class="col-sm-3 control-label">Поломка</label>
                                <div class="col-sm-9">
                                    <textarea rows="5" class="form-control" id="inputName2" name="parts" placeholder="Замена роликов"></textarea>
                                </div>
                            </div>
                            

                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-12">
                                    <button v-on:click="submitted=true" :disabled="submitted" type="submit" onclick="yaCounter39775005.reachGoal('ORDER'); return true;" class="btn btn-success">Отправить заявку</button>
                                </div>
                            </div>
                        </form>
                    </div>
            </div>

            
            
            



        </div>
    </div>

    <style>
        .items-recomend > li {
    min-height: 35px;
    padding: 6px 0 6px 60px;
    margin: 0 0 5px 0;
    background: url(https://maslenka.ua/wp-content/themes/Maslenka/images/list-style-default.png) no-repeat left center;
}
ul {
    list-style: none;
}
.list-services .item {
    font-size: 16px;
    width: 20%;
    display: inline-block;
    vertical-align: top;
    padding: 0 10px;
}
.list-services {
    font-size: 0;
    text-align: center;
}
.list-services .item .block-img {
    overflow: hidden;
}
.list-services .item .block-img img {
    max-width: 100%;
    height: auto;
    -webkit-transition: all .4s ease;
    -moz-transition: all .4s ease;
    -o-transition: all .4s ease;
    transition: all .4s ease;
}
.list-services .item h3 {
    font-size: 12px;
    text-transform: uppercase;
    line-height: 1.2em;
}
@media screen and (max-width: 380px) {
.list-services .item, .gallery-list .item-photo {
    width: 100%;
}
}
.title-section {
    text-align: center;
}
.top-buffer { margin-top:40px;}
    </style>
@endsection
@extends('layouts.spec')
@section('title', $title.' - ROOMIX')
@section('description', $description)
@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="/spec">Каталог</a></li>
            <li class="breadcrumb-item active"><a href="/spec/{{$type->additional}}">{{$type->name}}</a></li>
            <li class="breadcrumb-item active"><a href="/spec/{{$type->additional}}/{{$part->additional}}">{{$part->name}}</a></li>
            <li class="breadcrumb-item active">Заказать деталь</li>
        </ol>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="progress">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"><span class="sr-only">100% Complete (success)</span></div>
                </div>
                <h1>{{$part->name}} на {{ Illuminate\Support\Str::lower($type->name) }} {{$brand->name}}</h1>

                    <p>{{$part->name}} @if($brand->description != ''){{$brand->description}} @else на {{ Illuminate\Support\Str::lower($type->name) }} {{$brand->name}} @endif в наличии и под заказ. Доставка от 3 дней по всему Казахстану. Мы предлагаем большой выбор запчастей на японские и китайские вилочные погрузчики. Вы можете заказать {{ Illuminate\Support\Str::lower($part->name) }} оправив заявку, менеджер перезвонит и уточнит детали.</p>

                <div class="modal-header">
                    <h4 class="modal-title">1. Осталось заполнить телефон и отправляйте заявку</h4>
                    <h4 class="modal-title">2. В течении нескольких минут с вами свяжется менеджер и сообщит стоимость детали и наличие</h4>
                </div>
                <div class="modal-body col-md-8 col-md-offset-2" id="vin">
                    @if(Session::has('message'))
                        <div class="alert alert-info">
                            {{Session::get('message')}}
                        </div>
                    @endif
                        <form class="form-horizontal" method="post" action="{{ action('RequestController@getRequestFormSpec') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="inputTel3" class="col-sm-3 control-label">Телефон</label>
                                <div class="col-sm-9">
                                    <input type="tel" class="form-control" id="inputTel3" name="telephone" placeholder="+7(777)777-77-77" data-format="+7 (ddd) ddd-dddd" required>
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="inputName1" class="col-sm-3 control-label">Техника</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputName1" name="type" placeholder="Вилочный погрузчик" value="{{$type->name}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputName3" class="col-sm-3 control-label">Марка</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputName3" name="brand" placeholder="CAT" value="{{$brand->name}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputName2" class="col-sm-3 control-label">Запчасть</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputName2" name="parts" placeholder="Втулка шатуна" value="{{$part->name}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-12">
                                    <button v-on:click="submitted=true" :disabled="submitted" type="submit" onclick="yaCounter39775005.reachGoal('SPECORDER'); return true;" class="btn btn-success">Отправить заявку</button>
                                </div>
                            </div>
                        </form>
                </div>
                
            </div>



        </div>
    </div>
@endsection
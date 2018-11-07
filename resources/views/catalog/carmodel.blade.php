@extends('layouts.app')
@section('title', $title.' - ROOMIX')
@section('description', $description)
@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/catalog">Каталог</a></li>
            <li class="breadcrumb-item"><a href="/catalog/{{$parts->additional}}">{{$parts->name}}</a></li>
            <li class="breadcrumb-item"><a href="/catalog/{{$parts->additional}}/{{$markal->additional}}">{{$markal->name}}</a></li>
            <li class="breadcrumb-item active">{{$models->name}}</li>
        </ol>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="progress">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%"><span class="sr-only">40% Complete (success)</span></div>
                </div>
                <h1>{{$parts->name}} на {{$markal->name}} {{$models->name}}</h1>
                <div class="modal-header">
                    <h4 class="modal-title">1. Осталось заполнить телефон, VIN-код автомобиля и отправляйте заявку</h4>
                    <h4 class="modal-title">2. В течении нескольких минут с вами свяжется менеджер и сообщит стоимость и наличие</h4>
                </div>
                <div class="modal-body col-md-8 col-md-offset-2" id="vin">
                    @if(Session::has('message'))
                        <div class="alert alert-info">
                            {{Session::get('message')}}
                        </div>
                    @endif
                    <form class="form-horizontal" method="post" action="{{ action('RequestController@getRequestForm') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="inputTel3" class="col-sm-3 control-label">Телефон</label>
                            <div class="col-sm-9">
                                <input type="tel" class="form-control" id="inputTel3" name="telephone" placeholder="+7(777)777-77-77" data-format="(ddd) ddd-dddd" required>
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="inputName2" class="col-sm-3 control-label">Запчасть</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputName2" name="parts" placeholder="Амортизатор" value="{{$parts->name}}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputNameCity" class="col-sm-3 control-label">Город</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputNameCity" name="city" placeholder="Астана">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputBrand3" class="col-sm-3 control-label">Марка</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputBrand3" name="brand" value="{{$markal->name}}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputModel3" class="col-sm-3 control-label">Модель</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputModel3" name="model" value="{{$models->name}}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputVin3" class="col-sm-3 control-label">VIN-код</label>
                            <div class="col-sm-9" id="vin">
                                <input type="text" class="form-control" id="inputVin3" name="vin" placeholder="SZ45345345FD34">
                                <a @click.prevent="show = !show" style="font-size: 12px;">Как узнать VIN-код?</a>
                                <div v-show="show"><img src="/public/images/vincode.png"></div>
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
@endsection
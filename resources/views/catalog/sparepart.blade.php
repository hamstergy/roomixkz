@extends('layouts.app')
@section('title', $title.' - ROOMIX')
@section('description', $description)
@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/catalog">Каталог</a></li>
            <li class="breadcrumb-item active">{{$parts->name}}</li>
        </ol>
        <div class="row">
        <div class="col-md-8">

            <div class="progress">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%"><span class="sr-only">40% Complete (success)</span></div>
            </div>

            <h1>{{$parts->name}}</h1>
            <p>Выберите марку автомобиля</p>

            @foreach($markas as $marka)
                <div class="col-xs-6 col-lg-3">
                    <h4><a name='{{ $marka->name }}' href='{{ route('catalog.carmodel', ['sparepart' => $parts->additional, 'carbrand' => $marka->additional])}}'>{{ $marka->name }}</a></h4>
                </div>
            @endforeach

        </div>

        <div class="col-md-4 col-xs-12">
            <div class="modal-header">
                <h4 class="modal-title">Оставьте заявку и узнайте наличие и цену на запчасть</h4>
            </div>
            <div class="modal-body" id="vin">
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
                            <input type="tel" class="form-control" id="inputTel3" name="telephone" placeholder="+7(777)777-77-77" data-format="+7 (ddd) ddd-dddd" required>
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="inputName2" class="col-sm-3 control-label">Запчасть</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputName2" name="parts" placeholder="Амортизатор" value="{{$parts->name}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputNameCity" class="col-sm-3 control-label">Город</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputNameCity" name="city" placeholder="Астана">
                        </div>
                    </div>
                    <div class="form-group" >
                        <label for="inputVin3" class="col-sm-3 control-label">VIN-код</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputVin3" name="vin" placeholder="SZ45345345FD34">
                            <a @click.prevent="show = !show" style="font-size: 12px;">Как узнать VIN-код?</a>
                        </div>
                        <div v-show="show"><img src="/public/images/vincode.png"></div>
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
        <hr>
        <h4>Сопутствующие разделы</h4>
        @foreach($subparts as $subpart)
            <div class="col-xs-6 col-lg-3">
                <h5><a name='{{ $subpart->name }}' href='{{ route('catalog.carbrand', ['sparepart' => $subpart->additional])}}'>{{ $subpart->name }}</a></h5>
            </div>
        @endforeach
    </div>
@endsection
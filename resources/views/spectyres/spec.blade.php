@extends('layouts.spec')
@section('title', $title.' - ROOMIX')
@section('description', $description)
@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">Каталог</li>
        </ol>
        <div class="row">
            <div class="col-md-8">
                <div class="progress">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%"><span class="sr-only">25% Complete (success)</span></div>
                </div>
            <h1>Каталог шин на спецтехнику</h1>
            <p>Выберите раздел</p>
                <div class="row">

                @foreach($spectypes as $type)

                        <div class="col-xs-12 col-lg-6" style="line-height: 1.4;">
                            <h4>
                                <a name='{{ $type->name }}' href='{{ route('spectyres.tyres', ['spectype' => $type->additional])}}'>
                                    {{ $type->name }}</a>
                            </h4>
                        </div>
                @endforeach
                </div>

            </div>
            <div class="col-md-4">
                    <div class="modal-header">
                        <h4 class="modal-title">Оставьте заявку и узнайте наличие</h4>
                    </div>
                    <div class="modal-body" id="vin">
                        @if(Session::has('message'))
                            <div class="alert alert-info">
                                {{Session::get('message')}}
                            </div>
                        @endif
                        <form class="form-horizontal" method="post" action="{{ action('RequestController@getRequestFormSpecTyres') }}">
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
                                    <input type="text" class="form-control" id="inputName1" name="type" placeholder="Вилочный погрузчик">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputName2" class="col-sm-3 control-label">Размер</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputName2" name="parts" placeholder="23x8.50-12">
                                </div>
                            </div>
                            <div class="form-group">
                                    <label for="inputName3" class="col-sm-3 control-label">Количество</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputName3" name="brand" placeholder="6 штук">
                                    </div>
                                </div>

                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-12">
                                    <button v-on:click="submitted=true" :disabled="submitted" type="submit" onclick="yaCounter39775005.reachGoal('SPECORDER'); return true;" class="btn btn-default">Отправить заявку</button>
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
@endsection
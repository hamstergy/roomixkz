@extends('layouts.spec')
@section('title', $title.' - ROOMIX')
@section('description', $description)
@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="/spectehnika">Каталог</a></li>
            <li class="breadcrumb-item active">{{$type->name}}</li>
        </ol>
        <div class="row">
            <div class="col-md-8">
                <div class="progress">
                    <div class="progress-bar progress-bar-success" role="progressbar"
                         aria-valuenow="50" aria-valuemin="0"
                         aria-valuemax="100"
                         style="width: 50%"><span class="sr-only">50% Complete (success)</span></div>
                </div>
                <h1>Купить {{ Illuminate\Support\Str::lower($type->name)}}</h1>
                {{--<p>Выберите раздел</p>--}}
                <div class="row">


                </div>

                <div class="row my-3">
                    @foreach($vehicles as $type)
                    <div class="col-md-6">
                        <div class="card mb-4 shadow-sm">
                            <div class="text-center" style="background-image:url('/images/spectehnika/{{$type->image}}');
                            width:100%;
                            height:250px;
                            background-repeat:no-repeat;
                            background-size:cover;
                                    position: relative;">
                                {{--<img class="img-responsive"--}}
                                     {{--src="/images/spectehnika/{{$type->image}}">--}}
                                <div class="bg-light"style="position: absolute;bottom: 0;
                                            left: 0;
                                            width: 100%;">
                                    <h3>{{ $type->name }} ({{ $type->year }} год)</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                    <p class="card-text" style="height: 107px;overflow: hidden;">{!!html_entity_decode($type->description)!!}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        {{--<div class="btn-group">--}}
                                            {{--<button type="button" class="btn btn-sm btn-outline-secondary">View</button>--}}
                                            {{--<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>--}}
                                        {{--</div>--}}
                                        {{--<small class="text-muted">9 mins</small>--}}
                                        <strong class="d-inline-block mb-2 text-success">{{ number_format($type->price,0,'.',' ') }} тенге</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-4">
                <div class="modal-header">
                    <h4 class="modal-title">Оставьте заявку</h4>
                </div>
                <div class="modal-body" id="vin">
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
                                <input type="text" class="form-control" id="inputName1" name="type" placeholder="Вилочный погрузчик">
                            </div>
                        </div>
                        {{--<div class="form-group">--}}
                            {{--<label for="inputName3" class="col-sm-3 control-label">Марка</label>--}}
                            {{--<div class="col-sm-9">--}}
                                {{--<input type="text" class="form-control" id="inputName3" name="brand" placeholder="CAT">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="form-group">--}}
                            {{--<label for="inputName2" class="col-sm-3 control-label">Запчасть</label>--}}
                            {{--<div class="col-sm-9">--}}
                                {{--<input type="text" class="form-control" id="inputName2" name="parts" placeholder="Втулка шатуна">--}}
                            {{--</div>--}}
                        {{--</div>--}}
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
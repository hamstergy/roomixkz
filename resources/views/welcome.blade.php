@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-4 col-sm-6">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                        <span class="fa-stack fa-4x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-car fa-stack-1x fa-inverse"></i>
                        </span>
                </div>
                <div class="panel-body">
                    <h4>Запчасти на автомобили</h4>
                    <p>Запасные части на автомобили. Продажа и поставка.</p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Подобрать запчасть</button>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                        <span class="fa-stack fa-4x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-truck fa-stack-1x fa-inverse"></i>
                        </span>
                </div>
                <div class="panel-body">
                    <h4>Запчасти на грузовую технику</h4>
                    <p>Запасные части для грузовиков и автобусов.</p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Подобрать запчасть</button>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                        <span class="fa-stack fa-4x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-gears fa-stack-1x fa-inverse"></i>
                        </span>
                </div>
                <div class="panel-body">
                    <h4>Запчасти на спецтехнику</h4>
                    <p>Запасные части для спецтехники и сельхозтехники.</p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Подобрать запчасть</button>
                </div>
            </div>
        </div>

    </div>
    <div class="container">
        <div class="col-md-4 col-sm-6">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                        <span class="fa-stack fa-4x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-support fa-stack-1x fa-inverse"></i>
                        </span>
                </div>
                <div class="panel-body">
                    <h4>Шины на легковые автомобили</h4>
                    <p>Продажа шин, доставка по всему Казахстану.</p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Подобрать</button>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                        <span class="fa-stack fa-4x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-support fa-stack-1x fa-inverse"></i>
                        </span>
                </div>
                <div class="panel-body">
                    <h4>Шины на грузовые автомобили</h4>
                    <p>Продажа шин, доставка по всему Казахстану.</p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Подобрать</button>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                        <span class="fa-stack fa-4x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-support fa-stack-1x fa-inverse"></i>
                        </span>
                </div>
                <div class="panel-body">
                    <h4>Шины на спецтехнику</h4>
                    <p>Продажа шин, доставка по всему Казахстану.</p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Подобрать</button>
                </div>
            </div>
        </div>
    </div>

    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Оставьте заявку и узнайте наличие и цену на запчасти</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label for="inputTel3" class="col-sm-2 control-label">Телефон</label>
                            <div class="col-sm-10">
                                <input type="tel" class="form-control" id="inputTel3" placeholder="+7(777)777-77-77">
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="inputName2" class="col-sm-2 control-label">Запчасть</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName2" placeholder="Амортизатор">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputVin3" class="col-sm-2 control-label">VIN-код</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputVin3" placeholder="SZ45345345FD34">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Отправить заявку</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                </div>
            </div>

        </div>
    </div>
@endsection

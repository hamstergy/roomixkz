@extends('layouts.spec')
@section('title', $title.' - ROOMIX')
@section('description', $description)
@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="/spectyres">Каталог</a></li>
            <li class="breadcrumb-item active">Шины на {{ Illuminate\Support\Str::lower($type->name) }}</li>
        </ol>
        <div class="row">
            <div id="aper" class="col-md-8">
                <div class="progress">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"><span class="sr-only">50% Complete (success)</span></div>
                </div>
                @if($type->id == '3')
                    <h1>Каталог шин на автовышку</h1>
                @else
                    <h1>Каталог шин на {{ Illuminate\Support\Str::lower($type->name) }}</h1>
                @endif

                <div :json="setJson2({{ $uniquesizes }})"></div>
                <div :json="setJson3({{ $uniquewidths }})"></div>
                <div class="row">
                <div class="form-group col-sm-6">
                <select class="form-control" v-model="search" >
                    <option value="" selected>Выберите размер</option>
                    <option v-for="size in sizer" v-bind:value="size">
                    @{{ size }}
                    </option>
                </select>
                </div>
                <div class="form-group col-sm-6">
                <select class="form-control"v-model="searchtwo" >
                    <option value="" selected>Выберите ширину</option>
                    <option v-for="width in widthr" v-bind:value="width">
                    @{{ width }}
                    </option>
                </select>
                </div>
            </div>
                <div class="row fix" :json="setJson({{ $tyres }})">
                    <div class="col-xs-12 col-lg-12 table-responsive" style="line-height: 1.4;">
                        <table class="table table-striped" style="font-size:13px;">  
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Название</th>
                                    <th scope="col">Размер</th>
                                    <th scope="col">Ширина</th>
                                    <th scope="col">Тип</th>
                                    <th scope="col">Цена, тг.</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <!--  -->
                                    <tr v-for = "row in filteredList">
                                    <th scope="row">@{{ row.id }}</th>
                                    <td>@{{ row.name }}</td>
                                    <td>@{{ row.size }}</td>
                                    <td>@{{ row.width }}</td>
                                    <td>@{{ row.description }}</td>
                                    <td>@{{ formatMoney(parseInt(row.price)) }}</td>
                                    </tr>
                                </tbody>
                              </table>
                              
                    </div>
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
    <script>  
    new Vue({
    el: '#aper',
    data: {
        wheels: [],
        search: '',
        searchtwo: '',
        sizer: [],
        widthr: [{width:'8.50'},{width:'10.00'}],
        
    },
    methods: {
    	setJson (payload) {
        	this.wheels = payload
        },
        setJson2 (payload) {
            this.sizer = payload
        },
        setJson3 (payload) {
            this.widthr = payload
        },
        formatMoney(money) {
            var moneyString = money.toString();
            var moneyLength = moneyString.length;
            if(moneyString === '0'){
                return 'нет цены';
            }
            if(moneyLength < 4) {
                return moneyString;
            }

            var dotIndex = moneyLength - 3;
            return moneyString.substr(0, dotIndex) + "," + moneyString.substr(dotIndex);
        }   
    },
    computed:{
        filterWidth() {
            return this.wheels.filter(newArr => {
                return newArr.width.includes(this.searchtwo)
            });
        },
        filteredList() {
            return this.filterWidth.filter(newArr => {
                return newArr.size.includes(this.search)
            });
        }
        
    }
})
    </script>
@endsection
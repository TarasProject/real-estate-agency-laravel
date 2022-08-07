@extends('layouts.root')
@section('content')
    <div class="container">
        <form method="post"  action="" class="form-horizontal">
            {{ csrf_field() }}
            <div class="form-group">
                <label class="control-label" for="type_object">Тип об'єкта</label>
                <select class="form-control col-md-3" id="type_object" name="type_object">

                    @foreach($typesObject as $object)
                        <option value="{{$object}}" {{$offers['type_object']===$object?'selected':''}}>{{$object}}</option>
                    @endforeach
                        {{--1.3--selected}}

                    {{--<option selected value="">{{$offers['type_object']}}</option>--}}

                    {{--<option value="{{$offers['type_object']}}">{{$offers['type_object']}}</option>--}}
                    {{--<option value="{{$offers['type_object']=='house'? 'flat':'house'}}">{{$offers['type_object']=='house'? 'flat':'house'}}</option>--}}

                </select>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label class="control-label" for="price">Ціна</label>
                    <input type="text" name="price" class="form-control" id="price" placeholder="Вкажіть ціну" value="{{isset($offers)?$offers['price']:''}}">
                </div>
                <div class="form-group col-md-6">
                    <label class="control-label" for="type_currency">Тип валюти</label>
                    <select class="form-control" id="type_currency" name="type_currency">
                        @foreach($typesCurrency as $typeCurrency)
                            <option value="{{$typeCurrency->name}}" {{$offers['type_currency']===$typeCurrency->name?'selected' :''}}>{{$typeCurrency->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row">

                <div class="form-group col-md-6">
                    <div class="row">
                        <label for="name" class="control-label col-md-6">Вказати тип стін</label>
                        <div class="col-md-6">
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="type_wolls" id="type_wolls" value="panel" {{ $offers['type_wolls']=="panel" ?'checked':''}}>
                                <label class="form-check-label" for="type_wolls">
                                    Панель
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="type_wolls" id="type_wolls1" value="brick" {{ $offers['type_wolls']=="brick" ?'checked':''}}>
                                <label class="form-check-label" for="type_wolls1">
                                    Цегла
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div form-group class="row">
                        <label for="" class="control-label col-md-6">Кількість кімнат</label>
                        <div class="col-md-6">
                            <input type="text" name="room_number" class="form-control" id="" placeholder="Введіть кількість кімнат" value="{{isset($offers)?$offers['room_number']:''}}">
                        </div>
                    </div>
                </div>

            </div>

            <div class="form-group">
                <label for="user_id" class="control-label">Ім'я користувача</label>
                {{--<input type="text" name="user_id" class="form-control" id="user" placeholder="Введіть ім'я">--}}
                <select class="form-control" id="user_id" name="user_id">
                    <option selected value=""></option>

                </select>
            </div>

            <div class="form-group">
                <label for="phone" class="control-label">Телефон</label>
                <input type="text" name="phone" class="form-control" id="phone" placeholder="" value="{{isset($offers)?$offers['phone']:''}}">
            </div>



            <div class="form-group">
                <label for="more_information">Додаткова інформація</label>
                <textarea class="form-control" id="more_information" name="more_information" rows="3"></textarea>
            </div>

            <div class="form-group">
                <input type="hidden" name="remember" value="{{App\Models\Offer::REMEMBER_FALSE}}">
                <input type="checkbox" name="remember" value="{{App\Models\Offer::REMEMBER_TRUE}}" id="remember" {{ $offers['remember']=='ON' ?'checked':''}}>
                <label for="remember">Запамятати мане</label>
            </div>

            <button type="submit" class="btn btn-primary">Опублікувати</button>

        </form>
    </div>

@stop
@extends('layouts.root')
@section('content')
    <div class="container">
        <form method="post"  action="" class="form-horizontal">
            {{ csrf_field() }}

                    <div class="form-group" {{ $errors->has('type_object') ? ' has-error' : '' }}>
                        <label class="control-label" for="type_object">Тип об'єкта</label>
                        <select class="form-control col-md-3" id="type_object" name="type_object">
                            <option selected></option>
                            <option value="Квартира">Квартира</option>
                            <option value="Будинок">Будинок</option>
                        </select>
                        @if ($errors->has('type_object'))
                            <div class="text-danger">
                                <strong>{{ $errors->first('type_object') }}
                                </strong>
                            </div>
                        @endif
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6" {{ $errors->has('price') ? ' has-error' : '' }}>
                            <label class="control-label" for="price">Ціна</label>
                            <input type="text" name="price" class="form-control" id="price" placeholder="Вкажіть ціну" value="{{old("price")}}">
                            @if ($errors->has('price'))
                                <div class="text-danger">
                                    <strong>{{ $errors->first('price') }}
                                    </strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label" for="type_currency">Тип валюти</label>
                            <select class="form-control" id="type_currency" name="type_currency">
                                <option selected></option>
                                <option value="USD">USD</option>
                                <option value="UAH">UAH</option>
                                <option value="EUR">EUR</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <div class="row">
                                <label for="name" class="control-label col-md-6">Вказати тип стін</label>
                                <div class="col-md-6">
                                    <div class="form-check-inline">
                                        <input class="form-check-input" type="radio" name="type_wolls" id="type_wolls" value="Панель">
                                        <label class="form-check-label" for="type_wolls">
                                            Панель
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <input class="form-check-input" type="radio" name="type_wolls" id="type_wolls1" value="Цегла">
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
                                    <input type="text" name="room_number" class="form-control" id="" placeholder="Введіть кількість кімнат">
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="user_id" class="control-label">Ім'я користувача</label>
                        {{--<input type="text" name="user_id" class="form-control" id="user" placeholder="Введіть ім'я">--}}
                        <select class="form-control" id="user_id" name="user_id">
                            @foreach($users as $user)
                            <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="phone" class="control-label">Телефон</label>
                        <input type="text" name="phone" class="form-control" id="phone" placeholder="">
                    </div>



                    <div class="form-group">
                        <label for="more_information">Додаткова інформація</label>
                        <textarea class="form-control" id="more_information" name="more_information" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <input type="hidden" name="remember" value="{{App\Models\Offer::REMEMBER_FALSE}}">
                        <input type="checkbox" name="remember" value="{{App\Models\Offer::REMEMBER_TRUE}}" id="remember">
                        <label for="remember">Запамятати мане</label>
                    </div>

                    <button type="submit" class="btn btn-primary">Опублікувати</button>

                </form>
    </div>

@stop
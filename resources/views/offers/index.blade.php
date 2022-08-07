@extends('layouts.root')
@section('content')
<div class="container">
    @include('messege')
    @foreach($offers as $offer)
    <div class="users-tables-group">
        <div class="table-users-row">
            <div class="table-user">
                <div class="table-header-blue clearfix">
                    <span class="right">
                        {{--@if(Auth::user() && Auth::user()->id==$offer->user_id)--}}
                        <a href="{{route('offer.edit',$offer->id)}}" class="action" style="color: white">Редагувати оголошення</a>
                        <a href="{{route('offer.delete',$offer->id)}}" class="delete" style="color: white">Видалити</a>
                        {{--@endif--}}
                    </span>
                </div>
                <div class="table-user-body clearfix">
                    <table class="user-details">
                        <tbody>
                        <tr>
                            <td>Тип об'єкта</td>
                            <td>{{$offer->type_object}}</td>
                        </tr>
                        <tr>
                            <td>Ціна</td>
                            <td>{{$offer->price}}</td>

                        </tr>
                        <tr>
                            <td>Тип валюти</td>
                            <td>{{$offer->type_currency}}</td>

                        </tr>
                        <tr>
                            <td>Вказати тип стін</td>
                            <td>{{$offer->type_wolls}}</td>
                        </tr>
                        <tr>
                            <td>Кількісь кімнат</td>
                            <td>{{$offer->room_number}}</td>
                        </tr>
                        <tr>
                            <td>Ім'я користувача</td>
                            <td>{{$offer->user->name??''}}</td>
                            {{--3 прописати так щоб витягувало ім'я з таблиці--}}
                        </tr>
                        <tr>
                            <td>Role</td>
                            <td>{{$offer->user->role??''}}</td>
                            {{--3 прописати так щоб витягувало role з таблиці--}}
                        </tr>
                        <tr>
                            <td>Телефон</td>
                            <td>{{$offer->phone}}</td>
                        </tr>
                        <tr>
                            <td>Додаткова інформація</td>
                            <td>{{$offer->more_information}}</td>
                        </tr>
                        <tr>
                            <td>Змінити оголошення</td>
                            <td>{{$offer->remember}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@stop

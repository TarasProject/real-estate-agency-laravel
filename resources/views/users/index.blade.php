@extends('layouts.root')
@section('content')
    <div class="container">
        <ul>
            <li>
                <a href="{{ route('register') }}">Добавити користувача</a>
            </li>
        </ul>
        @foreach($users as $user)
        <div class="users-tables-group">
            <div class="table-users-row">
                <div class="table-user">
                    <div class="table-header-blue clearfix">
                        <span class="right">
                            <a href="{{route('users.edit',$user->id)}}" class="action" style="color: white">Редагувати користувача</a>
                            <a href="{{route('users.delete',$user->id)}}" class="delete">Видалити</a>
                        </span>
                    </div>
                    <div class="table-user-body clearfix">
                        <table class="user-details">
                            <tbody>
                            <tr>
                                <td>Ім'я:</td>
                                <td>{{$user->name}}</td>

                            </tr>
                            <tr>
                                <td>Електронний адрес:</td>
                                <td>{{$user->email}}</td>
                            </tr>
                            <tr>
                                <td>Контактний телефон:н</td>
                                <td>{{$user->phone}}</td>
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
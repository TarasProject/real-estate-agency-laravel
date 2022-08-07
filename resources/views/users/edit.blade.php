@extends('layouts.root')
@section('content')
    <div class="container">
        <form method="post"  action="" class="form-horizontal">
            {{ csrf_field() }}
            <div class="form-group">
                <label class="control-label" for="name">Ім'я користувача</label>
                <input class="form-control" type="text" id="name" value="{{isset($user)?$user['name']:''}}">
            </div>
            <div class="form-group">
                <label class="control-label" for="email">E-mail</label>
                <input class="form-control" type="email" id="email" name="email" value="{{isset($user)?$user['email']:''}}" >
            </div>
            <div class="form-group">
                <label class="control-label" for="phone">Контактний телефон</label>
                <input class="form-control" type="text" id="phone" name="phone" value="{{isset($user)?$user['phone']:''}}">
            </div>

        </form>
    </div>


@stop
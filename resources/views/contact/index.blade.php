@extends('layouts.root')
@section('content')
<div class="container">
    <div class="users-tables-group">
        <div class="table-users-row">
            <div class="table-user">
                <div class="table-header-blue clearfix">
                        <span class="right">
                            <a href="" class="action" style="color: white">Редагувати користувача</a>
                            <a href="" class="delete"></a>
                        </span>
                </div>

                <form method="post" action=" ">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="currency">Тип валюти</label>
                        <input type="text" name="input_currency" class="form-control" id="currency" value="{{old('name')}}" placeholder="Ведіть тип валюти">
                    </div>
                    <button type="submit" class="btn btn-primary">Опублікувати</button>
                </form>



            </div>
        </div>
    </div>
</div>
</body>
</html>

@stop
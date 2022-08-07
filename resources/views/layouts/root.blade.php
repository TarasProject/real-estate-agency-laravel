<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My</title>

        <!-- Fonts -->
        <link href="{{asset('/css/style.css')}}" rel="stylesheet" type="text/css">
        <link href="/css/styleadd.css" rel="stylesheet" type="text/css">

        <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">

        <script src="/js/jquery-3.3.1.js" type="text/javascript"></script>
        <script src="/js/popper.min.js" type="text/javascript"></script>
        <script src="/js/bootstrap.js" type="text/javascript"></script>



        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <!-- Styles -->

    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">

            <a class="navbar-brand" href="#"><i class="far fa-building"></i></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="container-fluid">

                <ul class="nav nav-pills nav-fill">
                    <li class="nav-item"><a class="nav-link {{Request::is('/')?'active-1':''}}" href="{{route('index')}}">{{__('dictionary.main_page')}}</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{Request::is('offer')?'active-1':''}}" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="{{route('offer.index')}}">{{__('dictionary.offers')}}</a>
                        <div class="dropdown-menu">
                            <a class=" {{Request::is('offer')?'active-1':''}}" href="{{route('offer.index')}}">{{__('dictionary.offers')}}</a>

                            <div class="dropdown-divider"></div>

                            <a class=" {{Request::is('offer/add')?'active-1':''}}" href="{{ route('offer.add') }}">{{__('dictionary.add_offers')}}</a>

                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{Request::is('users*')?'active-1':''}}" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="{{route('users.index')}}">{{__('dictionary.users')}}</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('users.index')}}">{{__('dictionary.users')}}</a>

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item " href="{{ route('register') }}">{{__('dictionary.add_users')}}</a>

                        </div>
                    </li>
                    @if(Auth::user() && Auth::user()->role=='ADMIN')
                        <li class="nav-item"><a class="nav-link {{Request::is('contact')?'active-1':''}}" href="{{route('contact.index')}}">{{__('dictionary.add_currency')}}</a></li>
                    @endif

                </ul>
                {{--<ul class="nav nav-pills nav-fill justify-content-end">--}}
                    {{--<li>--}}
                        {{--@if (Route::has('login'))--}}
                            {{--<div class="nav-item">--}}
                                {{--@auth--}}
                                    {{--<a href="{{ url('/home') }}"></a>--}}
                                {{--@else--}}
                                    {{--<a class="nav-link active" href="{{ route('login') }}">Вхід</a>--}}
                                    {{--<a href="{{ route('register') }}">Добавити користувача</a>--}}
                                {{--@endauth--}}
                            {{--</div>--}}
                        {{--@endif--}}
                    {{--</li>--}}

                {{--</ul>--}}

                <div class="dropdown">
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{__('dictionary.login')}}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{__('dictionary.register')}}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                        {{__('dictionary.logout')}}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    {{--@if (Route::has('login'))--}}
        {{--<div class="top-right links">--}}
            {{--@auth--}}
                {{--<a href="{{ url('/home') }}">Home</a>--}}
            {{--@else--}}
                {{--<a href="{{ route('login') }}">Вхід</a>--}}
                {{--<a href="{{ route('register') }}">Добавити користувача</a>--}}
            {{--@endauth--}}
        {{--</div>--}}
    {{--@endif--}}

        <div class="header">
            <h1>{{__('dictionary.city')}}</h1>
            <h2>{{__('dictionary.title')}}</h2>
        </div>
        @yield('content')

        <div class="footer">
            <div class="container">
                <p>Copyright © Example.com 2018</p>
            </div>
        </div>

    </body>
</html>

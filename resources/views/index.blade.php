@extends('layouts.root')
@section('content')
    <div class="container">

        <div class="collection-title">
            <h2><small>{{__('dictionary.title_content')}}</small></h2>
        </div>

        <div class="collections">

            <div class="collection-item-outer">
                <div class="collection-item">
                    <img src="images/profile1.jpg" alt="картинка">
                    <div class="collection-text">
                        <h3>
                            Будиноки класу А
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <button>
                            Детальніше
                        </button>
                    </div>
                </div>
            </div>

            <div class="collection-item-outer">
                <div class="collection-item">
                    <img src="images/profile2.jpg" alt="картинка">
                    <div class="collection-text">
                        <h3>
                            Квартири
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <button>
                            Детальніше
                        </button>
                    </div>
                </div>

            </div><div class="collection-item-outer">
                <div class="collection-item">
                    <img src="images/profile3.jpg" alt="картинка">
                    <div class="collection-text">
                        <h3>
                            Будинки класу Б
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <button>
                            Детальніше
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

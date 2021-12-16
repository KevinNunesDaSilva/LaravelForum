<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="d-none">
                {{$user = auth()->user();}}
        </div>
        {{-- @if (Route::has('login'))
            <div class="py-5">
                <a class="btn btn-dark" href="{{ url()->previous() }}">Back</a>
                @auth
                {{dd(Request::is('profile/'$user->id))}}
                @if (Request::is('profile/*'))
                    <a href="{{ action('App\Http\Controllers\UserController@show', $user->id)}}" class="">Profile</a>
                @endif
                @else
                    <a href="{{ route('login') }}" class="">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="">Register</a>
                    @endif
                @endauth
            </div>
        @endif --}}
        <div class="nav-bar bgc1a1 position-fixed w-100">
            <div class="container py-3 w-100 d-flex justify-content-between text-center mx-auto">
                    <a href="{{ action('App\Http\Controllers\HomepageController@index')}}">
                    <img src="//via.placeholder.com/80x35" alt="" class="d-block mx-auto">
                    </a>
                @auth
                <div class="d-none">
                    {{$user = auth()->user();}}
                </div>
                @if (Request::is('user/*'))
                <div class="d-flex justify-content-between">
                    <a href="{{ action('App\Http\Controllers\PostController@create')}}" class="btn btn-light mr-3 d-block button-margin">Create post</a>
                    <a href="{{ route('logout') }}" class="btn btn-light d-block">Logout</a>
                </div>
                    @else
                    <div class="d-flex justify-content-between">
                    <a href="{{ action('App\Http\Controllers\UserController@show', $user->id)}}" class="btn btn-light d-block button-margin">Profile</a>
                    <a href="{{ action('App\Http\Controllers\PostController@create')}}" class="btn btn-light d-block button-margin">Create post</a>
                    <a href="{{ route('logout') }}" class="btn btn-light d-block ">Logout</a></div>
                @endif
                @else
                <div class="d-flex justify-content-between">
                    <a href="{{ route('register') }}" class="btn btn-light d-block button-margin">Register</a>
                    <a href="{{ route('login') }}" class="btn btn-light d-block">login</a>
                </div>                    
                @endauth
            </div>
        </div>
        <!-- Page Content -->
        <div class="container content-container">
            @yield('content')
        </div>
    </body>
</html>

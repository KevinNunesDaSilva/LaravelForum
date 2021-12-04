@extends('layouts.app')
@section('content')
<form method="POST" action="{{action('App\Http\Controllers\PostController@store')}}">
    @csrf

    <div>
        <x-label for="title" :value="__('title')" />

        <x-input id="title" class="block mt-1 w-full" type="text" name="title" required />
    </div>

    <div class="mt-4">
        <x-label for="post_text" :value="__('post_text')" />

        <x-input id="post_text" class="block mt-1 w-full"
                        type="textarea"
                        name="post_text"
                        required/>
    </div>
        {{-- {{$user_id = Auth::user()->id;}}
        <div class="d-none">
            <x-label for="user_id" :value="__('user_id')" />
    
            <x-input id="user_id" class="block mt-1 w-full" type="text" name="user_id" value="{{$user_id}}" required />
        </div> --}}

        <x-button class="ml-3">
            post
        </x-button>
    </div>
</form>
@stop
@extends('layouts.app')
@section('content')
@if($posts)
@foreach ($posts as $post)

<a class="d-block w-100" href="{{ action('App\Http\Controllers\PostController@show', $post->id)}}">
<div class="text-center mb-5 pb-2 border w-100">
        <h3 class="mb-2">{{$post->title}}</h3>
    <p>{{$post->post_text}}</p>
</div>
</a>

@endforeach
@endif
@stop
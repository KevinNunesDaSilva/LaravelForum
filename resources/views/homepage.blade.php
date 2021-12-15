@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-8">
        {{-- {{dd($posts)}} --}}
@if($posts)
    @foreach ($posts as $post)
    <a class="d-block post-container w-100" href="{{ action('App\Http\Controllers\PostController@show', $post->id)}}">
        <div class="text-center mb-4 post bgc1a1">
                <h3 class="mb-2">{{$post->title}}</h3>
                <p>{{$post->post_text}}</p>
                <p>team name: {{$post->team_name}} </p>
                <p>team owner: {{$post->name}} </p>
                <p>posted at: {{$post->created_at}} </p>
                <p>current Tier: {{$post->team_tier}} </p>
        </div>
    </a>
    @endforeach
@endif

    </div>
    <div class="col-md-4 categories position-relative">
        <div class="category-list position-fixed">
            <div class="category">
                <a class="d-block w-100" href="">
                    <div class="text-center py-2 bgc1a1">
                        <h4>Tier 1</h3>
                    </div>
                </a>
            </div>
            <div class="category">
                <a class="d-block w-100" href="">
                    <div class="text-center py-2 bgc1a1">
                        <h4>Tier 2</h3>
                    </div>
                </a>
            </div>
            <div class="category">
                <a class="d-block w-100" href="">
                    <div class="text-center py-2 bgc1a1">
                        <h4>Tier 3</h3>
                    </div>
                </a>
            </div>
            <div class="category">
                <a class="d-block w-100" href="">
                    <div class="text-center py-2 bgc1a1">
                        <h4>Tier 4</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@stop 
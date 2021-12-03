@extends('layouts.app')
@section('content')
    @if($post)
        @foreach ($post as $data)
            <h1 class="text-center h1">{{$data->title}}</h1>
        @endforeach
    @endif
@stop
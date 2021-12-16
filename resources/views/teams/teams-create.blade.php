@extends('layouts.app')
@section('content')
<form method="POST" action="{{action('App\Http\Controllers\TeamController@store')}}">
    @csrf

    <div>
        <x-label for="team_name" :value="__('team_name')" />

        <x-input id="team_name" class="block mt-1 w-full" type="text" name="team_name" required />
    </div>


    <div class="mt-4">
        <x-label for="team_tier" :value="__('team_tier')" />
        <select name="team_tier" id="team_tier">
            <option value="1" selected>1</option>
            <option value="2" selected>2</option>
            <option value="3" selected>3</option>
            <option value="4" selected>4</option>
        </select>
    </div>          
    </div>
        <x-button class="ml-3">
            post
        </x-button>
    </div>
</form>
@stop
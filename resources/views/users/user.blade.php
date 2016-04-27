@extends('app')
    @section('content')
        @foreach($users as $user)
            <p>{{ $user }}</p>
        @endforeach
        @stop
@extends('app')

@section('content')
    <h2>Створити статтю</h2>
    <form role="form" method="POST" action="{{ url('/store') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        @include('post._form')
        <button type="submit" class="btn btn-success" >Створити:</button>
    </form>
    @endsection
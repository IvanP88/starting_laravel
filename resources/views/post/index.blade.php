@extends('app')
    @section('content')
        <div>
            <a href="{{url('/')  }}">Опобліковані статті</a>&nbsp;&nbsp;&nbsp;
            <a href="{{url('unpublished')  }}">Не опубліковані статті</a>&nbsp;&nbsp;&nbsp;
            <a href="{{url('/create')}}">Створити статтю</a>&nbsp;&nbsp;&nbsp;
            <a href="{{ url('/all_users') }}">Всі юзери</a>
            {{--{!! link_to_route('posts', 'published') !!}--}}
        </div>
        @foreach($posts as $post)
            <article>
                <h2>{{ $post->title }}</h2>
                <p>{{ $post->except }}</p>
                <p>
                    published: {{ $post->created_at }}</p>
            </article>
        @endforeach
    @stop

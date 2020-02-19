@extends('layouts.app')


@section('content')
    <h1>Posts</h1>
    @if (count($posts) > 0)
        <ol class="list-group">
            @foreach ($posts as $post)
            
                <li class="list-group-item">
                <h3>{{$post->title}}</h3>
                <small>Written on {{$post->created_at}}</small>
                </li>
                
            @endforeach
        </ol>
    @endif

@endsection
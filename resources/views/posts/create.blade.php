@extends('layouts.app')


@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['action'=>'PostsController@store', 'method' => 'POST']) !!}
        <div class="">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}

        </div>
        </br>
        <div class="">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Body Text'])}}

        </div>
    {!! Form::close() !!}


   
@endsection
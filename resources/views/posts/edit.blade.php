@extends('layouts/app')

@section ('content')
    <h1>Edit Post</h1>
    <!-- !! is for Laravel Collective Form -->
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body text'])}}
    </div>

    <!--Image upload-->
    <div class="form-group">
        {{Form::file('cover_image')}}
    </div>

    <!-- PostsController@update uses method PUT and PATCH, while Form::open uses POST, so the following line is needed:-->
    {{Form::hidden('_method','PUT')}}
    
    {{Form::submit('Update', ['class'=>'btn btn-primary'])}}
    <a href="/home" class="btn btn-primary">Cancel</a>
    {!! Form::close() !!}
@endsection
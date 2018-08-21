@extends('layouts/app')

@section ('content')
<div class="m-3">
    <img src="/storage/cover_images/{{$post->cover_image}}" class="rounded mx-auto d-block">
    <br>
    <h1>{{$post->title}}</h1>
    <div>
        <!--The !! corresponds to Laraavel Collective Forms so that HTML tags (i.e. bold or italic) are rendered properly -->
        <p>{!!$post->body!!}</p>
    </div>
    <hr>
    <small>Posted on {{date_format($post->created_at, 'd/m/Y')}} by {{$post->user->name}}</small>
    
    <hr>

    <!-- "If the user is not a guest, it shows the Edit and Delete buttons" -->
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
            {!!Form::close()!!}        
        @endif
    @endif

    <a href="/posts" class="btn btn-primary btn-lg">Go Back</a>    

</div>
@endsection
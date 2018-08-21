@extends('layouts/app')

@section ('content')
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-dark text-white page-title">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 font-weight-normal">Blog</h1>
      <p class="lead font-weight-normal">Mauris mi auctor mattis congue egestas torquent libero vehicula bibendum lectus viverra, parturient turpis placerat.</p>
    </div>

</div>

    <div class="container-fluid padding">
        @if(count($posts) > 0)
            @foreach($posts as $post)
                <div class="well">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <img style="width: 100%" src="/storage/cover_images/{{$post->cover_image}}">
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                            <small>Posted on {{date_format($post->created_at, 'd/m/Y')}} by {{$post->user->name}}</small>
                        </div>
                    </div>
                </div>
            @endforeach
            <!--Pagination ()implemented in the controller -->
            {{$posts->links()}}
            @else
            <p>No posts found</p>
        @endif
    </div>
@endsection
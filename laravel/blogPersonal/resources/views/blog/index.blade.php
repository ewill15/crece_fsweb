@extends('layouts.master')
@section('content')
@foreach ($posts as $post)
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="post-title">{{$post->title}}</h1>
            <p>{{$post->content}}</p>
            <p>
                <a href="{{route('blog.post', ['id'=>$post->id])}}" class="btn btn-primary">Ver mas</a>
            </p>
        </div>
    </div>    
@endforeach

@endsection
@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{route("posts.index")}}"><button type="button" class="btn btn-secondary">List</button></a>
        <h1>{{$post->title}}</h1>
        <p>{{$post->content}}</p>
    </div>
@endsection
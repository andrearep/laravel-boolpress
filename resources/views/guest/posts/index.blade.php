@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        @foreach($posts as $post)
        <div class="col-md-4">
            <div class="card">
                <img src="{{$post->img}}" alt="">
                <h1>{{$post->title}}</h1>
                <span>{{$post->subTitle}}</span>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
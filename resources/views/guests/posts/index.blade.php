@extends('layouts.app')

@section('content')
<h1 class="text-center py-5">NEWS</h1>
<div class=" container">
    <div class="row">

        @foreach($posts as $post)
        <div class="col-md-4">
            <div class="card text-left">
                <img class="card-img-top" src="{{$post->image}}" alt="">
                <div class="card-body">
                    <h4 class="card-title">{{$post->title}}</h4>
                    <p class="card-text">{{$post->body}}</p>
                </div>
            </div>
        </div>
        @endforeach




    </div>
</div>
@endsection
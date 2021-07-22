@extends('layouts.app')

@section('content')

<main class="container">
    <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
            <h1 class="display-4 fst-italic">{{$posts[0]->title}}</h1>
            <p class="lead my-3">{{
                $posts[0]->body}}</p>
            <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
        </div>
    </div>

    <div class="row mb-2">
        @foreach($posts as $post)

        <div class="col-md-6">

            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">

                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary">{{$post->argument}}</strong>
                    <h3 class="mb-0">{{$post->title}}</h3>

                    <p class="card-text mb-auto">{{$post->subTitle}}</p>
                    <a href="#" class="stretched-link">Continue reading</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img class="bd-placeholder-img" width="200" height="250" src="{{$post->img}}">

                </div>
            </div>

        </div>
        @endforeach

    </div>
    @endsection
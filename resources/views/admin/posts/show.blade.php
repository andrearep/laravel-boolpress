@extends('layouts.admin')

@section('content')

>
< <img src="{{$post->image}}" alt="">
    <h1> {{$post->title}}</h1>
    <p> {{$post->body}}</p>

    <a href="{{route('admin.posts.index')}}">Back</a>
    <a href="{{route('admin.posts.edit', $post->id)}}">Edit</a>



    @endsection
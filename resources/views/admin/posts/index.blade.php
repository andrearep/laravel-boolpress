@extends('layouts.admin')

@section('content')
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>img</th>
            <th>Title</th>
            <th>Sub-Title</th>
            <th>Author</th>
            <th>Argument</th>
            <th>Body</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>

            <td>{{$post->id}}</td>
            <td><img src="{{$post->img}}" alt="{{$post->title}}" width="100"></td>
            <td>{{$post->title}}</td>
            <td>{{$post->subTitle}}</td>
            <td>{{$post->author}}</td>
            <td>{{$post->argument}}</td>
            <td>{{$post->body}}</td>
            <td>view | edit | delete</td>
            <td>{{$post->id}}</td>
            <td></td>
        </tr>
        @endforeach
        <tr>
            <td scope="row"></td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>

@endsection
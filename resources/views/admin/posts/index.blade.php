@extends('layouts.admin')

@section('content')
<div class="d-flex justify-content-between">
    <h1>all post</h1>
    <a class="btn btn-primary" href="{{route('admin.posts.create')}}">add a new post</a>
</div>

<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>IMAGE</th>
            <th>TITLE</th>
            <th>ACTIONS</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            @foreach($posts as $post)
        <tr>
            <td scope="row">{{$post->id}}</td>
            <td> <img src="{{$post->image}}" alt=""></td>
            <td> {{$post->title}}</td>
            <td>
                <a href="{{route('admin.posts.show', $post->id)}}">
                    VIEW
                </a>
                <a href="{{route('admin.posts.edit', $post->id)}}">
                    EDIT
                </a>

                <form action="{{route('admin.posts.destroy', $post->id) }}" mwthod="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">DELETE</button>
                </form>

            </td>
        </tr>
        @endforeach
        <td></td>
        </tr>
        <tr>
            <td scope="row"></td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>
@endsection
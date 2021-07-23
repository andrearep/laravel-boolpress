@extends('layouts.admin')

@section('content')

<h1>Create a new post</h1>
<form action="{{route('admin.posts.update')}}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" placeholder="add a title"
            aria-describedby="helpId" value="{{$post->title}}">
        <small id="titleHelper" class="text-muted">Help text</small>

        <div class="form-group">
            <label for="image" I>mage</label>
            <input type="text" name="image" id="image" class="form-control" placeholder="add a image"
                aria-describedby="helpId" value="{{$post->image}}">
            <small id="imageHelper" class="text-muted">Help text</small>
            <div class="form-group">

                <label for="body">body</label>
                <input type="text" name="body" id="body" class="form-control" placeholder="add a body"
                    aria-describedby="helpId" value="{{$post->body}}" row="3">
                <small id="bodyHelper" class="text-muted">Help text</small>
            </div>
            <button type="submit" class="btn btn-success"> Submit</button>

</form>



@endsection
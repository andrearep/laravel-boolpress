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
    </div>
    <div class="form-group">
        <label for="image">Image</label>
        <!--  <input type="file" name="image" id="image" class="form-control" placeholder="add a image"
                aria-describedby="helpId" value="{{old('image')}}">
            <small id="imageHelper" class="text-muted">Help text</small> -->
        <input type="file" name="image" id="image">
    </div>
    @error('image')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror

    <div class="alert alert-danger">{{$message}}</div>
    @enderror
    <div class="form-group">
        <label for="tags">Tags</label>
        <select multiple name="tags[]" id="tags">
            <option value="">
                @if($tags)
                @foreach($tags as $tag)
            <option value="{{$tag->id}}" {{ $post->tags->contain($tag) ? 'selected' : ''}}>
                {{$tag->name}}
            </option>
            @endforeach
            @endif

            </option>
        </select>
        <small id="helpId" class="text-muted">Help text</small>
    </div>



    <div class="form-group">
        <label for="body">body</label>
        <input type="text" name="body" id="body" class="form-control" placeholder="add a body" aria-describedby="helpId"
            value="{{$post->body}}" row="3">
        <small id="bodyHelper" class="text-muted">Help text</small>
    </div>
    <button type="submit" class="btn btn-success"> Submit</button>

</form>



@endsection
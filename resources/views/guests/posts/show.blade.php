@extends('layouts.app')

@section('content')
<h1>Post</h1>
<div class="tags">
    Tags:
    @forelse($post->tags as $tag)
    <span>{{$tag->name}}</span>
    @empty
    <span>no tags yet</span>
    @endforelse
</div>
@endsection
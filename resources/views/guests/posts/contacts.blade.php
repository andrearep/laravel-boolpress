@extends('layouts.app')

@section('content')
<div class="container">
    @if(session('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>{{session('message')}}</strong>
    </div>

    <script>
    $(".alert").alert();
    </script>
    @endif
    <form action="{{route('contacts.send')}}" method="post">

        @csrf

        <div class="form-group">
            <label for="full_name">Full Name</label>
            <input type="text" name="full_name" id="full_name" class="full_name" placeholder="insert your full name"
                aria-describedby="helpId" minlength="5" maxlength="40">
            <small id="helpId" class="text-muted">Help text</small>
        </div>

        <div class="form-group">
            <label for="email">Email address</label>
            <input type="text" name="email" id="email" class="email" placeholder="insert your email address"
                aria-describedby="helpId" minlength="5" maxlength="40">
            <small id="helpId" class="text-muted">Help text</small>
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea type="text" name="message" id="message" class="message" placeholder="message..."
                row="5"> </textarea>

        </div>

        <button type="submit" class="btn btn-primary btn-block">invia</button>
    </form>
</div>
@endsection
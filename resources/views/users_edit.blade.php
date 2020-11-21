@extends('main')

@section('meta')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="description">
    <meta name="author" content="Khanh C. Le">
@endsection

@section('title')
    <title>website_title</title>
@endsection

@section('content')
    <div class="row">
        <form action="/users/{{$user->id}}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-row">
                <div class="form-group">
                    <label for="nameInput">User name</label>
                    <input id="nameInput" type="text" class="form-control" name="name" value="{{$user->name}}"/>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="emailInput">Email address</label>
                    <input id="emailInput" type="email" class="form-control" name="email" value="{{$user->email}}"/>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="passwordInput">Password</label>
                    <input id="passwordInput" type="password" class="form-control" name="password" value="{{$user->password}}"/>
                </div>
            </div>

            <input type="submit" class="btn btn-primary" value="Submit">

        </form>
    </div>
@endsection

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

            <input type="text" name="name" value="{{$user->name}}"/>
            <input type="text" name="email" value="{{$user->email}}">
            <input type="password" name="password" value="{{$user->password}}">

            <input type="submit" value="Submit">
        </form>
    </div>
@endsection

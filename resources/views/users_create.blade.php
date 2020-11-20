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
        user_create.blade.php
        <form action="/users" method="post">
            @csrf
            <input type="text" name="name">
            <input type="text" name="email">
            <input type="password" name="password">
            <input type="submit" value="Submit">
        </form>
    </div>
@endsection

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
        <div class="col-md-8">
            <table class="table">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Modify</th>
                </tr>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td><a href="{{route('users.edit', ['user' => $user])}}">edit</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection

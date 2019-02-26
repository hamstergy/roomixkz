@extends('layouts.admin')

@section('content')
    <h1>Пользователи</h1>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>Created</th>
                <th>Updated</th>
            </tr>
            </thead>
            <tbody>
            @if($users)
                @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->create_at}}</td>
                    <td>{{$user->updated_at}}</td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
@stop

@extends('index')


@section('wrap')

<table class="table table-hover">
    <thead>
        <th>編號</th>
        <th>信箱</th>
        <th>暱稱</th>
        <th>電話</th>
        <th>狀態</th>
    </thead>
    <tbody>
        <td>{{$user->id}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->nickname}}</td>
        <td>{{$user->phone}}</td>
        <td>{{$user->status}}</td>
    </tbody>
</table>

@endsection
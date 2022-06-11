@extends('layouts.loggedin')
@section('content')
    <hr>
    <center>
        <h1>Dashboard For Admin</h1>
    </center>
    <hr>
    <table border="1">
        <tr height="40px">
            <th width="80px">Id</th>
            <th width="80px">Name</th>
        </tr>

        @foreach($users as $us)
            <tr height="40px">
                <td>{{$us->id}}</td>
                <td><a href="{{route('details',['id'=>$us->id])}}">{{$us->name}}</a></td>
            </tr>
        @endforeach
    </table>
    <hr>
@endsection
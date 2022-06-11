@extends('layouts.loggedin')
@section('content')
    <hr>
    <table>
        <tr height="40px">
            <td width="80px">Name:</td>
            <td width="80px">{{$user->name}}</td>
        </tr>

        <tr height="40px">
            <td>Email:</td>
            <td>{{$user->email}}</td>
        </tr>

        <tr height="40px">
            <td>Role:</td>
            <td>{{$user->type}}</td>
        </tr>
    </table>
    <hr>
@endsection
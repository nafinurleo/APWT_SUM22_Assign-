@extends('layouts.wthlogin')
@section('content')
    <hr>
    <form method="post" action="">
        {{@csrf_field()}}

        <table>
            <tr>
                <td>
                    Email:
                </td>

                <td>
                    <input type="email" name="email" placeholder="Enter email" value="{{old('email')}}">
                    @error('email')
                        {{$message}}
                    @enderror
                </td>
            </tr>

            <tr>
                <td>
                    Password:
                </td>

                <td>
                    <input type="password" name="password">
                    @error('password')
                        {{$message}}
                    @enderror
                </td>
            </tr>
        </table>

        <input type="submit" value="Login">
    </form>
    <hr>
@endsection
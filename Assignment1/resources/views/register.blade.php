@extends('layouts.wthlogin')
@section('content')
    <hr>
    <form method="post" action="">
        {{@csrf_field()}}

        <table>
            <tr>
                <td>
                    Name:
                </td>

                <td>
                    <input type="text" name="name" placeholder="name" value="{{old('name')}}">
                    @error('name')
                        {{$message}}
                    @enderror
                </td>
            </tr>

            <tr>
                <td>
                    Email:
                </td>

                <td>
                    <input type="email" name="email" placeholder="email" value="{{old('email')}}">
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
                    <input type="password" name="password" placeholder="password">
                    @error('password')
                        {{$message}}
                    @enderror
                </td>
            </tr>

            <tr>
                <td>
                    Confirm Password:
                </td>

                <td>
                    <input type="password" name="conf_password">
                    @error('conf_password')
                        {{$message}}
                    @enderror
                </td>
            </tr>
        </table>
        
        <input type="submit" value="Submit">
    </form>
    <hr>
@endsection
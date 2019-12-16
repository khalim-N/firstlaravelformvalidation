@extends('layout.app')


@section('content')


<table border = "1">
        <tr>
        <td>Id</td>
        <td>txtName</td>
        <td>txtEmail</td>
        <td>txtPhone</td>
        <td>txtMsg</td>
        </tr>
        @foreach ($message as $message)
        <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->txtName }}</td>
        <td>{{ $user->txtEmail }}</td>
        <td>{{ $user->txtPhone }}</td>
        <td>{{ $user->txtMsg }}</td>
        </tr>
        @endforeach
        </table>

@endsection


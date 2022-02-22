@extends('templates.template')

@section('content')

@php        
    $user = DB::table('users')->where('user','LIKE','%'.$_GET['user'].'%')->first();
@endphp

<div class="userResult">
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Usuário</th>
                <th>Senha</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>{{$user->id}}</th>
                <td>{{$user->user}}</td>
                <td>{{$user->password}}</td>
                <td>
                    <a href="{{ url('edit/'.$user->id) }}">
                        <button class="">Editar</button>
                    </a>
                </td>
                <td>
                    <a href="{{ url('destroy/'.$user->id) }}">
                        <button class="">Deletar</button>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
    <div class="btnBack">
        <a href="{{ url('/') }}">
            <button>Voltar</button>
        </a>
    </div>
</div>
@endsection
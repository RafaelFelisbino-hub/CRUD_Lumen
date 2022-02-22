@extends('templates.template')

@section('content')

<div class="btnRegister">
    <a href="{{url('create')}}">
        <button>Cadastrar</button>
    </a>
</div>

<div class="searchUser">
    <h2>Pesquisar usuário</h2>
    <form action="{{ url('search')}}" method="GET" name="username" id="username">
        <label for="user">Usuário:</label>
        <input type="text" name="user" id="user">
        <button type="submit">Pesquisar</button>
    </form>
</div>

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
            @foreach($user as $users)
            @php
                $user = $users->find($users->id);
            @endphp
            <tr>
                <th>{{$users->id}}</th>
                <td>{{$users->user}}</td>
                <td>{{$users->password}}</td>
                <td>
                    <a href="{{ url('edit/'.$users->id) }}">
                        <button class="">Editar</button>
                    </a>
                </td>
                <td>
                    <a href="{{ url('destroy/'.$user->id) }}">
                        <button class="">Deletar</button>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
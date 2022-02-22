@extends('templates.template')

@section('content')

<h1>Atualizar</h1>

<div class="formRegister">
    <form action="{{url('edit/'.$user->id)}}" method="POST" name="formUpdate" id="formUpdate">
        <label for="user">Usuário</label>
        <input type="text" name="user" id="userId" value="{{$user->user ?? ''}}"><br>
        <label for="password" id="formPassword">Senha</label>
        <input type="password" name="password" id="passwordId" value="{{$user->password ?? ''}}"><br>
        <div class="btnSuccess">
            <button type="submit">Atualizar</button>
        </div>
    </form>
</div>

@endsection
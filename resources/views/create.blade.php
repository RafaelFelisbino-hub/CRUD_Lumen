@extends('templates.template')

@section('content')

<div class="formRegister">
    <form action="{{url('create')}}" method="POST" name="formRegister" id="formRegister" class="formCreate">
        <label for="user">Usuário</label>
        <input type="text" name="user" id="userId"><br>
        <label for="password" id="formPassword">Senha</label>
        <input type="password" name="password" id="passwordId"><br>
        <div class="btnSuccess">
            <button type="submit" class="btn-Register">Cadastrar</button>
        </div>
    </form>
</div>

@endsection
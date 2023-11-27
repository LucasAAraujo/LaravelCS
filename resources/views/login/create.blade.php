@if ($mensagem = Session::get('erro'))
    {{ $mensagem }}
@endif

@if ($errors->any())
    @foreach ($errors->all() as $error)
        {{ $error }} <br>
    @endforeach
@endif
<form action="{{ route('users.store')}}" method="POST">
@csrf
Nome: <br> <input type="text" name="Firstname"><br>
Sobrenome: <br> <input type="text" name="Lastname"><br>
Email: <br> <input type="email" name="email"><br>
Senha: <br> <input type="password" name="password"><br>
<button type="submit">Cadastrar</button>
</form>
<!DOCTYPE html>
<html>
<head>
	<title>Editar Cliente</title>
</head>
<body>
	<h1>Editar Cliente</h1>
	@if ($errors->any())
	<ul>
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>
	@endif

	@foreach ($clientes as $p)
	<form action="/clientes/gravar/{{ $p->id }}" method="post">
		@csrf
		<p>Nome: <input type="text" name="nome" value="{{ $p->nome }}"></p>
		<p>Data de Nascimento: <input type="text" name="data_nascimento" value="{{ $p->data_nascimento }}"></p>
		<p>CPF: <input type="text" name="cpf" value="{{ $p->cpf }}"></p>
        <p>Email: <input type="text" name="email" value="{{ $p->email }}"></p>
        <p>Telefone: <input type="text" name="telefone" value="{{ $p->telefone }}"></p>
		<p><input type="submit" value="Salvar"></p>
		@endforeach
	</form>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Listagem de Clientes</title>
</head>
<body>
@foreach ($cliente as $p)
	<h1>{{ $p->nome }}</h1>
	<p>Data de Nascimento: {{ $p->data_nascimento }}</p>
	<p>CPF: {{ $p->cpf }}</p>
    <p>Email: {{ $p->email }}</p>
    <p>Telefone: {{ $p->telefone }}</p>
	<p><a href="/clientes">Voltar</a></p>
@endforeach
</body>
</html>
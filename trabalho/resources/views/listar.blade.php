<!DOCTYPE html>
<html>
<head>
	<title>Listagem de Clientes</title>
</head>
<body>
	<h1>Listagem de Clientes</h1>
	@if (session('mensagem'))
		<h2>{{ session('mensagem') }}</h2>
	@endif
	<a href="/clientes/novo">Novo Cliente</a>
	<table>
	    <thead>
            <th>id</th>
	        <th>Nome</th>
	        <th>Data de Nascimento</th>
            <th>CPF</th>
            <th>Email</th>
            <th>Telefone</th>
	        <th>Opções</th>
	    </thead>
	    <tbody>
	        @foreach ($clientes as $cliente)
	        <tr>
                <td>{{ $cliente->id }}</td>
	            <td>{{ $cliente->nome }}</td>
	            <td>{{ $cliente->data_nascimento }}</td>
                <td>{{ $cliente->cpf }}</td>
                <td>{{ $cliente->email }}</td>
                <td>{{ $cliente->telefone }}</td>
	            <td>
	            	<a href="/clientes/{{ $cliente->id }}">Visualizar</a>
	            	<a href="/clientes/editar/{{ $cliente->id }}">Editar</a>
	            	<a href="/clientes/excluir/{{ $cliente->id }}">Excluir</a>
            	</td>
	        </tr>
	        @endforeach
	    </tbody>
	</table>

</body>
</html>
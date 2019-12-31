@extends('layouts.appadmin')

@section('content')
	<h1>Datos de Usuario</h1>
	<form action="{{route('updateuser',$users->id)}}" method="post">
	@method('PUT')
	@csrf
		Rol: <input type="text" name="role_id" placeholder="{{$users->role_id}}">
		<button type="submit">Enviar</button><br><br>

		1 --> Administrador<br>
		2 --> Estandar
	</form>

@endsection
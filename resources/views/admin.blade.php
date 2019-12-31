@extends('layouts.appadmin')

@section('content')

<h1>Usuarios</h1>

	<table style="text-align: center;">
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Se unió en</th>
        <th>Rol</th>
        
      </tr>
      @foreach($users as $user)
      <tr>
      	<td>{{$user->id}}</td>
      	<td>{{$user->name}}</td>
      	<td>{{$user->email}}</td>
      	<td>{{$user->created_at}}</td>
      	<td>{{$user->role_id}}</td>
      	<td>
          <a title="Editar" href="{{route('edituser',$user->id)}}"><i class="fas fa-pencil-alt" style="color:black"></i></a>
        </td>
      @endforeach
    </tr>
@endsection
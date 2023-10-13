@extends('layaouts.app')

@section('titulo')
pagina Home desde titulo
@endsection

@section('contenido')
<div class="overflow-x-auto">
  <table class="min-w-full table-auto">
    <thead>
      <tr>
        <th class="px-4 py-2">ID</th>
        <th class="px-4 py-2">Name</th>
        <th class="px-4 py-2">Username</th>
        <th class="px-4 py-2">Email</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
    <tr>
        <td class="border px-4 py-2">{{ $user->id }}</td>
        <td class="border px-4 py-2">{{ $user->name }}</td>
        <td class="border px-4 py-2">{{ $user->username }}</td>
        <td class="border px-4 py-2">{{ $user->email }}</td>
    </tr>
    @endforeach
      
    </tbody>
  </table>
</div>
@endsection
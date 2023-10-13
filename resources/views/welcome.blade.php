@extends('layaouts.app')

@section('titulo')
Pagina Welcome
@endsection

@section('contenido')
<div class="overflow-x-auto mt-10">
<form action="#" method="GET" class="flex gap-2 items-center">

            <div class="mb-4 w-40">
                <label for="search" class="text-gray-600 block mb-2">Buscar:</label>
                <input type="text" id="search" name="search" class="w-full border rounded p-2" placeholder="Escribe tu búsqueda">
            </div>
            <div class="text-center mt-4">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Buscar
                </button>
            </div>
        </form>


  <table class="min-w-full table-auto">
    <thead class="bg-gray-600">
      <tr>
        <th class="px-4 py-2 text-white">ID</th>
        <th class="px-4 py-2 text-white">Name</th>
        <th class="px-4 py-2 text-white">Username</th>
        <th class="px-4 py-2 text-white">Email</th>
        <th class="px-4 py-2 text-white">Acciones</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
    <tr>
        <td class="border px-4 py-2 text-center bg-gray-100">{{ $user->id }}</td>
        <td class="border px-4 py-2 text-center bg-gray-100">{{ $user->name }}</td>
        <td class="border px-4 py-2 text-center bg-gray-100">{{ $user->username }}</td>
        <td class="border px-4 py-2 text-center bg-gray-100">{{ $user->email }}</td>
        <td class="border px-4 py-2 text-center bg-gray-100 flex gap-2 justify-center"><form method="post" action="{{ route('destroy', ['id' => $user->id]) }}">
            @csrf
            @method('delete')
            <button value="" type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                Eliminar
            </button>
        </form>
        <form action="{{ route('actualizar', ['id' => $user->id]) }}" method="POST"> <!-- Utiliza POST en el formulario -->
    @csrf
    @method('GET') <!-- Simula una solicitud PUT en una solicitud POST -->
    <!-- Otros campos del formulario aquí -->
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Actualizar</button>
</form>

</td>
    </tr>
    @endforeach
      
    </tbody>
  </table>
</div>
@endsection
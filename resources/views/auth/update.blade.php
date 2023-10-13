@extends('layaouts.app')

@section('titulo')
Actualizar Devstagram
@endsection

@section('contenido')
<div class="md:flex md:justify-center mt-10">
        <div class="md:w-6/12 mr-10">
            <img src="{{ asset('img/register.jpg') }}" alt="Imagen de registro" class="w-300">
        </div>
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            
        <form action="{{ route('update', ['id' => request()->route('id')]) }}" method="POST"> <!-- Usamos POST -->
            @csrf
  
            @method('PUT')
            <div class="mb-5">
                <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">Nombre</label>
                <input type="hidden" id="id" value="{{ request()->route('id') }}" name="id" placeholder="id" class="border p-3 w-full rounded-lg">
                    <?php echo request()->route('id')?>
                <input type="text" id="name" name="name" value="" placeholder="Nombre" class="border p-3 w-full rounded-lg">
        
            </div>
            <div class="mb-5">
                <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">UserName</label>
                <input type="text" id="username" name="username" placeholder="UserName" class="border p-3 w-full rounded-lg">
  
            </div>
            <div class="mb-5">
                <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">Email</label>
                <input type="text" id="email" name="email" placeholder="Email" class="border p-3 w-full rounded-lg">
           
            </div>
            <div class="mb-5">
                <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Password</label>
                <input type="text" id="password" name="password" placeholder="Password" class="border p-3 w-full rounded-lg">
           
            </div>
            <div class="mb-5">
                <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">Repetir Password</label>
                <input type="password_confirmation" id="password_confirmation" name="password_confirmation" placeholder="Password confirmation" class="border p-3 w-full rounded-lg">
             
            </div>


            <button class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg" type="submit">Actualizar</button>
        </form>
        </div>
    </div>
@endsection
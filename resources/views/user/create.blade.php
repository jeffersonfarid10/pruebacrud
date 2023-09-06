<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Usuarios</title>
    <!-- CDN para los estilos -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<x-app-layout>

    <h1 class="py-10 text-center text-red-500 text-2xl font-semibold">Crear nuevo usuario</h1> 
    

    <!-- FORMULARIO PARA CREAR UN NUEVO USUARIO -->
    <div class="w-full max-w-xs mx-auto">
        <form action="{{route('user.crud.store')}}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
          @csrf 

           <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
              Nombre:
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" id="name" type="text" placeholder="Nombre">
          </div>

          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
              Correo:
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="email" id="email" type="email" placeholder="Correo">
          </div>

          <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
              Contraseña:
            </label>
            <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="password" id="password" type="password" placeholder="******************">
        
          </div>
          <div class="flex items-center justify-between">
            <button type="submit" class="bg-red-500 hover:bg-blue-700 text-dark font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
              Crear Usuario
            </button>
          </div>
        </form>
      </div>

</x-app-layout>
</body>
</html>
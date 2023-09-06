<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD de Usuarios</title>

    <!-- CDN para los estilos -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <x-app-layout>
        <h1 class="py-10 text-center text-red-500 text-2xl font-semibold">Ver registros</h1> 
        
        <!-- VISTA PARA MOSTRAR UN REGISTRO -->
        <div class="w-full max-w-xs mx-auto"> 
    
               <div class="mb-4">
                <label class="block text-red-700 text-sm font-bold mb-2" for="username">
                  Nombre:
                </label>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    {{$user->name}}
                </label>
              </div>
    
              <div class="mb-4">
                <label class="block text-red-700 text-sm font-bold mb-2" for="username">
                  Correo:
                </label>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    {{$user->email}}
                </label>
              </div>
    
              
              <div class="flex items-center justify-between">
                <a href="{{route('user.crud.index')}}">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-dark font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Regresar
                    </button>
                </a>
                
              </div>
          </div>

    </x-app-layout>
</body>
</html>
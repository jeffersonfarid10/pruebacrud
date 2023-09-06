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
        <h1 class="py-10 text-center text-red-500 text-2xl font-semibold">CRUD de Usuarios</h1> 
    
        <!-- BOTON PARA CREAR UN NUEVO USUARIO -->
        <button class=" my-10 mx-10 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            <a href="{{route('user.crud.create')}}">Crear nuevo usuario</a>
        </button>

        <br>


        <!-- TABLA DE USUARIOS -->
        <table class="table-auto border mx-auto">
            <thead class="border">
              <tr>
                <th class="text-red-500 border px-20">Id</th>
                <th class="text-red-500 border px-20">Nombre</th>
                <th class="text-red-500 border px-20">Correo</th>
                <th colspan="3" class="text-red-500 border px-20">Opciones</th>
              </tr>
            </thead>
            <tbody class="border">


                <!-- RECORRER LA COLECCION DE USUARIOS -->
                @foreach ($users as $user)
                    <tr class="py-7">
                        <td class="border text-center">{{$user->id}}</td>
                        <td class="border text-center">{{$user->name}}</td>
                        <td class="border text-center">{{$user->email}}</td>
                        <td class="py-5">
                            <a href="{{route('user.crud.show', $user)}}">
                                <button class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Ver</button>
                            </a>
                        </td>
                        <td>
                            <a href="{{route('user.crud.edit', $user)}}">
                                <button class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Editar</button>
                            </a>
                        </td>
                        <td>
                            <form action="{{route('user.crud.destroy', $user)}}" method="POST">
                                @csrf 
                                @method('delete')
                                <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            
            </tbody>
          </table>

    </x-app-layout>
</body>
</html>
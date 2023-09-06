<x-app-layout> 
    <!-- CDN para los estilos -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    {{--<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>--}}

    <h1 class="py-10 text-center text-red-500 text-2xl font-semibold">Panel de administración</h1> 


    <!-- BOTON PARA IR AL CRUD DE USUARIOS -->
    <a href="{{route('user.crud.index')}}">
        <button class="border bg-green-500 text-blue-700 rounded-md px-4 py-2 m-2">
            CRUD de Usuarios
        </button>
    </a>
    

    <!-- BOTON PARA IR AL CRUD DE VIDEOJUEGOS -->
    <a href="">
        <button class="border bg-green-500 text-blue-700 rounded-md px-4 py-2 m-2">
            CRUD de Videojuegos
        </button>
    </a>
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{--<x-welcome />--}}
            </div>
        </div>
    </div>
</x-app-layout>

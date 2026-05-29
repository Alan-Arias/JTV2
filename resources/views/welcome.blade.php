<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>INF513 - Grupo 04CC</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased bg-gray-50 text-gray-800">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-indigo-500 selection:text-white">

            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ route('dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-500">Panel de Control</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-500">Iniciar Sesión</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-500">Registrarse</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-4xl mx-auto p-6 lg:p-8">

                <div class="text-center space-y-3 mb-12">
                    <span class="px-3 py-1 bg-indigo-100 text-indigo-800 text-xs font-semibold tracking-wider uppercase rounded-full">
                        U.A.G.R.M. - Facultad Integral del Chaco
                    </span>
                    <h1 class="text-4xl font-extrabold text-gray-900 tracking-tight sm:text-5xl">
                        Tecnología Web (INF513)
                    </h1>
                    <p class="text-xl text-gray-500 max-w-xl mx-auto">
                        Sistema Web JetStream - <strong class="text-indigo-600">Grupo 04CC</strong>
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">

                    <div class="scale-100 p-6 bg-white rounded-lg shadow-md shadow-gray-500/5 flex motion-safe:hover:scale-[1.01] transition-all duration-250 border border-gray-100">
                        <div class="space-y-4">
                            <div class="flex items-center justify-center h-12 w-12 rounded-lg bg-indigo-50 text-indigo-600">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5zm6-10.125a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zm1.294 6.336a6.721 6.721 0 01-3.17.789 6.721 6.721 0 01-3.168-.789 3.376 3.376 0 016.338 0z" />
                                </svg>
                            </div>

                            <h2 class="text-xl font-semibold text-gray-900">Módulo CRUD Persona</h2>
                            <p class="text-gray-500 text-sm leading-relaxed">
                                Sistema de información web para la administración y control de registros de personal. Construido de forma robusta sobre Laravel, utilizando Jetstream y Tailwind CSS para interfaces responsivas listas para producción.
                            </p>

                            <div class="pt-2">
                                @auth
                                    <a href="{{ route('personas.index') }}" class="inline-flex items-center text-sm font-semibold text-indigo-600 hover:text-indigo-800">
                                        Gestionar Agenda &rarr;
                                    </a>
                                @else
                                    <a href="{{ route('login') }}" class="inline-flex items-center text-sm font-semibold text-indigo-600 hover:text-indigo-800">
                                        Acceder al CRUD &rarr;
                                    </a>
                                @endauth
                            </div>
                        </div>
                    </div>

                    <div class="p-6 bg-white rounded-lg shadow-md shadow-gray-500/5 flex border border-gray-100">
                        <div class="w-full space-y-4">
                            <div class="flex items-center justify-center h-12 w-12 rounded-lg bg-emerald-50 text-emerald-600">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                                </svg>
                            </div>

                            <h2 class="text-xl font-semibold text-gray-900">Integrantes del Grupo</h2>

                            <ul class="space-y-3 pt-1">
                                <li class="flex items-center space-x-3 p-2 rounded-md hover:bg-gray-50 transition-colors">
                                    <div class="h-8 w-8 rounded-full bg-gray-200 flex items-center justify-center font-bold text-gray-600 text-xs">
                                        JB
                                    </div>
                                    <span class="text-sm font-medium text-gray-700">Jorge Alberto Bustamante Galarza</span>
                                </li>
                                <li class="flex items-center space-x-3 p-2 rounded-md hover:bg-gray-50 transition-colors">
                                    <div class="h-8 w-8 rounded-full bg-gray-200 flex items-center justify-center font-bold text-gray-600 text-xs">
                                        JM
                                    </div>
                                    <span class="text-sm font-medium text-gray-700">Josep Estalin Moscoso Flores</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

                <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center gap-4">
                            <span>Docente: Ing. Evans Balcazar Veizaga</span>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Camiri - Santa Cruz - Bolivia
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

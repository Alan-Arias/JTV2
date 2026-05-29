<x-app-layout>

    <x-slot name="header">

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard
        </h2>

    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">

                <h1 class="text-2xl font-bold mb-5">
                    Sistema CRUD Personas
                </h1>

                <a href="{{ route('persona.index') }}"
                   class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 rounded">

                    Ir al CRUD Personas

                </a>

            </div>

        </div>

    </div>

</x-app-layout>

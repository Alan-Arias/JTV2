<x-app-layout>

    <div class="p-6">

        <a href="{{ route('persona.create') }}"
           class="bg-blue-500 text-white px-4 py-2 rounded">
            Nueva Persona
        </a>

        <table class="table-auto w-full mt-5 border">

            <thead>
                <tr>
                    <th>Foto</th>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Celular</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>

                @foreach($personas as $p)

                <tr class="border">

                    <td>

                        @if($p->per_foto)

                            <img src="{{ asset('fotos/'.$p->per_foto) }}"
                                 width="70">

                        @endif

                    </td>

                    <td>{{ $p->per_cod }}</td>

                    <td>{{ $p->per_nom }}</td>

                    <td>{{ $p->per_email }}</td>

                    <td>{{ $p->per_cel }}</td>

                    <td>

                        <a href="{{ route('persona.edit',$p->per_cod) }}"
                           class="bg-yellow-500 text-white px-3 py-1 rounded">
                            Editar
                        </a>

                        <form action="{{ route('persona.destroy',$p->per_cod) }}"
                              method="POST"
                              class="inline">

                            @csrf
                            @method('DELETE')

                            <button class="bg-red-500 text-white px-3 py-1 rounded">
                                Eliminar
                            </button>

                        </form>

                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</x-app-layout>

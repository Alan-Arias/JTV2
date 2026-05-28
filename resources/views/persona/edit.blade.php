<x-app-layout>

<div class="p-6">

<form action="{{ route('persona.update',$persona->per_cod) }}"
      method="POST"
      enctype="multipart/form-data">

    @csrf
    @method('PUT')

    <input type="text"
           value="{{ $persona->per_nom }}"
           name="per_nom"
           class="border p-2 w-full mb-3">

    <input type="text"
           value="{{ $persona->per_appm }}"
           name="per_appm"
           class="border p-2 w-full mb-3">

    <input type="text"
           value="{{ $persona->per_prof }}"
           name="per_prof"
           class="border p-2 w-full mb-3">

    <input type="text"
           value="{{ $persona->per_telf }}"
           name="per_telf"
           class="border p-2 w-full mb-3">

    <input type="text"
           value="{{ $persona->per_cel }}"
           name="per_cel"
           class="border p-2 w-full mb-3">

    <input type="email"
           value="{{ $persona->per_email }}"
           name="per_email"
           class="border p-2 w-full mb-3">

    <input type="text"
           value="{{ $persona->per_dir }}"
           name="per_dir"
           class="border p-2 w-full mb-3">

    <input type="date"
           value="{{ $persona->per_fnac }}"
           name="per_fnac"
           class="border p-2 w-full mb-3">

    <input type="text"
           value="{{ $persona->per_lnac }}"
           name="per_lnac"
           class="border p-2 w-full mb-3">

    <input type="file"
           name="per_foto"
           class="border p-2 w-full mb-3">

    <label>
        <input type="checkbox"
               name="per_est"
               {{ $persona->per_est ? 'checked' : '' }}>
        Activo
    </label>

    <button class="bg-blue-500 text-white px-5 py-2 rounded block mt-3">
        Actualizar
    </button>

</form>

</div>

</x-app-layout>

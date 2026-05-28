<x-app-layout>

<div class="p-6">

<form action="{{ route('persona.store') }}"
      method="POST"
      enctype="multipart/form-data">

    @csrf

    <input type="text" name="per_cod" placeholder="Codigo" class="border p-2 w-full mb-3">

    <input type="text" name="per_nom" placeholder="Nombre" class="border p-2 w-full mb-3">

    <input type="text" name="per_appm" placeholder="Apellido" class="border p-2 w-full mb-3">

    <input type="text" name="per_prof" placeholder="Profesion" class="border p-2 w-full mb-3">

    <input type="text" name="per_telf" placeholder="Telefono" class="border p-2 w-full mb-3">

    <input type="text" name="per_cel" placeholder="Celular" class="border p-2 w-full mb-3">

    <input type="email" name="per_email" placeholder="Email" class="border p-2 w-full mb-3">

    <input type="text" name="per_dir" placeholder="Direccion" class="border p-2 w-full mb-3">

    <input type="date" name="per_fnac" class="border p-2 w-full mb-3">

    <input type="text" name="per_lnac" placeholder="Lugar nacimiento" class="border p-2 w-full mb-3">

    <input type="file" name="per_foto" class="border p-2 w-full mb-3">

    <button class="bg-green-500 text-white px-5 py-2 rounded">
        Guardar
    </button>

</form>

</div>

</x-app-layout>

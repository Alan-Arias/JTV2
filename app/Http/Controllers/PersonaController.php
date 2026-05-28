<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function index()
    {
        $personas = Persona::all();

        return view('persona.index', compact('personas'));
    }

    public function create()
    {
        return view('persona.create');
    }

    public function store(Request $request)
    {
        $request->validate([

            'per_cod' => 'required|max:14|unique:persona,per_cod',
            'per_nom' => 'required|max:150',
            'per_appm' => 'required|max:150',
            'per_prof' => 'required|max:100',
            'per_telf' => 'required|max:17',
            'per_cel' => 'required|max:17',
            'per_email' => 'required|email|unique:persona,per_email',
            'per_dir' => 'required|max:150',
            'per_fnac' => 'required|date',
            'per_lnac' => 'required|max:150',
        ]);

        $foto = null;

        if($request->hasFile('per_foto'))
        {
            $foto = time().'_'.$request->per_foto->getClientOriginalName();

            $request->per_foto->move(public_path('fotos'), $foto);
        }

        Persona::create([

            'per_cod' => $request->per_cod,
            'per_nom' => $request->per_nom,
            'per_appm' => $request->per_appm,
            'per_prof' => $request->per_prof,
            'per_telf' => $request->per_telf,
            'per_cel' => $request->per_cel,
            'per_email' => $request->per_email,
            'per_dir' => $request->per_dir,
            'per_fnac' => $request->per_fnac,
            'per_lnac' => $request->per_lnac,
            'per_est' => true,
            'per_create' => now(),
            'per_update' => now(),
            'per_foto' => $foto
        ]);

        return redirect()->route('persona.index');
    }

    public function edit($id)
    {
        $persona = Persona::findOrFail($id);

        return view('persona.edit', compact('persona'));
    }

    public function update(Request $request, $id)
    {
        $persona = Persona::findOrFail($id);

        $request->validate([

            'per_nom' => 'required|max:150',
            'per_appm' => 'required|max:150',
            'per_prof' => 'required|max:100',
            'per_telf' => 'required|max:17',
            'per_cel' => 'required|max:17',
            'per_email' => 'required|email|unique:persona,per_email,'.$persona->per_cod.',per_cod',
            'per_dir' => 'required|max:150',
            'per_fnac' => 'required|date',
            'per_lnac' => 'required|max:150',
        ]);

        if($request->hasFile('per_foto'))
        {
            $foto = time().'_'.$request->per_foto->getClientOriginalName();

            $request->per_foto->move(public_path('fotos'), $foto);

            $persona->per_foto = $foto;
        }

        $persona->update([

            'per_nom' => $request->per_nom,
            'per_appm' => $request->per_appm,
            'per_prof' => $request->per_prof,
            'per_telf' => $request->per_telf,
            'per_cel' => $request->per_cel,
            'per_email' => $request->per_email,
            'per_dir' => $request->per_dir,
            'per_fnac' => $request->per_fnac,
            'per_lnac' => $request->per_lnac,
            'per_est' => $request->has('per_est'),
            'per_update' => now(),
            'per_foto' => $persona->per_foto
        ]);

        return redirect()->route('persona.index');
    }

    public function destroy($id)
    {
        $persona = Persona::findOrFail($id);

        $persona->delete();

        return redirect()->route('persona.index');
    }
}

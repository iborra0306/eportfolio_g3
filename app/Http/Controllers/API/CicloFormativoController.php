<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CicloFormativoResource;
use App\Models\CicloFormativo;
use App\Models\FamiliaProfesional;
use Illuminate\Http\Request;

class CicloFormativoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, FamiliaProfesional $familiaProfesional, CicloFormativo $cicloFormativo)
    {
        $query = CicloFormativo::query();

        if ($request->search) {
            $query->where('nombre', 'like', '%' . $request->search . '%');
        }

        return CicloFormativoResource::collection(
            $query->orderBy($request->sort ?? 'id', $request->order ?? 'asc')->paginate($request->per_page)
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, CicloFormativo $cicloFormativo)
    {
        abort_if ($request->user()->cannot('store', $cicloFormativo), 403);


        $cicloFormativoDato = $request->validate([
            'nombre' => 'required',
            'codigo' => 'required|unique:ciclos_formativos,codigo',
            'grado' => 'required|in:basico,medio,superior',
            //'descripcion' => 'required',
            'familia_profesional_id' => 'required|exists:familias_profesionales,id'
        ]);

        //dd($cicloFormativoDato);

        $cicloFormativo = CicloFormativo::create($cicloFormativoDato);

        return new CicloFormativoResource($cicloFormativo);
    }

    /**
     * Display the specified resource.
     */
    public function show(FamiliaProfesional $familiaProfesional, CicloFormativo $cicloFormativo)
    {
        return new CicloFormativoResource($cicloFormativo);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FamiliaProfesional $familiaProfesional, CicloFormativo $cicloFormativo)
    {
        abort_if ($request->user()->cannot('update', $cicloFormativo), 403);
        $cicloFormativoDato = json_decode($request->getContent(), true);
        $cicloFormativo->update($cicloFormativoDato);

        return new CicloFormativoResource($cicloFormativo);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, FamiliaProfesional $familiaProfesional, CicloFormativo $cicloFormativo)
    {
        abort_if ($request->user()->cannot('delete', $cicloFormativo), 403);

        try {
            $cicloFormativo->delete();
            return response()->json(null, 204);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error: ' . $e->getMessage()
            ], 400);
        }
    }
}

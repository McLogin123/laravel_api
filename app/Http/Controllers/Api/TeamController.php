<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::with('drivers')->get();
        return response()->json([
            'success' => true,
            'data' => $teams,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validador = Validator::make($request->all(), [
            'full_team_name' => 'required|string|max:100',
            'team' => 'required|string|max:100',
            'chassis' => 'required|string|max:50',
            'power_unit' => 'required|string|max:100',
            'first_team_entry' => 'required|string|max:250',
            'photo_url' => 'nullable|url|max:5000'
        ]);
        if ($validador->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Error de validacion',
                'errors' => $validador->errors()
            ]);
        }
        
        $team = Team::create($request->all());
        return response()->json([
            'success' => true,
            'data' => $team,
            'message' => 'Equipo creado'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $team = Team::with('drivers')->find($id);

        if (!$team) {
            return response()->json([
                'success' => false,
                'message' => 'Equipo no encontrado'
            ]);
        }

        return response()->json([
            'success' => true,
            'data' => $team,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $team = Team::find($id);

        if(!$team) {
            return response()->json([
                'success' => false,
                'message' => 'Equipo no encontrado'
            ]);
        }

        $validador = Validator::make($request->all(), [
            'full_team_name' => 'sometimes|required|string|max:100',
            'team' => 'sometimes|required|string|max:100',
            'chassis' => 'sometimes|required|string|max:50',
            'power_unit' => 'sometimes|required|string|max:100',
            'first_team_entry' => 'sometimes|required|string|max:250',
            'photo_url' => 'nullable|url|max:5000'
        ]);

        if ($validador->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Error de validacion',
                'errors' => $validador->errors()
            ]);
        }

        $team->update($request->all());

        return response()->json([
            'success' => true,
            'data' => $team,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $team = Team::find($id);
        if (!$team) {
            return response()->json([
                'success' => false,
                'message' => 'Equipo no encontrado'
            ]);
        }
        
        $team->delete();

        return response()->json([
            'success' => true,
            'message' => 'Equipo eliminado'
        ]);
    }
}

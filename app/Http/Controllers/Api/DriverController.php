<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\Controller;
use App\Models\Driver;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $drivers = Driver::with('team')->get();
        return response()->json([
            'success' => true,
            'data' => $drivers,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validador = Validator::make($request->all(), [
            'number' => 'required|integer|unique:drivers,number|min:1|max:99',
            'name' => 'required|string|max:250',
            'team' => 'required|string|exists:teams,team',
            'photo' => 'nullable|url|max:5000',
            'country' => 'required|string|max:100'
        ]);

        if ($validador->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Error de validacion',
                'errors' => $validador->errors()
            ]);
        }

        $team = Team::where('team', $request->team)->first();
        $data = $request->all();
        $data['team_id'] = $team->id;

        $driver = Driver::create($data);

        return response()->json([
            'success' => true,
            'data' => $driver->load('team'),
            'message' => 'Piloto creado'
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $driver = Driver::with('team')->find($id);

        if(!$driver) {
            return response()->json([
                'success' => false,
                'message' => 'Piloto no encontrado'
            ]);
        }

        return response()->json([
            'success' => true,
            'data' => $driver,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $driver = Driver::find($id);

        if(!$driver) {
            return response()->json([
                'success' => false,
                'message' => 'Piloto no encontrado'
            ]);
        }

        $validador = Validator::make($request->all(), [
            'number' => 'sometimes|required|integer|unique:drivers,number,'. $id .'|min:1|max:99',
            'name' => 'sometimes|required|string|max:250',
            'team' => 'sometimes|required|string|exists:teams,team',
            'photo' => 'nullable|url|max:5000',
            'country' => 'sometimes|required|string|max:100'
        ]);
        if ($validador->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Error de validacion',
                'errors' => $validador->errors()
            ]);
        }

        $data = $request->all();
        if ($request->has('team')) {
            $team = Team::where('team', $request->team)->first();
            $data['team_id'] = $team->id;
        }

        $driver->update($data);
        return response()->json([
            'success' => true,
            'data' => $driver->load('team'),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $driver = Driver::find($id);
        if(!$driver) {
            return response()->json([
                'success' => false,
                'message' => 'Piloto no encontrado'
            ]);
        }

        $driver->delete();
        return response()->json([
            'success' => true,
            'message' => 'Piloto eliminado'
        ]);
    }
}

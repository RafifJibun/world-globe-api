<?php

namespace App\Http\Controllers;

use App\Models\Attraction;
use Illuminate\Http\Request;

class AttractionController extends Controller
{
    public function index($country)
    {
        return response()->json(Attraction::where('country_name', $country)->get());
    }

    public function store(Request $request)
    {
        $request->validate([
            'country_name' => 'required|string',
            'name' => 'required|string',
            'description' => 'nullable|string',
            'image_url' => 'nullable|string',
        ]);

        $attraction = Attraction::create($request->all());
        return response()->json($attraction, 201);
    }

    public function destroy($id)
    {
        Attraction::findOrFail($id)->delete();
        return response()->json(['message' => 'Deleted']);
    }
}
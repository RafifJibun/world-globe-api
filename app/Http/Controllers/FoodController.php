<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index($country)
    {
        return response()->json(Food::where('country_name', $country)->get());
    }

    public function store(Request $request)
    {
        $request->validate([
            'country_name' => 'required|string',
            'name' => 'required|string',
            'description' => 'nullable|string',
            'image_url' => 'nullable|string',
        ]);

        $food = Food::create($request->all());
        return response()->json($food, 201);
    }

    public function destroy($id)
    {
        Food::findOrFail($id)->delete();
        return response()->json(['message' => 'Deleted']);
    }
}
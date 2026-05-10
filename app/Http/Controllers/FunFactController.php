<?php

namespace App\Http\Controllers;

use App\Models\FunFact;
use Illuminate\Http\Request;

class FunFactController extends Controller
{
    public function index($country)
    {
        $facts = FunFact::where('country_name', $country)->get();
        return response()->json($facts);
    }

    public function store(Request $request)
    {
        $request->validate([
            'country_name' => 'required|string',
            'fact' => 'required|string',
        ]);

        $funFact = FunFact::create([
            'country_name' => $request->country_name,
            'fact' => $request->fact,
        ]);

        return response()->json($funFact, 201);
    }

    public function destroy($id)
    {
        FunFact::findOrfail($id)->delete();
        return response()->json(['message' => 'Fun fact deleted successfully']);
    }
}

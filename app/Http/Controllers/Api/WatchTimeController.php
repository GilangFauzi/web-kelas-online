<?php

namespace App\Http\Controllers\Api;

use App\Models\WatchTime;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WatchTimeController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'class_id' => 'required|exists:classes,id',
            'minutes' => 'required|integer',
        ]);

        WatchTime::create($request->all());
        return response()->json(['message' => 'Watch time recorded successfully']);
    }
}

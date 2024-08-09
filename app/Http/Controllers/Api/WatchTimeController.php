<?php

namespace App\Http\Controllers\Api;

use App\Models\WatchTime;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class WatchTimeController extends Controller
{
    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(),[
                'user_id' => 'required|exists:users,id',
                'class_id' => 'required|exists:classes,id',
                'minutes' => 'required|integer',
            ]);
            if ($validator->fails()) return response()->json(['message' => $validator->errors()], 400);

            $data = [
                'user_id' => $request->user_id,
                'class_id' => $request->class_id,
                'minutes' => $request->minutes,
            ];

            WatchTime::create($data);
            return response()->json(['message' => 'Watch time recorded successfully']);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Something Wrong!', 'result' => $e->getMessage()]);
        }
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Atglance;
use Illuminate\Http\Request;

class AtGlanceController extends Controller
{
    public function index()
    {
        $atglances = Atglance::all();
        return response()->json($atglances);
    }
}

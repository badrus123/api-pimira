<?php

namespace App\Http\Controllers;

// use App\Paslon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function __construct()
    {
        // $this->paslon = new Paslon;

    }

    public function getCountBem()
    {
        return response()->json([
            'success' => 'true',
            'data' => DB::select('SELECT suara_bem, count(suara_bem) AS CountOf FROM user GROUP BY suara_bem'),
        ], 200);
    }
    public function getCountDpm()
    {
        return response()->json([
            'success' => 'true',
            'data' => DB::select('SELECT suara_dpm, count(suara_bem) AS CountOf FROM user GROUP BY suara_dpm'),
        ], 200);
    }
    
    
}

    


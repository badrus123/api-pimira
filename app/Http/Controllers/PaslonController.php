<?php

namespace App\Http\Controllers;

use App\Paslon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PaslonController extends Controller
{
    public function __construct()
    {
        $this->paslon = new Paslon;

    }

    public function getPaslonBem()
    {
        return response()->json([
            'success' => 'true',
            'data' => DB::select('select * from paslon where jenis_paslon = :jenis_paslon', ['jenis_paslon' => 'bem']),
        ], 200);
    }
    public function getPaslonDpm()
    {
        return response()->json([
            'success' => 'true',
            'data' => DB::select('select * from paslon where jenis_paslon = :jenis_paslon', ['jenis_paslon' => 'dpm']),
        ], 200);
    }
    public function getPaslonSr()
    {
        return response()->json([
            'success' => 'true',
            'data' => DB::select('select * from paslon where jenis_paslon = :jenis_paslon', ['jenis_paslon' => 'sr']),
        ], 200);
    }
    public function getPaslonKtm()
    {
        return response()->json([
            'success' => 'true',
            'data' => DB::select('select * from paslon where jenis_paslon = :jenis_paslon', ['jenis_paslon' => 'ktm']),
        ], 200);
    }
    public function getPaslonDkv()
    {
        return response()->json([
            'success' => 'true',
            'data' => DB::select('select * from paslon where jenis_paslon = :jenis_paslon', ['jenis_paslon' => 'dkv']),
        ], 200);
    }
    public function getPaslonDi()
    {
        return response()->json([
            'success' => 'true',
            'data' => DB::select('select * from paslon where jenis_paslon = :jenis_paslon', ['jenis_paslon' => 'di']),
        ], 200);
    }
    
}

    


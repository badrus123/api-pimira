<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function __construct()
    {
        $this->user = new User;
    }

    public function findUser(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        if ($username == null || $password == null) {
            return response()->json([
                'success' => 'false',
                'message' => 'Username atau password yang anda masukan salah',
                ], 400);
        } else {
            $data = $this->user->findUserModel($username,$password);
           if (empty($data) || count($data)<=0) {
               return response()->json([
                'success' => 'false',
                'message' => 'Username atau password yang anda masukan salah',
                ], 400);
           } else {
               return response()->json([
                'success' => 'true',
                'data' => $data,
                ], 200);
           }
           
        }
    }
   
    public function updateUser($username, Request $request) {
        $suaraBem = $request->input('suara_bem');
        $suaraDpm = $request->input('suara_dpm');
        $suaraHimpunan = $request->input('suara_himpunan');

        if ($suaraBem == null || $suaraDpm == null || $suaraHimpunan == null) {
            return response()->json([
                'success' => 'false',
                'message' => 'Vote Gagal',
                ], 400);
        } else {
                $data = [
                    'suara_bem' => $suaraBem,
                    'suara_dpm' => $suaraDpm,
                    'suara_himp' => $suaraHimpunan,
                    ];
                $this->user->where('username', $username)->update($data);
                return response()->json([
                    'success' => 'true',
                    'data' => $data,
                ], 200);
        }
    }
    
}
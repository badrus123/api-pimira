<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';
    protected $fillable = [
        'username',
        'password'
    ];
    protected $hidden = [
        'password',
    ];
    public function listUser()
    {
        return $this->all();
    }
    public function findUserModel($username,$password) {
        $dataLogin = ['username' => $username, 'password' => $password];
        return $this->where($dataLogin)->get();
    }
    // public function newUser($data) {
    //     $this->NIM = $data['NIM'];
    //     $this->tahun_kelulusan = $data['tahun_kelulusan'];
    //     $this->save();
    // }
    // public function removeUser($NIM) {
    //     $isExists = $this->where('NIM', $NIM)->limit(1)->count() == 1;
    //     if ($isExists) {
    //         return $this->where('NIM', $NIM)->delete();
    //     }
    //     return false;
    // }
}
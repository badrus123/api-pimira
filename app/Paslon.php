<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

Class Paslon extends Model 

{
    protected $table = 'paslon';
    protected $fillable = [
        'id','jenis_paslon'
    ];
    protected $hidden = [
        'id',
    ];
    public function listPaslon()
    {
        return $this->all();
    }


}
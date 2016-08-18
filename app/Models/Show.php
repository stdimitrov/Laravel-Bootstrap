<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    public function getUsers()
    {
        return DB::select('SELECT * FROM users');
    }
}

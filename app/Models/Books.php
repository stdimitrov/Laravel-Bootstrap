<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Model;
/**
 * Created by PhpStorm.
 * Date: 15-Aug-16
 * Time: 03:07 PM
 */
class Books extends Model
{
public function getBooks()
{
   return DB::select('SELECT * FROM users');
}
}
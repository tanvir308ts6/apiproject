<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\support\Facades\DB;

class course extends Model
{
    use HasFactory;
    public $timestamps = false;
    function getnotice()
        {
            $data = DB::table('courses')->get();
            return $data;
        }
}

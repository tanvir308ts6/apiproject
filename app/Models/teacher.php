<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\support\Facades\DB;

class teacher extends Model
{
    use HasFactory;
    public $timestamps = false;
    function getteacher()
    {
        $data = DB::table('teachers')->get();
        return $data;
    }
}

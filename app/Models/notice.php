<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\support\Facades\DB;

class notice extends Model
{
    public $timestamps = false;
    function getnotice()
    {
        $data = DB::table('notices')->get();
        return $data;
    }
}

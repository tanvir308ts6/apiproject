<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\support\Facades\DB;

class faculty extends Model
{
    function getFaculty()
    {
        $data = DB::table('faculty')->get();
        return $data;
    }
}

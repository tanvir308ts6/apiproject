<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\support\Facades\DB;

class department extends Model
{
    function getDepartment($faculty_id)
    {
        $data = DB::table('department')->where('faculty_id', $faculty_id)->get();
        return $data;
    }
}

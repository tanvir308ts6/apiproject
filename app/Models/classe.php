<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\support\Facades\DB;

class classe extends Model
{
    use HasFactory;
    public $timestamps = false;
    function getclass()
    {
        $data = DB::table('classes')->get();
        return $data;
    }
}

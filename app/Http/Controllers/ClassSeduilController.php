<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\classe;

class ClassSeduilController extends Controller
{
    function getclassSedule()
    {
        $classeModel = new classe();
        $data = $classeModel->getclass();
        return response()->json($data);
    }
}

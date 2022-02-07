<?php

namespace App\Http\Controllers;

use  App\Http\controllers\Controller;
use App\models\faculty;
use App\models\department;
use Illuminate\Http\Request;

class facultyController extends Controller
{
    function getFaculty()
    {
        $facultyModel = new Faculty();
        $data = $facultyModel->getFaculty();
        return response()->json($data);
    }

    function getDepartment(Request $request)
    {
        $faculty_id = $request->faculty_id;
        $departmentModel = new Department();
        $data = $departmentModel->getDepartment($faculty_id);
        return response()->json($data);
    }
}

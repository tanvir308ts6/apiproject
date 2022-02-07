<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\teacher;

class teacherController extends Controller
{
    function getTeacher($id = null){
        return $id ? teacher::find($id) : teacher::all();
    }



    protected function addTeacher(Request $request)
    {
        // $request->validate([
        //     'noticeName' => 'required',
        //     
        // ]);
        $teacher = new teacher;
        $teacher->teacher_id = $request->teacher_id;
        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->department = $request->department;
        $teacher->faculty = $request->faculty;
        $teacher->post = $request->post;
        $teacher->degree1 = $request->degree1;
        $teacher->degree2 = $request->degree2;
        $teacher->degree3 = $request->degree3;
        $teacher->phone = $request->phone;
        $teacher->image = $request->image;
        $info = $teacher->save();
        // echo 'Info'. $info;
        if ($info) {
            return ['result' => 'teacher info has been added Successfully.'];
        } else {
            return ['result' => 'Error'];
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class StudentController extends Controller
{
    //
    function show($id = null)
    {
        return $id ? student::find($id) : student::all();
    }

    function paginate()
    {
        $students = student::paginate(5);
        return ($students);
    }

    function search($student_id)
    {
        return student::where("student_id", $student_id)->get();
        // $student = student::orderBy("student_id", "DESC");
        // $request->query('faculty_id');
        // if ($student->faculty_id) {
        //     $student = student::where("faculty_id", $faculty_id)->get();
        // }
    }

    protected function add(Request $request)
    {
        $request->validate([
            'StudentName' => 'required',
            'student_id' => 'required',
            'email' => 'required',
            'fathername' => 'required',
            'mothername' => 'required',
            'birthday' => 'required',
            'presentaddress' => 'required',
            'parmanentaddress' => 'required',
            'gender' => 'required',
            'batch' => 'required',
            'faculty' => 'required',
            'department' => 'required',
            'campus' => 'required',
            'CGPA' => 'required',

        ]);
        $student = new student;
        $student->StudentName = $request->StudentName;
        $student->student_id = $request->student_id;
        $student->email = $request->email;
        $student->fathername = $request->fathername;
        $student->mothername = $request->mothername;
        $student->birthday = $request->birthday;
        $student->presentaddress = $request->presentaddress;
        $student->parmanentaddress = $request->parmanentaddress;
        $student->gender = $request->gender;
        $student->batch = $request->batch;
        $student->department = $request->department;
        $student->faculty = $request->faculty;
        $student->campus = $request->campus;
        $student->CGPA = $request->CGPA;
        $info = $student->save();
        // echo 'Info'. $info;
        if ($info) {
            return ['result' => 'Student has been added Successfully.'];
        } else {
            return ['result' => 'Error'];
        }
    }

    function update(Request $request)
    {
        $student = student::find($request->id);
        $student->StudentName = $request->StudentName;
        $student->student_id = $request->student_id;
        $student->email = $request->email;
        $student->fathername = $request->fathername;
        $student->mothername = $request->mothername;
        $student->birthday = $request->birthday;
        $student->presentaddress = $request->presentaddress;
        $student->parmanentaddress = $request->parmanentaddress;
        $student->gender = $request->gender;
        $student->batch = $request->batch;
        $student->department = $request->department;
        $student->faculty = $request->faculty;
        $student->campus = $request->campus;
        $student->CGPA = $request->CGPA;
        $info = $student->save();
        if ($info) {
            return ['result' => 'Student info has been updated'];
        } else {
            return ['result' => 'Error'];
        }
    }

    function delete($id)
    {
        $student = student::find($id);
        $result = $student->delete();
        if ($result) {
            return ["result" => "Student has been deleted Successfully."];
        } else {
            return ["result" => "Failed to delete"];
        }
    }
// All notice starts from here

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createCourse(Request $request)
    {
        {
            $course = new course;
            $course->course_code = $request->course_code;
            $course->name = $request->name;
            $course->course_credit = $request->course_credit;
            $info = $course->save();
            // echo 'Info'. $info;
            if ($info) {
                return ['result' => 'course has been added Successfully.'];
            } else {
                return ['result' => 'Error'];
            }
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showCourse($id = null)
    {
        return $id ? course::find($id) : course::all();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateCourse(Request $request, $id)
    {
        $course = course::find($request->id);
        $course->course_code = $request->course_code;
        $course->name = $request->name;
        $course->course_credit = $request->course_credit;
        $info = $course->save();
        if ($info) {
            return ['result' => 'course info has been updated'];
        } else {
            return ['result' => 'Error'];
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

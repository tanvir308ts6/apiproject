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

    function searchClass($batch)
    {
        return classe::where("batch", $batch)->get();
    }


    protected function addClass(Request $request)
    {
        // $request->validate([
        //     'noticeName' => 'required',
        //     'notice_id' => 'required',
        //     'email' => 'required',
        //     'fathername' => 'required',
        //     'mothername' => 'required',
        //     'birthday' => 'required',
        //     'presentaddress' => 'required',
        //     'parmanentaddress' => 'required',
        //     'gender' => 'required',
        //     'batch' => 'required',
        //     'faculty' => 'required',
        //     'department' => 'required',
        //     'campus' => 'required',
        //     'CGPA' => 'required',
        // ]);
        $classe = new classe;
        $classe->time = $request->time;
        $classe->saturday = $request->saturday;
        $classe->sunday = $request->sunday;
        $classe->monday = $request->monday;
        $classe->tuesday = $request->tuesday;
        $classe->wednesday = $request->wednesday;
        $classe->thursday = $request->thursday;
        $classe->friday = $request->friday;
        $classe->batch = $request->batch;
        $info = $classe->save();
        // echo 'Info'. $info;
        if ($info) {
            return ['result' => 'Class has been added Successfully.'];
        } else {
            return ['result' => 'Error'];
        }
    }



}

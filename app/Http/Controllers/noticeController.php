<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\notice;

class noticeController extends Controller
{
    function getnotice(){
        $noticeModel = new notice();
        $data = $noticeModel->getnotice();
        return response()->json($data);
    }

    protected function addNotice(Request $request)
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
        $notice = new notice;
        $notice->head = $request->head;
        $notice->notice = $request->notice;
        $notice->date = $request->date;
        $notice->link = $request->link;
        $info = $notice->save();
        // echo 'Info'. $info;
        if ($info) {
            return ['result' => 'notice has been added Successfully.'];
        } else {
            return ['result' => 'Error'];
        }
    }
}

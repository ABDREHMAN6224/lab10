<?php

namespace App\Http\Controllers;

use App\Models\attendance;
use App\Models\classes;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function class()
    {
        $class = request('class');
        $class = classes::find($class);
        $students = $class->attendance;
        return view('users.attendance', compact('students'));
    }
    public function update()
    {
        $student = request('student');
        $class = request('class');
        if(request('is_present') != null){
            attendance::where('student_id', $student)->where('class_id', $class)->update([
                'is_present' => request('is_present')
            ]);
        }
        if(request('reason') != null){
            attendance::where('student_id', $student)->where('class_id', $class)->update([
                'reason' => request('reason')
            ]);
        }
        return redirect()->back();

    }
}

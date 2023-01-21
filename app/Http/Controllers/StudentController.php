<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// to get from model in database
use App\Models\Student;


class StudentController extends Controller
{
    public function index(){
        $data = Student::get();
        //return $data;
        return view('student-list',compact('data'));
    }
    

    public function saveStudent(Request $request){
        //to avoid nilai yang dimasukkan kosong
        $request->validate([
            'name' => 'required',
            'time' => 'required',
            'mahallah' => 'required',
            'position' => 'required',
            'phoneNo' => 'required',
        ]);
        
        $name= $request->name;
        $time= $request->time;
        $mahallah= $request->mahallah;
        $position= $request->position;
        $phoneNo= $request->phoneNo;

        $stu = new Student();
        $stu->name = $name;
        $stu->time = $time;
        $stu->mahallah = $mahallah;
        $stu->position = $position;
        $stu->phoneNo = $phoneNo;
        $stu->save();

        //for display message alert 
        return redirect()->back()->with('Success','Student Added New Booking');

    }
}

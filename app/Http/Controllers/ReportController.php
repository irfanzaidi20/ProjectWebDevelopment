<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//  database from model report
use App\Models\Report;

class ReportController extends Controller
{
    public function index(){
        $data = Report::get();
        //return $data;
        return view('report-list',compact('data'));
    }
    

    public function saveReport(Request $request){
        //dd($request->all());
        //to avoid nilai yang dimasukkan kosong
        $request->validate([
            'name' => 'required',
            'task' => 'required',
            'bank' => 'required',
            'accNo' => 'required',
            
        ]);
        
        $name= $request->name;
        $task= $request->task;
        $bank= $request->bank;
        $accNo= $request->accNo;
       

        $rep = new Report();
        $rep->name = $name;
        $rep->task = $task;
        $rep->bank = $bank;
        $rep->accNo = $accNo;
        $rep->save();

        //for display message alert 
        return redirect()->back()->with('Success','Student Added Report');

    }
}

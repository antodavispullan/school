<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function index()
    {        
        $mark =  DB::table('marks')
        ->join('students','marks.student_id','students.id')
        ->join('tests','marks.test_id','tests.id')
        ->join('courses','tests.course_id','courses.id')

        ->select('marks.id as markid',
                 'marks.student_id as studentid',
                 'marks.test_id as testid',
                 'students.name', 
                 'tests.course_id',
                 'courses.name as coursename',
                 'courses.teacher',
                 'tests.weight'
                 )
        ->where('student_id', '=', 3) 
        ->get();
    }

    /*
      function to get the testids taken by a student id from mark table
      return the testids
    */
    public function findTotalAverage($studentid)
    {         
        $totalAverage =  DB::table('marks')
        ->join('students','marks.student_id','students.id')
        ->join('tests','marks.test_id','tests.id')
        ->join('courses','tests.course_id','courses.id')

        ->select('marks.id as markid',
                 'marks.student_id as studentid',
                 'marks.test_id as testid',
                 'students.name', 
                 'tests.id as testid',
                 'tests.course_id',
                 'courses.name as coursename',
                 'tests.weight'
                 )
        ->where('student_id', '=', $studentid) 
        ->avg('tests.weight');
        return $totalAverage; 
    }

    /*
      function to get the Final grade of the student for each course 
      returns the dataarray  
    */
    public function findFinalGrade($studentid)
    { 
        $marks =  DB::table('marks')
        ->join('students','marks.student_id','students.id')
        ->join('tests','marks.test_id','tests.id')
        ->join('courses','tests.course_id','courses.id')

        ->select('courses.name as coursename',
                 'courses.teacher',
                 'tests.weight'
                 )
        ->where('student_id', '=', $studentid) 
        ->get();
   
        $data = array();
        
        $i=0;
        foreach($marks as $mark)
        {  
            foreach($mark as $key=>$value)
            {
                $data[$i][$key] = $value;  
                
                if($key=='weight' && $value >= 80 && $value<=100)
                {
                    $data[$i]['grade'] = "A";   
                } 
                elseif($key=='weight' && $value >= 60 && $value<80)
                {
                    $data[$i]['grade'] = "B";   
                } 
                elseif($key=='weight' && $value >= 40 && $value<60)
                {
                    $data[$i]['grade'] = "C";   
                } 
                elseif($key=='weight' && $value <40)
                {
                    $data[$i]['grade'] = "F";   
                } 
            } 
            $i++;           
        } 
        return $data;
    }


    public function show(Request $request)
    {        
        $studentid = $request->segment(2);
        $studentname = $request->segment(3);              
        $totalAverage = $this->findTotalAverage($studentid);
        $finalGradeData   = $this->findFinalGrade($studentid);       
      
        $data = array(
                       'studentid'     => $studentid,
                       'studentname'   => $studentname,
                       'totalaverage'  => $totalAverage,
                       'finalgradedata'=> $finalGradeData
                     );
        return view('report.show')->with('data', $data);
            
    }

    

}

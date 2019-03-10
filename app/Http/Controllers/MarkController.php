<?php

namespace App\Http\Controllers;

use App\mark;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MarkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mark = Mark::all(); 
        return view('mark.index',compact('mark',$mark));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\mark  $mark
     * @return \Illuminate\Http\Response
     */
    public function show(mark $mark)
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
                 'tests.weight'
                 )
        ->get();
        return view('mark.index',compact('mark',$mark)); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\mark  $mark
     * @return \Illuminate\Http\Response
     */
    public function edit(mark $mark)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\mark  $mark
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mark $mark)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\mark  $mark
     * @return \Illuminate\Http\Response
     */
    public function destroy(mark $mark)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Student::all();
        return view('student',['student' => $student,'layout' => 'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $student = Student::all();
        return view('student',['student' => $student,'layout' => 'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new Student();
        $student->student_id = $request->input('student_id');
        $student->nom = $request->input('nom');
        $student->email = $request->input('email');
        $student->téléphone = $request->input('téléphone');
        $student->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $studen = Student::find($id);
        $student = Student::all();
        return view('student', ['student' => $student,'studen' => $studen,'layout' => 'show']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $studen = Student::find($id);
        $student = Student::all();
        return view('student', ['student' => $student,'studen' => $studen,'layout' => 'edit']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $studen = Student::find($id);
        $studen->student_id = $request->input('student_id');
        $studen->nom = $request->input('nom');
        $studen->email = $request->input('email');
        $studen->téléphone = $request->input('téléphone');
        $studen->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect('/');
    }
}

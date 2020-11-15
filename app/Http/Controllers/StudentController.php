<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Classes;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('student.index', [
            'students' => Student::paginate(2)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $class = Classes::all();
        return view('student.add', compact('class'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi pengisian field tambah data
        $request->validate([
            'nis' => 'required',
            'name' => 'required',
            'birth_date' => 'required',
            'gender' => 'required',
            'class_id' => 'required',
            'phone' => 'required',
            'address' => 'required'           
        ]);

        Student::create($request->all());

        return redirect()->route('student.index')
            ->with('success', 'Student created successfully.');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);
        return view('student.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $class = Classes::all();
        $student = Student::find($id);
        return view('student.edit', compact('student', 'class'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student, $id)
    {
        // Validasi pengisian field tambah data
        $request->validate([
            'nis' => 'required',
            'name' => 'required',
            'birth_date' => 'required',
            'gender' => 'required',
            'class_id' => 'required',
            'phone' => 'required',
            'address' => 'required'           
        ]);

        $student = Student::find($id);
        $student->nis = $request->nis;
        $student->name = $request->name;
        $student->birth_date = $request->birth_date;
        $student->gender = $request->gender;
        $student->class_id = $request->class_id;
        $student->phone = $request->phone;
        $student->address = $request->address;
        $student->save();

        return redirect()->route('student.index')
            ->with('success', 'Student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect()->route('student.index')
            ->with('success', 'Student deleted successfully');
    }
}

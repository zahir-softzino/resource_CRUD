<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;

        $student = new Student;
        $student->name = $request->name;
        $student->roll = $request->roll;
        $student->save();

        return redirect('student')->withSuccess("Student Added Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        // return abcd;
        $student = Student::find($student)->first();
        return view('student.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        $student = Student::find($student)->first();
        return view('student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        // return $request;
        $student = Student::find($student)->first();
        
        $student->update([
            'name' => $request->name,
            'roll' => $request->roll,
        ]);
        // return $student;
        // return $request->roll;
        return redirect('student')->withSuccess("Record Updated Successfully.");
        // $student->name = $request->name;
        // $student->roll = $request->roll;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        // $student = findOrFail($student->id);
        $student -> delete();
        return redirect('student')->withSuccess("Student Record Deleted Successfully.");
    }
}



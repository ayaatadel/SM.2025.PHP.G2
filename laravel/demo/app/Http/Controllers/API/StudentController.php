<?php

namespace App\Http\Controllers\API;

use App\Models\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Error;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        try {
            $students = Student::all();
            return response()->json([
                "message" => "All Students Data retrevied Successfully",
                'data' => $students
            ]);
        } catch (Error $e) {
            return response()->json([
                "message" => "No students",
                'error' => $e
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $requestedData = $request->validate([
            'name' => 'required|min:3',
            'email' => 'unique:students,email,',
            'address' => 'required',
            'gender' => 'required',
            'age' => 'required|integer|min:18',
            'image' => 'nullable|string',
            'track_id' => 'nullable|exists:tracks,id',
        ], [
            // message
            'name.required' => 'name is required',
            'name.min' => 'name is must be more than 3 characters',
            'email.unique' => 'email is already exist',
            'age.required' => 'age is required',
            'address.required' => 'address is required',
        ]);
        $student = Student::create($requestedData);
        return response()->json([
            "message" => "student created successfully",
            'data' => $student
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
        try {

            return response()->json([
                "message" => "All Students Data retrevied Successfully",
                // 'data' => $student,
                'data' => [
                    "name"=>$student['name'],
                    "track_name"=>optional($student->track)->name,
                    "student age"=>$student->age,
                ]
            ]);
        } catch (Error $e) {
            return response()->json([
                "message" => "Student Not Found",
                'error'=>$e->getMessage(),
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
        // dd($request);
        // $requestedData = $request->validate([
        //     'name' => 'sometimes|min:3',
        //     'email' => 'unique:students,email'.$student->id,
        //     'address' => 'sometimes',
        //     'image' => 'nullable|string',
        //     'track_id' => 'nullable|exists:tracks,id',
        // ]);
        // dump($requestedData);
        $student->update($request->all());
        // dd($student);
        return response()->json([
            "message" => "Student updated successfully",
            'data' => $student,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        if (!$student) {
            return response()->json([
                "message" => "Student Not Found",
                // 'error'=>$e
            ], 404);
        } else {
            $student->delete();
            return response()->json([
                "message" => "Student delete successfully",
                'deleted_student' => $student
            ]);
        }
    }
}

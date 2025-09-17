<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Track;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    // // get all student data
    // function allStudentsData()
    // {
    //     $students=DB::table('students')->get();
    //     // dump($students);
    //     // return view('allStudentsData',['students'=>$students]);
    //                                 //['students'=>$students]
    //     return view('student.allStudentsData',compact('students'));
    // }


    function index()
    {
        // $students = Student::all();
        $students = Student::orderBy('id', 'desc')->paginate(2);
        // dump($students);
        // return view('allStudentsData',['students'=>$students]);
        //['students'=>$students]
        return view('student.index', compact('students'));
    }
    function show($id)
    {

        //         $student=Student::find($id);
        //         if($student)
        //         {
        //             return view('student.show',compact('student'));

        //         }else{
        //    return abort(404);
        //         }

        $student = Student::findOrFail($id); /// id ==> data ||  404
        //    dd($student);
        return view('student.show', compact('student'));
    }


    function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        //   return view('student.index');
        return to_route('students.index');
    }

    function create()
    {
        $tracks = Track::all();

        return view('student.create', compact('tracks'));
    }

    function store()
    {



        // dd($_REQUEST);
        // dump(request()->all());
        $requestedData = request()->validate([
            'name' => 'required|min:3',
            'email' => 'unique:students,email',
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
        Student::create($requestedData);
        return to_route('students.index');
    }

    function update($id)
    {
        $student = Student::findOrFail($id);
        // old data ==>  associative array ==> ['key'=>value]
        // old data ==>  associative array ==> ['key'=>$student]
        return view('student.update', compact('student'));
        // return view('student.update',['student'=>$student]);


    }

    function edit($id)
    {

        // dump($_REQUEST);
        $student = Student::findOrFail($id);
        $requestedData = request()->except('_token');
        $student->update($requestedData);
        return view('student.show', compact('student'));
    }
}

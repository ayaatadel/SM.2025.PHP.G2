<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;
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
        $students = Student::all();
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

        return view('student.show', compact('student'));
    }


    function destroy($id)
    {
      $student=Student::findOrFail($id);
      $student->delete();
    //   return view('student.index');
    return to_route('students.index');

    }
}

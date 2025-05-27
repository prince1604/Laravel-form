<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students; // Corrected namespace

class StudentController extends Controller
{
    // function getStudents(){
    //     $data = new \App\Models\Students;
    //     echo $data->testFun();
    //     $Students= \App\Models\Students::all();
    //     return view('Students',['data'=>$Students]);
    // }
    function add(Request $request){
        $student=new Students();
        $student->name=$request->name;
        $student->email=$request->email;
        $student->phone=$request->phone;
        $student->batch=$request->batch;
        $student->save();
        if($student){
            echo "new student added";
        }
        else{
            return "operation failed";
        }
    }
    function list(Request $request){

        // $studentData = Students::all();

        // $studentData = Students::orderBy('created_at', direction: 'desc')->get();
        $studentData = Students::paginate(5);
        $search = $request->input('search');


        return view('list-student',['students'=>$studentData]);
    }
    function delete($id)
    {
        echo $isDeleted = Students::destroy($id);
        if($isDeleted){
        return redirect('list');
        }
        else{
            return "operation failed";
        }

    }

    function edit($id)
    {
        $student= Students::find($id);
        return view('edit',['data'=>$student]);
    }

    function editStudent(Request $request, $id){
        $student= Students::find($id);
        $student->name=$request->name;
        $student->email=$request->email;
        $student->phone=$request->phone;
    if($student->save()){
        return redirect('list');
        }
        else{
            return "Student details are not updated";
        }
    }

    function search(Request $request){
    $studentData = Students::where('name', 'like', "%{$request->search}%")->paginate(10);
    return view('list-student', ['students' => $studentData]);
}

    function deletemultiple(Request $request){
    
    $result=Students::destroy($request->ids);
    if($result){
        return redirect('list');
    }
    else{
        return "student data not deleted";
    }

}

}

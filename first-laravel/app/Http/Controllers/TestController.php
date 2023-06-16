<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class TestController extends Controller
{
    // function test(){
    //     //return "From test"; <= To print String
    //     //return view('test'); <= To print view
    //     return response(['name' => 'Ninu', 'email' => 'test']); // To perform a fun

    // }

            // ************** for request    
    //function test(Request $request){
        // $company = $request->company;
        // $browser = $request->browser;
        // return $company;
    //}

            // ***************post to db table
    function store(Request $request){
        $product = new Student;
        $product -> company = $request->company;
        $product -> product = $request->browser;
        $product -> save();
        return student::all();
    }

            //*********Read data from db table */
    function index(){
        return student::all();
    }

 // ***************update db table data
 function update(Request $request, $id){
        $product = Student::find($id);
        //$product -> company = $request->company;
        $product -> product = $request->product;
        $product -> save();
        return student::all();
    }

    // ***************delete db table data
    function delete($id){
           $product = Student::find($id);
           $product -> delete();
           return student::all();
       }
}

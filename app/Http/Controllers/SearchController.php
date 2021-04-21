<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Redirect, Response;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->get('search');
        $sea = Student::where('studname','like','%'.$search.'%')->get();
        return view('students.search',['students'=> $sea]);
    }
       

}

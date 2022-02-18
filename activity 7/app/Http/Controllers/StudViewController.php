<?php

namespace App\Http\Controllers;

use App\Models\assignment;
use App\Models\mark;
use App\Models\User;
use Illuminate\Http\Request;
use DB;

class StudViewController extends Controller
{

    public function user(){
        $user= User::all();
        return view('db',['users'=>$user]);
    }
    public function assignment(){
        $assignments = assignment::all();
        return view('assignmenttable',['assignments'=>$assignments]);
    }
    public function mark(){
        $marks = mark::all();
        return view('markstable',['marks'=>$marks]);
    }

}

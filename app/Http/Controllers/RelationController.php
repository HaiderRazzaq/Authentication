<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RelationController extends Controller
{
    public function user(){
        $user=Auth::user()->Lessons;
        return $user;
    }
    public function ApiLessons(){
        $lessons=Lesson::with('tags')->get();
        foreach($lessons as $lesson){
            dd( $lesson ). '<br>';
        }
    }
}

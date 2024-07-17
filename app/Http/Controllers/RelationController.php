<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RelationController extends Controller
{
    public function user(){
        $user=Auth::user()->Lessons;
        return $user;
    }
}

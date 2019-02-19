<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        $issues = Issue::orderby('created_at', 'desc')->take(2)->get();
        return view('welcome.index')->with('issues', $issues);
    }

    
    public function about(){
        return view('welcome.about');
    }
}

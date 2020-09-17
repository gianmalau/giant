<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function viewform(){
        return view('page.homepage');
    }

}

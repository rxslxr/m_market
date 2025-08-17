<?php

namespace App\Http\Controllers\title;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return '1';
    }
    public function about(){
        return '2';
    }
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DecentesController extends Controller
{
    public function index(){
        return view('welcome');
    }
}
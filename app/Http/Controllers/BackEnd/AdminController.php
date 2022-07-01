<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
class AdminController extends Controller
{
    public function login(){
        return view('admin.index');
    }
    public function dashboard(){
        return view('admin.dashboard');
    }

}

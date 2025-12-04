<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        // return view dashboard yang sudah kamu punya, misalnya:
        return view('admin.dashboard');
    }
}

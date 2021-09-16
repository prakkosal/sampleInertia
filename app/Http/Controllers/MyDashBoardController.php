<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class MyDashBoardController extends Controller
{
    public function index()
    {
        return Inertia::render('Dashboard');
    }
   
}

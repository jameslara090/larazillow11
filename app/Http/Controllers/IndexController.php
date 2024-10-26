<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class IndexController extends Controller
{
    public function index()
    {
        return Inertia('Index/Index');
    }
    public function show()
    {
        return Inertia('Index/Show');
    }
}

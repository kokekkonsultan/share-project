<?php

namespace App\Http\Controllers\Site;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return Inertia::render('site/home/index');
    }
}

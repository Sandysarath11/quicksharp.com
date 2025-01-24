<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function Index()
    {
        return Inertia::render('Dashboard/index');
    }

    public function User()
    {
        return Inertia::render('Dashboard/user');
    }

    public function Project()
    {
        return Inertia::render('Dashboard/project');
    }

    public function Settings()
    {
        return Inertia::render('Dashboard/settings');
    }
}

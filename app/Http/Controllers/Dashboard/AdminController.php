<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\AdminRequest;

class AdminController extends Controller
{
    public function index()
    {
        return view('dashboard.auth.login');
    }

    public function store(AdminRequest $request)
    {
        // Validate
    }
}
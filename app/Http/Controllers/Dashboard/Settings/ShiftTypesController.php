<?php

namespace App\Http\Controllers\Dashboard\Settings;

use App\Models\ShiftsType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ShiftTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $com_code = Auth::user()->com_code;
        $data = ShiftsType::where('com_code', $com_code)->orderByDesc('id')->paginate(10);
        return view('dashboard.settings.shiftTypes.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
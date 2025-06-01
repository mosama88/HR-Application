<?php

namespace App\Http\Controllers\Dashboard\Settings;

use App\Models\Branch;
use App\Enums\StatusActive;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Dashboard\Settings\BranchRequest;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $com_code  = Auth::user()->com_code;
        $data = Branch::where('com_code', $com_code)->paginate(10);
        return view('dashboard.settings.branches.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.settings.branches.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BranchRequest $request, Branch $branch)
    {
        $com_code =  Auth::user()->com_code;
        $dataValidate = $request->validated();
        $dataInsert = array_merge($dataValidate, [
            'created_by' => Auth::user()->id,
            'com_code' => $com_code,
            'active' => StatusActive::ACTIVE,
        ]);
        $branch->create($dataInsert);
        return redirect()->route('dashboard.branches.index')->with('success', 'تم أضافة الفرع بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(Branch $branch)
    {
        return view('dashboard.settings.branches.show', compact('branch'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Branch $branch)
    {
        return view('dashboard.settings.branches.edit', compact('branch'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BranchRequest $request, Branch $branch)
    {
        $com_code =  Auth::user()->com_code;
        $dataValidate = $request->validated();
        $dataUpdate = array_merge($dataValidate, [
            'updated_by' => Auth::user()->id,
            'com_code' => $com_code,
        ]);
        $branch->update($dataUpdate);
        return redirect()->route('dashboard.branches.index')->with('success', 'تم تعديل الفرع بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
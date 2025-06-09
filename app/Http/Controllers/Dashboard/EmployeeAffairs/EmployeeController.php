<?php

namespace App\Http\Controllers\Dashboard\EmployeeAffairs;

use App\Models\City;
use App\Models\Branch;
use App\Models\Country;
use App\Models\Employee;
use App\Models\JobGrade;
use App\Models\Language;
use App\Models\BloodType;
use App\Models\Governorate;
use App\Models\Nationality;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Dashboard\EmployeeAffairs\EmployeeRequest;
use App\Models\Currency;
use App\Models\Department;
use App\Models\JobCategory;
use App\Models\Qualification;
use App\Models\ShiftsType;
use PhpParser\Node\Expr\AssignOp\ShiftLeft;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /**
         * Display a listing of the resource.
         */
        $com_code = Auth::user()->com_code;
        $data = Employee::with(['createdBy:id,name', 'updatedBy:id,name'])->where('com_code', $com_code)->orderByDesc('id')->paginate(10);
        return view('dashboard.employee-affairs.employees.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $other['qualifications'] = Qualification::select('id', 'name')->get();
        $other['branches'] = Branch::select('id', 'name')->get();
        $other['countries'] = Country::select('id', 'name')->get();
        $other['governorates'] = Governorate::select('id', 'name')->get();
        $other['cities'] = City::select('id', 'name')->get();
        $other['blood_types'] = BloodType::select('id', 'name')->get();
        $other['nationalities'] = Nationality::select('id', 'name')->get();
        $other['languages'] = Language::select('id', 'name')->get();
        $other['job_grades'] = JobGrade::select('id', 'name')->get();
        $other['departments'] = Department::select('id', 'name')->get();
        $other['job_categories'] = JobCategory::select('id', 'name')->get();
        $other['shifts_types'] = ShiftsType::all();
        $other['currencies'] = Currency::select('id', 'name')->get();
        return view('dashboard.employee-affairs.employees.create', compact('other'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EmployeeRequest $request)
    {
        dd($request->all());

        $validateData = $request->validated();
        dd($validateData);
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

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
        return view('dashboard.employee_affairs.employees.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $other['branches'] = Branch::all();
        $other['countries'] = Country::all();
        $other['governorates'] = Governorate::all();
        $other['cities'] = City::all();
        $other['blood_types'] = BloodType::all();
        $other['nationalities'] = Nationality::all();
        $other['languages'] = Language::all();
        $other['job_grades'] = JobGrade::all();
        $other['departments'] = Department::all();
        $other['job_categories'] = JobCategory::all();
        $other['shifts_types'] = ShiftsType::all();
        $other['currencies'] = Currency::all();
        return view('dashboard.employee_affairs.employees.create', compact('other'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EmployeeRequest $request)
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
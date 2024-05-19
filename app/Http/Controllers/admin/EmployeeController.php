<?php

namespace App\Http\Controllers\admin;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\EmployeeStoreRequest;
use App\Http\Requests\EmployeeUpdateRequest;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::with('user')->get();
        return view('admin.pages.employees.index', compact('employees'));
    }

    public function create()
    {
        $users = User::all();
        return view('admin.pages.employees.create', compact('users'));
    }

    public function store(EmployeeStoreRequest $request)
    {
        $validatedData = $request->validated();
        $employee = Employee::create($validatedData);
        return redirect()->route('employees.index')->with('success', 'Employee created successfully');
    }

    public function edit(Employee $employee)
    {
        $users = User::all();
        return view('admin.pages.employees.edit', compact('employee', 'users'));
    }

    public function update(EmployeeUpdateRequest $request, Employee $employee)
    {
        $validatedData = $request->validated();
        $employee->update($validatedData);
        return redirect()->route('employees.index')->with('success', 'Employee updated successfully');
    }

    public function show(Employee $employee)
    {
        return view('admin.pages.employees.show', compact('employee'));
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully');
    }
}

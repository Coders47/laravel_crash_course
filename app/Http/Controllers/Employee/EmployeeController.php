<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
// use Illuminate\Container\Attributes\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
 


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = DB::table("employees")->get();
        return view('employee.index' , compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employee.add_employee');
    }

    /**
     * Store a newly created resource in storage.
     */
 
    public function store(Request $request)
    {

        $data = [
            'name' => $request->name,
            'designation' => $request->designation,
            'salary' => $request->salary,
            'status' => $request->status, 
        ];  
 
        DB::table('employees')->insert($data);   
  
        return redirect()->route('employee');  
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

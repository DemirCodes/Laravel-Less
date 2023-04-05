<?php

namespace App\Http\Controllers;

use App\Models\Employee;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{


    public function index(){
        $employees = Employee::all();
       return view('employee.list',compact("employees"));
    }

    public function create(){
        return view('employee.create');
    }


    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required',
            'image' => 'sometimes|image:gif:png:jpg:jpeg'
        ]);

        if ( $validator->passes() ){
                $employee = new Employee();
                $employee->name=$request->name;
                $employee->email=$request->email;
                $employee->address=$request->address;
                $employee->save();

                $request->session()->flash('success','employee added Successfully');

                return redirect()->route('employee.index');
        }else{

            return redirect()->route('employees.create')->withErrors($validator)->withInput();
        }
    }


    public function update(){
        return view('employee.update');

    }
}

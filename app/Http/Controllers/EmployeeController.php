<?php

namespace App\Http\Controllers;

use App\Models\Employee;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use function Symfony\Component\Translation\t;

class EmployeeController extends Controller
{


    public function index(){
        $employees = Employee::paginate(10)->all();
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


                if ($request->image){
                    $ext = $request->image->getClientOriginalExtension();
                    $newFileName = time().'.'.$ext;
                    $request->image->move(public_path().'/uploads/employees/',$newFileName);
                    $employee->image = $newFileName;
                    $employee->save();
                }


                $request->session()->flash('success','employee added Successfully');

                return redirect()->route('employee.index');
        }else{

            return redirect()->route('employee.create')->withErrors($validator)->withInput();
        }
    }


    public function update(){
        return view('employee.update');

    }
}

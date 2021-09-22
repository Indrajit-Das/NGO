<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Auth;

use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class NgoUsersEmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $employees = Employee::latest()->paginate(10);
        return view('backend.users.pages.employees.employeeList',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.users.pages.employees.employeeEntry');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'image' => 'required',
        ]);

        $image = request()->file('image');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->storeAs('employee_image', $imageName, 'public');

        $employee =new Employee();
        $employee->name = $request->name;
        $employee->designation = $request->designation;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->photo = $imageName;
        $employee->ngo_id = Auth::user()->ngo->id;
        $employee->save();

        toast('Employee Saved Successfully!','success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $employee = Employee::find($id);
        return view('backend.users.pages.employees.employeeDetails',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $employee = Employee::find($id);
        return view('backend.users.pages.employees.employeeEdit',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validated = $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'phone' => 'required',
            'email' => 'required',
            // 'image' => 'required',
        ]);
        $employeeEdit = Employee::find($id);

        if (request()->hasFile('image')) {
            Storage::disk('public')->delete('employee_image/'.$employeeEdit->photo);

            $image = request()->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('employee_image', $imageName, 'public');
            $employeeEdit->photo = $imageName;
        }
        $employeeEdit->name = $request->name;
        $employeeEdit->designation = $request->designation;
        $employeeEdit->email = $request->email;
        $employeeEdit->phone = $request->phone;
        $employeeEdit->save();
        toast('Employee Updated Successfully!','success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $employee = Employee::find($id);
        $employee->delete();
        toast('Employee deleted Successfully!','success');
        return redirect()->back();
    }
    public function status($id){
        $admin = Employee::find($id);
        if($admin->status =='inactive'){
            $admin->status = 'active';
            $admin->save();
        }
        else{
            $admin->status='inactive';
            $admin->save();
        }

        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Device;
use phpDocumentor\Reflection\Types\Null_;

class EmployeeController extends Controller
{

    protected  $deviceModel;
    protected  $model;
    public function __construct(Employee $employee,Device $device)
    {
        $this->model = $employee;
        $this->deviceModel = $device;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data = [
           'employees' =>$this->model->get(),
           'devices' =>  $this->deviceModel->get()
       ];


        return view('employee.index' , $data );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'devices' => $this->deviceModel->get(['id','device_name']),
        ];

        return view ('employee.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $query= $this->model->create([

            'name'=>$request->name,
            'email'=>$request->email,
            'address'=>$request->address,
            'device_id'=>$request->device_id,
            'education'=>implode(",",$request->input('education',[]))



        ]);

        if ($query)
        {
            return redirect()->route('employee.index');
        }else
        {
            return redirect()->route('employee.create');

        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
    }




}




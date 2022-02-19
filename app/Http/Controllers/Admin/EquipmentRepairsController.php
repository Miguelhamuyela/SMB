<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Employee;
use App\Models\EquipmentRepair;
use App\Models\Payment;
use App\Models\Scheldule;
use Illuminate\Http\Request;

class EquipmentRepairsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $response['employees']=Employee::get();
        return view('admin.equipmentRepair.create.index',$response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            /**Clients informatio */
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:50',
            'tel' => 'max:50',
            'nif' => 'required|string|max:50',
            'address' => 'required|string|max:50',
            'clienttype' => 'required|string|max:50',

             /**Scheldules Information */
             'started' => 'required|string|max:255',
             'end' => 'required|string|max:255',


            /***Payment Information */
            'type' => 'required|string|max:255',
            'value' =>  'required|numeric|min:2',
            'reference'  => 'max:255',
            'currency' => 'required|string|max:255',
            'status' => 'required|string|max:255',

            /**EquipmentRepair */
            'equipmentName'=> 'required|string|max:50',
            'model'=> 'required|string|max:50',
            'image'=> 'required|string|max:50',
            'problemDetails'=> 'required',
            'color'=> 'required',



        ]);

        $client = Client::create($request->all());
        $payment = Payment::create($request->all());
        $schedule = Scheldule::create($request->all());

        $EquipmentRepair = EquipmentRepair::create([
            'equipmentName' => $request->equipmentName,
            'model' => $request->model,
            'image' => $request->image,
            'color' => $request->color,
            'problemDetails' => $request->problemDetails,
            'fk_Payments_id' => $payment->id,
            'fk_Employees_id' =>$request->fk_Employees_id,
            'fk_Clients_id' => $client->id,
            'fk_Scheldules_id' => $schedule->id


        ]
        );
        return redirect("admin/reparação-equipamentos/show/$EquipmentRepair->id")->with('create', '1');


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
        $response['equipmentRepair'] = EquipmentRepair::with('payments', 'scheldules','clients','employees')->find($id);
        return view('admin.equipmentRepair.details.index', $response);

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
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Scheldule;
use App\Models\Client;
use App\Models\Elearning;

class ElearningsController extends Controller
{

    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $response['elernings'] = Elearning::get();
        return view('admin.elernings.list.index', $response);
    }


    public function create()
    {
        //
        return view('admin.elernings.create.index');
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
            'reference'  => 'max:255|unique:payments',
            'currency' => 'required|string|max:255',
            'status' => 'required|string|max:255',

            /**Elernings Information */
            'course'=> 'required|string|max:200',
            'timeCourse'=> 'required|string|max:200',
            'note'=> 'required|string|max:200'


        ]);

        $client = Client::create($request->all());
        $payment = Payment::create($request->all());
        $schedule = Scheldule::create($request->all());

        $elerning = Elearning::create([
            'course' => $request->course,
            'timeCourse' => $request->timeCourse,
            'note' => $request->note,
            'fk_Payments_id' => $payment->id,
            'fk_Scheldules_id' => $schedule->id,
            'fk_Clients_id' => $client->id
        ]
        );

        return redirect()->back()->with('create', '1');


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

        $response['elerning'] = Elearning::with('payments', 'scheldules','clients')->find($id);
        $this->Logger->log('info', 'Detalhes de Coworks');
        return view('admin.elernings.details.index', $response);
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

        $middle = Elearning::find($id);
        $response['elerning'] = $middle;

        $response['scheldule'] =  Helper::scheldule($middle->fk_Scheldules_id);
        $response['payment'] =  Helper::payment($middle->fk_Payments_id);
        $response['client'] =  Helper::client($middle->fk_Clients_id);

        $this->Logger->log('info', 'Editar Coworks');
        return view('admin.elernings.edit.index', $response);
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
            'reference'  => 'max:255|unique:payments',
            'currency' => 'required|string|max:255',
            'status' => 'required|string|max:255',

            /**Elernings Information */
            'course'=> 'required|string|max:200',
            'timeCourse'=> 'required|string|max:200',
            'note'=> 'required|string|max:200'


        ]);

        Elearning::find($id)->update($request->all());
        $cowork =Elearning::find($id);

        Client::find($cowork->fk_Clients_id)->update($request->all());
        Scheldule::find($cowork->fk_Scheldules_id)->update($request->all());
        Payment::find($cowork->fk_Payments_id)->update($request->all());

        $this->Logger->log('info', 'Actualizar Coworks');
        return redirect()->route('admin.elernings.list.index')->with('edit', '1');


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
        Elearning::find($id)->delete();
        $this->Logger->log('info', 'Eliminou Coworks');
        return redirect()->route('admin.elernings.list.index')->with('destroy', '1');
    }
}

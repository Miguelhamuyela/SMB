<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\Helper;
use App\Models\Auditorium;
use App\Models\Client;
use App\Models\Payment;
use App\Models\Scheldule;

class AuditoriumsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $response['auditoriums'] = Auditorium::with('clientsInfo')->get();
        return view('admin.auditoriums.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        return view('admin.auditoriums.create.index');
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
            'reference'  => 'max:255',
            'currency' => 'required|string|max:255',
            'status' => 'required|string|max:255',

            /**Auditoriums Information */
            'titleConference'=> 'required|string|max:200'


        ]);

        $client = Client::create($request->all());
        $payment = Payment::create($request->all());
        $schedule = Scheldule::create($request->all());

        $auditorium = Auditorium::create([
            'titleConference' => $request->titleConference,
            'fk_Payments_id' => $payment->id,
            'fk_Scheldules_id' => $schedule->id,
            'fk_Clients_id' => $client->id
        ]
        );

        return redirect()->route('admin.auditoriums.show',$auditorium->id)->with('create', '1');

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
        $response['auditorium'] = Auditorium::with('payments', 'scheldules','clients','members')->find($id);
        return view('admin.auditoriums.details.index', $response);
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

        $middle = Auditorium::find($id);
        $response['auditorium'] = $middle;

        $response['scheldule'] =  Helper::scheldule($middle->fk_Scheldules_id);
        $response['payment'] =  Helper::payment($middle->fk_Payments_id);
        $response['client'] =  Helper::client($middle->fk_Clients_id);
        
        return view('admin.auditoriums.edit.index', $response);
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
            'reference'  => 'max:255',
            'currency' => 'required|string|max:255',
            'status' => 'required|string|max:255',

            /**Auditoriums Information */
            'titleConference'=> 'required|string|max:200'


        ]);

       Auditorium::find($id)->update($request->all());
       $cowork =Auditorium::find($id);

        Client::find($cowork->fk_Clients_id)->update($request->all());
        Scheldule::find($cowork->fk_Scheldules_id)->update($request->all());
        Payment::find($cowork->fk_Payments_id)->update($request->all());
        

        return redirect()->route('admin.auditoriums.list.index')->with('edit', '1');


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
        Auditorium::find($id)->delete();
        return redirect()->route('admin.auditoriums.list.index')->with('destroy', '1');
    }
}

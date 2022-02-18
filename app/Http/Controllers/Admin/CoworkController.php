<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\Helper;
use App\Models\Client;
use App\Models\Payment;
use App\Models\Scheldule;
use App\Models\Cowork;

class CoworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $response['coworks'] = Cowork::get();
        return view('admin.coworks.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.coworks.create.index');
        //
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

            /**Cowork Information */
            'title'=> 'required|string|max:300',
            'activities'=> 'required|string|max:50'


        ]);

        $client = Client::create($request->all());
        $payment = Payment::create($request->all());
        $schedule = Scheldule::create($request->all());

        $cowork = Cowork::create([
            'title' => $request->title,
            'activities' => $request->activities,
            'fk_Payments_id' => $payment->id,
            'fk_Scheldules_id' => $schedule->id,
            'fk_Clients_id' => $client->id
        ]
        );
        return redirect()->route('admin/coworks/show',$cowork->id)->with('create', '1');
        
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
        $response['cowork'] = Cowork::with('payments', 'scheldules','clients')->find($id);
        return view('admin.coworks.details.index', $response);
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

        $middle = Cowork::find($id);
        $response['cowork'] = $middle;

        $response['scheldule'] =  Helper::scheldule($middle->fk_Scheldules_id);
        $response['payment'] =  Helper::payment($middle->fk_Payments_id);
        $response['client'] =  Helper::client($middle->fk_Clients_id);
        
        return view('admin.coworks.edit.index', $response);
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
             /**Clients information */
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
 
             /**Cowork Information */
             'title'=> 'required|string|max:300',
             'activities'=> 'required|string|max:50'

        ]);

       Cowork::find($id)->update($request->all());
       $cowork = Cowork::find($id);

        Client::find($cowork->fk_Clients_id)->update($request->all());
        Scheldule::find($cowork->fk_Scheldules_id)->update($request->all());
        Payment::find($cowork->fk_Payments_id)->update($request->all());
        

        return redirect()->route('admin.coworks.list.index')->with('edit', '1');
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
        Cowork::find($id)->delete();
        return redirect()->route('admin.coworks.list.index')->with('destroy', '1');
    }
}

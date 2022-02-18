<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\ManufacturesSoftware;
use App\Models\Scheldule;
use App\Models\Client;
use App\Models\Payment;

use Illuminate\Http\Request;

class ManufacturesSoftwaresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $response['manufactures_softwares'] = ManufacturesSoftware::get();
        return view('admin.manufactures.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.manufactures.create.index');
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
   
        //
        $request->validate([
            /**ManufactureSoftware information */
            'nameSoftware' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'file' => 'mimes:pdf,docx,xlsx',
            

             /**Clients informatio */
             'name' => 'required|string|max:255',
             'email' => 'required|string|max:50',
             'tel' => '|max:50',
             'nif' => 'required|string|max:50',
             'address' => 'required|string|max:50',
             'clienttype' => 'required|string|max:50',

              /**Scheldules Information */
              'started' => 'required|string|max:255',
              'end' => 'required|string|max:255',

            /***Payment Information */
            'type' => 'required|string|max:255',
            'value' =>  'required|numeric|min:2',
            'reference'  => '|max:255',
            'currency' => 'required|string|max:255',
            'status' => 'required|string|max:255'

        ]);

        $client = Client::create($request->all());

        $payment = Payment::create($request->all());
        $schedule = Scheldule::create($request->all());
        $file = $request->file('file')->store('manufacturesSoftwares');
      
        $manufacture = ManufacturesSoftware::create(
            [
                'nameSoftware' => $request->nameSoftware,
                'category' => $request->category,
                'description' => $request->description,
                'file' => $file,
                'nif' => $request->nif,
                'fk_Payments_id' => $payment->id,
                'fk_Scheldules_id' => $schedule->id,
                'fk_Clients_id' => $client->id

            ]
        );



        
        return redirect()->route('admin.manufactures.show',$manufacture->id)->with('create', '1');
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

        $response['manufacture'] = ManufacturesSoftware::with('payments', 'scheldules','clients')->find($id);
        return view('admin.manufactures.details.index', $response);

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

        $middle = ManufacturesSoftware::find($id);
        $response['manufacture'] = $middle;

        $response['scheldule'] =  Helper::scheldule($middle->fk_Scheldules_id);
        $response['payment'] =  Helper::payment($middle->fk_Payments_id);
        $response['client'] =  Helper::client($middle->fk_Clients_id);
        
        return view('admin.manufactures.edit.index', $response);
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
            /**ManufactureSoftware information */
            'nameSoftware' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'file' => '|mimes:pdf,docx,xlsx',
            'fk_Scheldules_id' => 'required',
            'fk_Payments_id' => 'required',
            'fk_Clients_id' => 'required',

             /**Clients informatio */
             'name' => 'required|string|max:255',
             'email' => 'required|string|max:50',
             'tel' => '|max:50',
             'nif' => 'required|string|max:50',
             'address' => 'required|string|max:50',
             'clienttype' => 'required|string|max:50',

             /**Scheldules Information */
             'started' => 'required|string|max:255',
             'end' => 'required|string|max:255',

            /***Payment Information */
            'type' => 'required|string|max:255',
            'value' =>  'required|numeric|min:2',
            'reference'  => '|max:255',
            'currency' => 'required|string|max:255',
            'status' => 'required|string|max:255'

        ]);

        ManufacturesSoftware::find($id)->update($request->all());
        $manufacture = ManufacturesSoftware::find($id);
 
         Client::find($manufacture->fk_Clients_id)->update($request->all());
         Scheldule::find($manufacture->fk_Scheldules_id)->update($request->all());
         Payment::find($manufacture->fk_Payments_id)->update($request->all());
         
         return redirect()->route('admin.manufactures.list.index')->with('edit', '1');

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
        ManufacturesSoftware::find($id)->delete();
        return redirect()->route('admin.manufactures.list.index')->with('destroy', '1');
    }
}

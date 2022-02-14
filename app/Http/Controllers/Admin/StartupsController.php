<?php


namespace App\Http\Controllers\Admin;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\Scheldule;
use App\Models\Startup;
use Illuminate\Http\Request;

class StartupsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $response['startups'] = Startup::get();
        return view('admin.startup.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.startup.create.index');
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
            /**Startup informatio */
            'name' => 'required|string|max:255',
            'roomName' => 'required|string|max:255',
            'site' => 'max:255',
            'email' => 'required|string|max:50',
            'tel' => 'max:50',
            'nif' => 'required|string|max:50',

            /***Payment Information */
            'type' => 'required|string|max:255',
            'value' =>  'required|numeric|min:2',
            'reference'  => 'string|max:255',
            'currency' => 'required|string|max:255',
            'status' => 'required|string|max:255',

            /**Scheldules Information */
            'started' => 'required|string|max:255',
            'end' => 'required|string|max:255',

        ]);

      
        
        $payment = Payment::create($request->all());
       
        $schedule = Scheldule::create($request->all());
     
        $startup = Startup::create(
            [
                'name' => $request->name,
                'roomName' => $request->roomName,
                'site' => $request->site,
                'email' => $request->email,
                'tel' => $request->tel,
                'nif' => $request->nif,
                'fk_Payments_id' => $payment->id,
                'fk_Scheldules_id' => $schedule->id

            ]
        );
        return redirect()->route('admin.startup.show',$startup->id)->with('create', '1');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $response['startup'] = Startup::with('payments', 'scheldules', 'members')->find($id);
        return view('admin.startup.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $middle = Startup::find($id);
        $response['startup'] = $middle;

        $response['scheldule'] =  Helper::scheldule($middle->fk_Scheldules_id);
        $response['payment'] =  Helper::payment($middle->fk_Payments_id);

        return view('admin.startup.edit.index', $response);
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
        $request->validate([
            'name' => 'required|string|max:255',
            'roomName' => 'required|string|max:255',
            'site' => 'max:255',
            'email' => 'required|string|max:50',
            'tel' => 'max:50',
            'nif' => 'required|string|max:50',
            'type' => 'required|string|max:255',
            'value' =>  'required|numeric|min:2',
            'reference'  => 'string|max:255',
            'currency' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'started' => 'required|string|max:255',
            'end' => 'required|string|max:255',

        ]);

        Startup::find($id)->update($request->all());
        $startup = Startup::find($id);
       
        Payment::find($startup->fk_Payments_id)->update($request->all());
        Scheldule::find($startup->fk_Scheldules_id)->update($request->all());


        return redirect()->route('admin.startup.list.index')->with('edit', '1');
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function destroy($id)
    {
        Startup::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}

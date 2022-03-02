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

    public function store(Request $request)
    {
        $request->validate([
            /**Clients informatio */
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'tel' => 'max:50',
            'nif' => 'required|string|max:50',
            'address' => 'required|string|max:50',
            'clienttype' => 'required|string|max:50',

             /**Scheldules Information */
             'started' => 'required|string|max:255',
             'end' => 'required|string|max:255',
            /**Elernings Information */
            'course'=> 'required|string|max:200',
            'timeCourse'=> 'required|string|max:200',
            'note'=> 'required|string|max:200' ]);

        $client = Client::create($request->all());

        $schedule = Scheldule::create($request->all());

        $elerning = Elearning::create([
            'course' => $request->course,
            'timeCourse' => $request->timeCourse,
            'note' => $request->note,
            'fk_Scheldules_id' => $schedule->id,
            'fk_Clients_id' => $client->id  ]
        );

        return  redirect()->route('admin.elernings.list.index')->with('create', '1');
    }


    public function show($id)
    {

        $response['elerning'] = Elearning::with('scheldules','clients')->find($id);
        $this->Logger->log('info', 'Detalhes de Coworks');
        return view('admin.elernings.details.index', $response);
    }


    public function edit($id)
    {
        $middle = Elearning::find($id);
        $response['elerning'] = $middle;
        $response['scheldule'] =  Helper::scheldule($middle->fk_Scheldules_id);
        $response['client'] =  Helper::client($middle->fk_Clients_id);

        $this->Logger->log('info', 'Entrou em Editar Elerning');
        return view('admin.elernings.edit.index', $response);
    }


    public function update(Request $request, $id)
    {

        $request->validate([
            /**Clients informatio */
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'tel' => 'max:50',
            'nif' => 'required|string|max:50',
            'address' => 'required|string|max:50',
            'clienttype' => 'required|string|max:50',
             /**Scheldules Information */
             'started' => 'required|string|max:255',
             'end' => 'required|string|max:255',
            /**Elernings Information */
            'course'=> 'required|string|max:200',
            'timeCourse'=> 'required|string|max:200',
            'note'=> 'required|string|max:200' ]);

        Elearning::find($id)->update($request->all());
        $cowork =Elearning::find($id);
        Client::find($cowork->fk_Clients_id)->update($request->all());
        Scheldule::find($cowork->fk_Scheldules_id)->update($request->all());
        $this->Logger->log('info', 'Actualizar Coworks');
        return redirect()->route('admin.elernings.list.index')->with('edit', '1');


    }


    public function destroy(Request $request)
    {
        //
        Elearning::find($request->id)->delete();
        $this->Logger->log('info', 'Eliminou Elerning');
        return redirect()->route('admin.elernings.list.index')->with('destroy', '1');
    }
}

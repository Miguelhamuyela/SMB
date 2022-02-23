<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EquipmentRepair;
use App\Models\Payment;
use Illuminate\Http\Request;

class StatisticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response['totalEquipament'] = Payment::with('equipaments')->where('status', '=', 'Pago')->sum('value');
        $janEquipament = Payment::with('equipaments')->whereMonth('created_at', '=', 01)->where('status', '=', 'Pago')->sum('value');
        $response['janEquipament'] = json_encode($janEquipament);
        $fevEquipament = Payment::with('equipaments')->whereMonth('created_at', '=', 02)->where('status', '=', 'Pago')->sum('value');
        $response['fevEquipament'] = json_encode($fevEquipament);
        $marEquipament = Payment::with('equipaments')->whereMonth('created_at', '=', 03)->where('status', '=', 'Pago')->sum('value');
        $response['marEquipament'] = json_encode($marEquipament);
        $abrEquipament = Payment::with('equipaments')->whereMonth('created_at', '=', 04)->where('status', '=', 'Pago')->sum('value');
        $response['abrEquipament'] = json_encode($abrEquipament);
        $maioEquipament = Payment::with('equipaments')->whereMonth('created_at', '=', 05)->where('status', '=', 'Pago')->sum('value');
        $response['maioEquipament'] = json_encode($maioEquipament);
        $junEquipament = Payment::with('equipaments')->whereMonth('created_at', '=', 06)->where('status', '=', 'Pago')->count();
        $response['junEquipament'] = json_encode($junEquipament);
        $julEquipament = Payment::with('equipaments')->whereMonth('created_at', '=', 07)->sum('value');
        $response['julEquipament'] = json_encode($julEquipament);
        $agoEquipament = Payment::with('equipaments')->whereMonth('created_at', '=', '08')->where('status', '=', 'Pago')->sum('value');
        $response['agoEquipament'] = json_encode($agoEquipament);
        $setEquipament = Payment::with('equipaments')->whereMonth('created_at', '=', '09')->where('status', '=', 'Pago')->sum('value');
        $response['setEquipament'] = json_encode($setEquipament);
        $outEquipament = Payment::with('equipaments')->whereMonth('created_at', '=', '10')->where('status', '=', 'Pago')->sum('value');
        $response['outEquipament'] = json_encode($outEquipament);
        $novEquipament = Payment::with('equipaments')->whereMonth('created_at', '=', 11)->where('status', '=', 'Pago')->sum('value');
        $response['novEquipament'] = json_encode($novEquipament);
        $dezEquipament = Payment::with('equipaments')->whereMonth('created_at', '=', 12)->where('status', '=', 'Pago')->sum('value');
        $response['dezEquipament'] = json_encode($dezEquipament);
        /* fim do reparacao Equipamentos/*/

        $janStartups = Payment::with('startups')->whereMonth('created_at', '=', 01)->where('status', '=', 'Pago')->sum('value');
        $response['janStartups'] = json_encode($janStartups);
        $fevStartups = Payment::with('startups')->whereMonth('created_at', '=', 02)->where('status', '=', 'Pago')->sum('value');
        $response['fevStartups'] = json_encode($fevStartups);
        $marStartups = Payment::with('startups')->whereMonth('created_at', '=', 03)->where('status', '=', 'Pago')->sum('value');
        $response['marStartups'] = json_encode($marStartups);
        $abrStartups = Payment::with('startups')->whereMonth('created_at', '=', 04)->where('status', '=', 'Pago')->sum('value');
        $response['abrStartups'] = json_encode($abrStartups);
        $maioStartups = Payment::with('startups')->whereMonth('created_at', '=', 05)->where('status', '=', 'Pago')->sum('value');
        $response['maioStartups'] = json_encode($maioStartups);
        $junStartups = Payment::with('startups')->whereMonth('created_at', '=', 06)->where('status', '=', 'Pago')->count();
        $response['junStartups'] = json_encode($junStartups);
        $julStartups = Payment::with('startups')->whereMonth('created_at', '=', 07)->sum('value');
        $response['julStartups'] = json_encode($julStartups);
        $agoStartups = Payment::with('startups')->whereMonth('created_at', '=', '08')->where('status', '=', 'Pago')->sum('value');
        $response['agoStartups'] = json_encode($agoStartups);
        $setStartups = Payment::with('startups')->whereMonth('created_at', '=', '09')->where('status', '=', 'Pago')->sum('value');
        $response['setStartups'] = json_encode($setStartups);
        $outStartups = Payment::with('startups')->whereMonth('created_at', '=', '10')->where('status', '=', 'Pago')->sum('value');
        $response['outStartups'] = json_encode($outStartups);
        $novStartups = Payment::with('startups')->whereMonth('created_at', '=', 11)->where('status', '=', 'Pago')->sum('value');
        $response['novStartups'] = json_encode($novStartups);
        $dezStartups = Payment::with('startups')->whereMonth('created_at', '=', 12)->where('status', '=', 'Pago')->sum('value');
        $response['dezStartups'] = json_encode($dezStartups);
        $response['totalStartups']  =Payment::with('startups')->where('status', '=', 'Pago')->sum('value');;
        return view('admin.Statistics.statisticsSection.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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

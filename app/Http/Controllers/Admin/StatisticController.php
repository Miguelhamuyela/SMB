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
$response['totalPayments']=0;

        $jan = Payment::with('equipaments')->whereMonth('created_at', '=', 01)->where('status', '=', 'Pago')->sum('value');
        $response['jan'] = json_encode($jan);

        $fev = Payment::with('equipaments')->whereMonth('created_at', '=', 02)->where('status', '=', 'Pago')->sum('value');
        $response['fev'] = json_encode($fev);
        $mar = Payment::with('equipaments')->whereMonth('created_at', '=', 03)->where('status', '=', 'Pago')->sum('value');
        $response['mar'] = json_encode($mar);
        $abr = Payment::with('equipaments')->whereMonth('created_at', '=', 04)->where('status', '=', 'Pago')->sum('value');
        $response['abr'] = json_encode($abr);
        $maio = Payment::with('equipaments')->whereMonth('created_at', '=', 05)->where('status', '=', 'Pago')->sum('value');
        $response['maio'] = json_encode($maio);
        $jun = Payment::with('equipaments')->whereMonth('created_at', '=', 06)->where('status', '=', 'Pago')->count();
        $response['jun'] = json_encode($jun);
        $jul = Payment::with('equipaments')->whereMonth('created_at', '=', 07)->sum('value');
        $response['jul'] = json_encode($jul);
        $ago = Payment::with('equipaments')->whereMonth('created_at', '=', '08')->where('status', '=', 'Pago')->sum('value');
        $response['ago'] = json_encode($ago);


        $set = Payment::with('equipaments')->whereMonth('created_at', '=', '09')->where('status', '=', 'Pago')->sum('value');
        $response['set'] = json_encode($set);
        $out = Payment::with('equipaments')->whereMonth('created_at', '=', '10')->where('status', '=', 'Pago')->sum('value');
        $response['out'] = json_encode($out);
        $nov = Payment::with('equipaments')->whereMonth('created_at', '=', 11)->where('status', '=', 'Pago')->sum('value');
        $response['nov'] = json_encode($nov);
        $dez = Payment::with('equipaments')->whereMonth('created_at', '=', 12)->where('status', '=', 'Pago')->sum('value');
        $response['dez'] = json_encode($dez);
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

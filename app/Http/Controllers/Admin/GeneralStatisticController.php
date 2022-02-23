<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Payment;



class GeneralStatisticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $response['totalPayments'] = Payment::where('status', '=', 'Pago')->where('currency','=','Kwanza')->sum('value');
        $jan = Payment::where('status', '=', 'Pago')->whereMonth('created_at', '=', 01)->sum('value');
        $response['jan'] = json_encode($jan);

        $fev = Payment::whereMonth('created_at', '=', 02)->where('status', '=', 'Pago')->sum('value');

        $response['fev'] = json_encode($fev);

        $mar = Payment::whereMonth('created_at', '=', 03)->where('status', '=', 'Pago')->sum('value');
        $response['mar'] = json_encode($mar);

        $abr = Payment::whereMonth('created_at', '=', 04)->where('status', '=', 'Pago')->sum('value');
        $response['abr'] = json_encode($abr);
        $maio = Payment::whereMonth('created_at', '=', 05)->where('status', '=', 'Pago')->sum('value');
        $response['maio'] = json_encode($maio);

        $jun = Payment::whereMonth('created_at', '=', 06)->where('status', '=', 'Pago')->count();
        $response['jun'] = json_encode($jun);
        $jul = Payment::whereMonth('created_at', '=', 07)->sum('value');
        $response['jul'] = json_encode($jul);
        $ago = Payment::whereMonth('created_at', '=', '08')->where('status', '=', 'Pago')->sum('value');
        $response['ago'] = json_encode($ago);
        /**d */
        $set = Payment::whereMonth('created_at', '=', '09')->where('status', '=', 'Pago')->sum('value');
        $response['set'] = json_encode($set);

        $out = Payment::whereMonth('created_at', '=', '10')->where('status', '=', 'Pago')->sum('value');
        $response['out'] = json_encode($out);
        $nov = Payment::whereMonth('created_at', '=', 11)->where('status', '=', 'Pago')->sum('value');
        $response['nov'] = json_encode($nov);


        $dez = Payment::whereMonth('created_at', '=', 12)->where('status', '=', 'Pago')->sum('value');
        $response['dez'] = json_encode($dez);
        return view('admin.Statistics.generalStatistics.index', $response);
    }
}

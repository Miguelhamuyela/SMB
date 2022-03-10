<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;
use PDF;

class PaymentsController extends Controller
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
        //
        $response['payments'] =  Payment::get();
        //Logger
        $this->Logger->log('info', 'Lista de Pagamentos');
        return view('admin.payments.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $response['payment'] = Payment::find($id);
        //Logger
        $this->Logger->log('info', 'Visualizou pagamentos com o identificador ' . $id);
        return view('admin.payments.details.index', $response);
    }

    public function printPayment(Request $request)
    {
        if($request->origin=="allPayment"){
            $response['payment'] = Payment::get();

        $pdf = PDF::loadview('pdf.paymentAll.index', $response);

        //Logger
        $this->Logger->log('info', 'Imprimiu lista de ');

        return $pdf->setPaper('a4')->stream('pdf');
        }
        else{
        $response['payment'] = Payment::where('origin',$request->origin)->get();
$response['origin']=$request->origin;

        $pdf = PDF::loadview('pdf.payment.index', $response);

        //Logger
        $this->Logger->log('info', 'Imprimiu lista de ');

        return $pdf->setPaper('a4')->stream('pdf');
    }
    }

}

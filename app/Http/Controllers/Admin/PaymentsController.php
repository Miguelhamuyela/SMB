<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

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

}

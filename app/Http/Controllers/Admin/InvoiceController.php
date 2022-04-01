<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;

use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Http\Request;
use PDF;

class InvoiceController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger();
    }
    public function index(Request $request)
    {
        //Logger
        $response['service'] = $request->service;
        $response['client'] = $request->client;
        $response['value'] = $request->value;
        $response['status'] = $request->status;
        $response['nif'] = $request->nif;


        if($request->status == 'Pago'){
            $response['qrcode'] = QrCode::size(100)->generate(route('admin.payments.scan'));
            $pdf = PDF::loadView('pdf/invoice/index', $response);

            return $pdf->stream('Fatura de Pagamento-' . date('d-m-Y') . '.pdf');
            $this->Logger->Log('info', 'Imprimiu uma Fatura do serviço - '.$request->service. ' para o cliente - '.$request->client.' com o valor - '.$request->value.'Kz');
        }else{
            return redirect('/')->with('NoAuth', 1);
        }
  
       
    }

    public function qrscan(){

        $response['qrcode'] = QrCode::size(100)->generate(route('admin.payments.scan'));
            $pdf = PDF::loadView('pdf/invoice/index', $response);

            return $pdf->stream('Fatura de Pagamento-' . date('d-m-Y') . '.pdf');
            $this->Logger->Log('info', 'Imprimiu uma Fatura do serviço - '.$request->service. ' para o cliente - '.$request->client.' com o valor - '.$request->value.'Kz');
            
    }
  
}

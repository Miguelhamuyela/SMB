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
        $this->Logger->Log('info', 'Imprimiu uma Fatura do serviço - '.$request->service. ' para o cliente - '.$request->client.' com o valor - '.$request->value.'Kz');

        $response['service'] = $request->service;
        $response['client'] = $request->client;
        $response['value'] = $request->value;

        $response['qrcode'] = QrCode::size(100)->generate(url('Pagamentos/Fatura/'.$request->service.'/'.$request->value.'/'.$request->client));
        $pdf = PDF::loadView('pdf/invoice/index', $response);

        return $pdf->stream('Fatura de Pagamento-' . date('d-m-Y') . '.pdf');
    }
    public function qrfind(){

        echo 'validado';
    }
}

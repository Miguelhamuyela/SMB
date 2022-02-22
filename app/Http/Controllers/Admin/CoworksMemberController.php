<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Cowork;
use App\Models\CoworkMember;
use Illuminate\Http\Request;

class CoworksMemberController extends Controller
{

    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        $response['cowork'] = Cowork::find($id);
        $this->Logger->log('info', 'Entrou em Cadastrar Membro do Cowork com identificador ' . $id);
        return view('admin.coworkMember.create.index', $response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        //
        $request->validate([
            /**Member Information */
            'name' => 'required|string|max:255',
            'occupation' => '|string|max:255',
            'email' => 'required|string|max:50',
            'tel' => 'max:50',
            'nif' => 'required|string|max:50',

        ]);

        $member = CoworkMember::create([
            'name' => $request->name,
            'occupation' => $request->occupation,
            'email' => $request->email,
            'tel' => $request->tel,
            'nif' => $request->nif,
            'fk_coworks_id' => $id

        ]);

        $this->Logger->log('info', 'Cadastrou Membro do Cowork com identificador ' . $id);
        return redirect("admin/cowork/show/$id")->with('create', '1');
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
        CoworkMember::find($id)->delete();
        $this->Logger->log('info', 'Eliminou um Membro do Cowork com identificador ' . $id);
        return redirect()->back()->with('destroy', '1');
    }


    public function qrcode($id)
    {
        $this->Logger->log('info', 'Visualizou os Detalhes de um membro do cowork com identificador ' . $id);
        $response['member'] = CoworkMember::with('cowork')->find($id);

        return view('admin.coworkMember.credential.index', $response);
    }

    public function qrfind($nif)
    {
        $response['member'] = CoworkMember::where('nif', $nif)->with('cowork')->first();

        return view('pdf.credential.cowork.index', $response);
    }

    public function print($nif)
    {
        $this->Logger->Log('info', 'Emitiu Uma credencial do membro do Cowork com o NIF ' . $nif);

        $data = CoworkMember::where('nif', $nif)->with('cowork')->first();
        $response['member'] = $data;

        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'utf-8', 'margin_top' => 0,
            'margin_left' => 5,
            'margin_right' => 0, 'margin_bottom' => 0, 'format' => [54, 84]
        ]);
        $mpdf->SetFont("arial");
        $mpdf->setHeader();

        $html = view("pdf.qrcard.cowork.index", $response);
        $mpdf->writeHTML($html);

        $mpdf->Output('credencial de ' . $data->nif . ".pdf", "I");
    }
}

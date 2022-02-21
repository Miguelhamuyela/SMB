<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use Illuminate\Http\Request;
use App\Models\Member;
use App\Http\Controllers\Controller;
use App\Models\Startup;

class MembersController extends Controller
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
        $response['startup'] = Startup::find($id);
        $this->Logger->log('info', 'Cadastrar membros da Startup');
        return view('admin.member.create.index', $response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $request->validate([
            /**Member Information */
            'name' => 'required|string|max:255',
            'occupation' => '|string|max:255',
            'email' => 'required|string|max:50',
            'tel' => 'max:50',
            'nif' => 'required|string|max:50',

        ]);

        $member = Member::create(
            [
                'name' => $request->name,
                'occupation' => $request->occupation,
                'email' => $request->email,
                'tel' => $request->tel,
                'nif' => $request->nif,
                'fk_startups_id' => $id

            ]
        );
        $this->Logger->log('info', 'Cadastrou membros da Startup');
        return redirect("admin/startup/show/$id")->with('create', '1');
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
        Member::find($id)->delete();
        $this->Logger->log('info', 'Eliminou membros da Startup');
        return redirect()->back()->with('destroy', '1');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function qrcode($id)
    {
        $response['member'] = Member::with('startup')->find($id);

        return view('admin.member.credential.index', $response);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function qrfind($nif)
    {
        $response['member'] = Member::where('nif', $nif)->with('startup')->first();

        return view('pdf.credential.index', $response);
    }
}

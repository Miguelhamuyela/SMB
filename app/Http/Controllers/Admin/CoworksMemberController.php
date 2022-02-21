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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        $response['cowork']=Cowork::find($id);
        $this->Logger->log('info', 'Cadastrar Coworks');
        return view('admin.coworkMember.create.index',$response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
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

        $member = CoworkMember::create(
            [
                'name' => $request->name,
                'occupation' => $request->occupation,
                'email' => $request->email,
                'tel' => $request->tel,
                'nif' => $request->nif,
                'fk_coworks_id' =>$id

            ]
        );

        $this->Logger->log('info', 'Cadastrar Coworks');
        return redirect()->back()->with('create', '1');
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
        $this->Logger->log('info', 'Eliminar Coworks');
        return redirect()->back()->with('destroy', '1');
    }
}

<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\ManufacturesSoftware;
use App\Models\Scheldule;
use App\Models\Client;
use App\Models\Payment;

use Illuminate\Http\Request;

class ManufacturesSoftwaresController extends Controller
{
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
    public function create()
    {
        return view('admin.manufactures.create.index');
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

        $request->validate([
            /**Startup informatio */
            'nameSoftware' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'description' => 'required|string',
            'file' => 'mimes:jpg,png,pdf,pdf,docx,xlsx,txt',
            'fk_Scheldules_id'=>'required',
            'fk_Payments_id'=>'required',
            'fk_Clients_id'=>'required',
           
        ]);

        $file = $request->file('file')->store('file');

        $manufacture = ManufacturesSoftware::create(
            [
                'nameSoftware' => $request->nameSoftware,
                'category' => $request->category,
                'description' => $request->description,
                'file' =>$file,
                'fk_Scheldules_id' => $request->fk_Scheldules_id,
                'nif' => $request->nif,
                'fk_Payments_id' => $request->fk_Payments_id,
                'fk_Clients_id' => $request->fk_Clients_id

            ]
        );

        return redirect()->back("admin/manufacture/show/$manufacture->id")->with('create', '1');
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

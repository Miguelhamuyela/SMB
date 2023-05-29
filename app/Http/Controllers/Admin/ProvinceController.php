<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Province;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $response['provinces'] = Province::get();
        //Logger
        $this->Logger->log('info', 'Listou uma Província');
        return view('admin.province.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

          //Logger
          $this->Logger->log('info', 'Entrou em Cadastrar uma Província');
          return view('admin.province.create.index');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Province::create([
            'proviceName' => $request->proviceName,
            'obs' => $request->obs,
        ]);

        return redirect()->route('admin.provinces.create.index')->with('create', 1);

    }


    public function show($id)
    {
     //   $response['provinces'] = Province::find($id);
     //   return view('admin.province.list.index', $response);


        $response['provinces'] = Province::find($id);
        //Logger
        $this->Logger->log('info', 'Visualizou uma Província  com o identificador ' . $id);
        return view('admin.province.details.index', $response);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $response['provinces'] = Province::find($id);
        //Logger
        $this->Logger->log('info', 'Entrou em editar uma Província com o identificador ' . $id);
        return view('admin.province.edit.index', $response);

    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'proviceName' => 'required|string|max:255',
            'obs' => 'required|string|max:255',
        ]);

        Province::find($id)->update($request->all());

        return redirect()
            ->route('admin.provinces.list.index')
            ->with('edit', '1');
    }

    public function destroy($id)
    {
        Province::find($id)->delete();

        $this->Logger->log('info', 'Eliminou uma Província com o identificador ' . $id);
        return  redirect()->route('admin.provinces.list.index')->with('destroy', '1');
    }
}

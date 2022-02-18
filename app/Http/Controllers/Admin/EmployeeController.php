<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function index()
    {
        $response['employees'] =  Employee::get();
          //Logger
          $this->Logger->log('info', 'Listou de Funcionários');
        return view('admin.employees.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.employees.create.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required|string|max:255',
            'email' => 'required|string|max:50',
            'tel' => 'max:12',
            'nif' => 'required|string|max:50',
        ]);

        $employee = Employee::create($request->all());

        //Logger
        $this->Logger->log('info', 'Cadastrou um Funcionário com o identificador ' . $employee->id);
        return redirect()->route('admin.employees.index')->with('create', '1');
    }


    public function edit($id)
    {
        $response['employee'] = Employee::find($id);

        //Logger
        $this->Logger->log('info', 'Entrou em editar um Funcionário  com o identificador ' . $id);
        return view('admin.employees.edit.index', $response);
    }


    public function update(Request $request, $id)
    {
        $request->validate([

            'name' => 'required|string|max:255',
            'email' => 'required|string|max:50',
            'tel' => 'max:9',
            'nif' => 'required|string|max:50',
        ]);
        Employee::find($id)->update($request->all());

        //Logger
        $this->Logger->log('info', 'Editou um Funcionário  com o identificador ' . $id);
        return redirect()->route('admin.employees.index')->with('edit', '1');
    }


    public function destroy($id)
    {

        //Logger
        $this->Logger->log('info', 'Eliminou um Funcionário com o identificador ' . $id);
        Employee::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}

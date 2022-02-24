<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\EquipmentRepair;
use Illuminate\Http\Request;
use PDF;

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
        $this->Logger->log('info', 'Listou os Funcionários');
        return view('admin.employees.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Logger
        $this->Logger->log('info', 'Entrou em Cadastrar Funcionário');
        return view('admin.employees.create.index');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:50',
            'tel' => 'max:12',
            'nif' => 'required|string|max:50',
            'departament' => 'required|string|max:255',
            'occupation' => 'required|string|max:100',
            'photoEmployee' => 'mimes:jpg,png,gif,SVG,EPS',
        ]);


        if ($middle = $request->file('photoEmployee')) {
            $file = $middle->storeAs('photoEmployee', 'photoEmployee-' . uniqid(rand(1, 5)) . "." . $middle->extension());
        } else {
            $file = null;
        }
        $employee = Employee::create([
            'name' => $request->name,
            'email' => $request->email,
            'tel' => $request->tel,
            'photoEmployee' => $file,
            'occupation' => $request->occupation,
            'departament' => $request->departament,
            'nif' => $request->nif
        ]);


        //Logger
        $this->Logger->log('info', 'Cadastrou um Funcionário com o identificador ' . $employee->id);
        return redirect()->route('admin.employees.index')->with('create', '1');
    }

    public function show($id)
    {
        $response['Employee'] = Employee::find($id);

        //Logger
        $this->Logger->log('info', 'Visualizou um Funcionário com o identificador ' . $id);
        return view('admin.employees.details.index', $response);
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
            'tel' => 'max:12',
            'nif' => 'required|string|max:50',
            'departament' => 'required|string|max:255',
            'occupation' => 'required|string|max:50',
        ]);


        if ($middle = $request->file('photoEmployee')) {
            $file = $middle->storeAs('photoEmployee', 'photoEmployee-' . uniqid(rand(1, 5)) . "." . $middle->extension());
        } else {
            $file =  Employee::find($id)->photoEmployee;;
        }

        $employee = Employee::find($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'tel' => $request->tel,
            'photoEmployee' => $file,
            'occupation' => $request->occupation,
            'departament' => $request->departament,
            'nif' => $request->nif
        ]);


        //Logger
        $this->Logger->log('info', 'Editou um Funcionário com o identificador ' . $id);
        return redirect()->route('admin.employees.index')->with('edit', '1');
    }
    public function destroy($id)
    {
        //Logger
        $this->Logger->log('info', 'Eliminou um Funcionário com o identificador ' . $id);
        Employee::find($id)->delete();
        return  redirect()->route('admin.employees.index')->with('destroy', '1');
    }

    public function card($id)
    {
        $data = Employee::find($id);

        //Logger
        $this->Logger->log('info', 'Imprimiu um cartão de Funcionário com o identificador ' . $id);
        $response['Employee'] = $data;



        $pdf = PDF::loadView('pdf.credential.employees.index', $response);

        return $pdf->download('credencial de ' . $data->nif . ".pdf");
    }

}

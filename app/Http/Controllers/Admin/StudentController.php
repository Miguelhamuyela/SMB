<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use PDF;
class StudentController extends Controller
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
        $response['students'] = Student::get();
        return view('admin.student.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */




    public function create()
    {

        //Logger
        $this->Logger->log('info', 'Entrou em Cadastrar hack');
        return view('admin.student.create.index');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Student::create([
            'name' => $request->name,
            'father' => $request->father,
            'startYear' => $request->startYear,
        ]);

        return redirect()->route('admin.students.create.index')->with('create', 1);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response['students'] = Student::find($id);
        //Logger
        $this->Logger->log('info', 'Visualizou uma Hack  com o identificador ' . $id);
        return view('admin.student.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['students'] = Student::find($id);

        //Logger
        $this->Logger->log('info', 'Entrou em editar um hack com o identificador ' . $id);
        return view('admin.student.edit.index', $response);
    }


    public function sendStartYear(Request $request)
    {
        return redirect("admin/estudantes/recibo/{$request->startYear}");
    }


    public function print($startYear)
    {
        $response['students'] = Student::with('students')->where('startYear', $startYear)->get();
        $pdf = PDF::loadview('admin.pdf.student.index', $response);
        return $pdf->setPaper('a4', 'landscape')->stream('pdf');
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
        Student::find($id)->update($request->all());

        return redirect()
            ->route('admin.students.list.index')
            ->with('edit', '1');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::find($id)->delete();
        return redirect()
            ->route('admin.students.list.index')
            ->with('destroy', '1');
    }
}

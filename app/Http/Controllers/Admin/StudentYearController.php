<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Province;
use App\Models\Student;
use App\Models\StudentYear;
use Illuminate\Http\Request;

class StudentYearController extends Controller
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

        $response['student_years'] = StudentYear::with('students')->get();
        return view('admin.studentYear.list.index', $response);
    }

    public function GetSubCatAgainstMain($id)
    {
        echo json_encode(Student::where('id', $id)->get());
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $response['students'] = Student::get();
        $response['courses'] = Course::get();
        $response['student_years'] = StudentYear::get();
        return view("admin.studentYear.create.index", $response);
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
            'fk_students_id' => 'required|string|max:255',
            'fk_course_id' => 'required|string|max:255',
            'typeStudent' => 'required|string|max:255',
            'level' => 'required|string|max:255',
            'period' => 'required|string|max:255',
            'startYear' => 'required|string|max:255',
            'start' => 'required|string|max:255',
            'address' => 'required|string|max:255',
        ]);

        $student_years = StudentYear::create($request->all());

        return redirect()
            ->back()
            ->with('create', '1');
    }


    public function room_academic_years_seach(Request $request)
    {
        return redirect("admin/ano_estudante/seachResult/{$request->startYear}");
    }

    public function seachResult($startYear)
    {
        $response['student_years'] = StudentYear::with('students')->where('startYear', $startYear)->get();
        return view('admin.studentYear.list.index', $response);
    }


    public function sendStartYear(Request $request)
    {
        return redirect("admin/ano_estudante/recibo/{$request->startYear}");
    }


    public function print($startYear)
    {
        $response['student_years'] = StudentYear::with('students')->where('startYear', $startYear)->get();
        $pdf = PDF::loadview('admin.pdf.roomAcademicYear.index', $response);
        return $pdf->setPaper('a4', 'landscape')->stream('pdf');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response['student_years'] = StudentYear::find($id);
        //Logger
        $this->Logger->log('info', 'Visualizou uma Hack  com o identificador ' . $id);
        return view('admin.studentYear.details.index', $response);
    }


    public function edit($id)
    {
        $response['courses'] = Course::get();
        $response['students'] = Student::get();
        //Logger
        $this->Logger->log('info', 'Entrou em editar uma Matricula com o identificador ' . $id);

        $response['student_years'] = StudentYear::find($id);
        return view('admin.studentYear.edit.index', $response);

    }


    public function update(Request $request, $id)
    {
        //Logger
        $this->Logger->log('info', 'Eliminou um Estudante com o identificador ' . $id);
        StudentYear::find($id)->update($request->all());
        return redirect()->route('admin.student_years.index')->with('edit', 1);
    }

    public function destroy($id)
    {
        StudentYear::find($id)->delete();
        return redirect()
            ->route('admin.student_years.list.index')
            ->with('destroy', '1');
    }
}

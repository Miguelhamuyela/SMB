<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
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
        $response['teachers'] = Teacher::get();
        return view("admin.teacher.list.index", $response)->with('destroy',1);
    }

    public function seach(Request $request)
    {
        return redirect("admin/professor/seachResult/{$request->name}");
    }

    public function teachers_seach(Request $request)
    {
        return redirect("admin/professor/seachResult/{$request->startYear}");
    }

    public function seachResult($startYear)
    {
        $response['teachers'] = Teacher::with('teachers')->where('startYear', $startYear)->get();
        return view('admin.teacher.list.index', $response);
    }

    public function sendStartYear(Request $request)
    {
        return redirect("admin/professor/recibo/{$request->startYear}");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teacher.create.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Teacher::create([
            'name' => $request->name,
            'father' => $request->father,
            'mother' => $request->mother,
            'tel' => $request->tel,
            'email' => $request->email,
            'address' => $request->address,
            'genro' => $request->genro,
            'birthDate' => $request->birthDate,
            'biPasst' => $request->biPasst,
            'arquiv' => $request->arquiv,
            'experience' => $request->experience,
            'country' => $request->country,
            'city' => $request->city,
            'especiality' => $request->especiality,
            'academicGrau' => $request->academicGrau,
            'startYear' => $request->startYear,



        ]);

       // return redirect()->route('admin.teachers.create')->with('create', 1);
        return redirect()->route('admin.teachers.create.index')->with('create', 1);

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
        $response['teachers']= Teacher::find($id);
        return view('admin.teacher.edit.index',$response);
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
        Teacher::find($id)->update($request->all());
        return redirect()->route('admin.teachers.index')->with('edit',1);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Teacher::find($id)->delete();
       // Teacher::find($request->id)->delete();
        $this->Logger->log('info', 'Eliminou um Professor');
        return redirect()->back()->with('destroy', '1');
    }
}

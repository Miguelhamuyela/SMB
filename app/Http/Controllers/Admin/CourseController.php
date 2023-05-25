<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger();
    }

    public function index()
    {
       
    }


    public function create()
    {



    }


    public function store(Request $request)
    {
        Course::create([
            'courseName' => 'required|string|max:255',
            'start' => 'required|string|max:255',
            'duration' => 'required|string|max:255',
        ]);

        return redirect()->route('admin.courses.create.index')->with('create', 1);
    }


    public function show($id)
    {
        $response['courses'] = Course::find($id);
        //Logger
        $this->Logger->log('info', 'Visualizou uma Hack  com o identificador ' . $id);
        return view('admin.courses.details.index', $response);
    }


    public function edit($id)
    {
        $response['courses'] = Course::find($id);

        //Logger
        $this->Logger->log('info', 'Entrou em editar um Curso com o identificador ' . $id);
        return view('admin.courses.edit.index', $response);

    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'courseName' => 'required|string|max:255',
            'start' => 'required|string|max:255',
            'duration' => 'required|string|max:255',
        ]);

        Course::find($id)->update($request->all());

        return redirect()
            ->route('admin.courses.list.index')
            ->with('edit', '1');
    }


    public function destroy($id)
    {
        Course::find($id)->delete();

        $this->Logger->log('info', 'Eliminou um Curso com o identificador ' . $id);
        return  redirect()->route('admin.courses.list.index')->with('destroy', '1');
    }
}

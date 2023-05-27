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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response['courses'] = Course::get();
        return view("admin.course.list.index", $response)->with('destroy',1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $response['courses'] = Course::get();
        return view('admin.course.create.index',$response);
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
            'courseName' => 'required|string|max:255',
            'start' => 'required|string|max:255',
            'duration' => 'max:50',
            'depart' => 'required|string|max:50',

        ]);

        $courses = Course::create($request->all());

        return redirect()
            ->back()
            ->with('create', '1');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response['courses'] = Course::find($id);
        return view('admin.course.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['courses'] = Course::find($id);
        return view('admin.course.edit.index', $response);
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
        $request->validate([
            'courseName' => 'required|string|max:255',
            'start' => 'required|string|max:255',
            'duration' => 'max:50',
            'depart' => 'required|string|max:50',
        ]);

        Course::find($id)->update($request->all());

        return redirect()
            ->route('admin.courses.list.index')
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
        Course::find($id)->delete();
        return redirect()
            ->route('admin.courses.list.index')
            ->with('destroy', '1');
    }
}

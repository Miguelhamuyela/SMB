<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\RoomAcademicYear;
use App\Models\Student;
use Illuminate\Http\Request;

class RoomAcademicYearController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response['room_academic_years'] = RoomAcademicYear::with('students')->get();
        return view('admin.roomAcademicYear.list.index', $response);
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
        $response['courses'] = Course::get();
        $response['room_academic_years'] = RoomAcademicYear::get();
        return view("admin.roomAcademicYear.create.index", $response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $request->validate([

            'section' => 'required|max:255',
        ]);
        RoomAcademicYear::create([
            'section' => $request->section,
            'headRoom' => $request->headRoom,
            'RoomState' => $request->RoomState,
            'startYear' => $request->startYear,
            'fk_students_id' => $request->fk_students_id,
            'fk_course_id' => $request->fk_course_id,
        ]);

        return redirect()->route('admin.room_academic_years.create')->with('create', 1);
    }


    public function room_academic_years_seach(Request $request)
    {
        return redirect("admin/dormitorio-anual/seachResult/{$request->startYear}");
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function seachResult($startYear)
    {
        $response['room_academic_years'] = RoomAcademicYear::with('students')->where('startYear', $startYear)->get();
        return view('admin.roomAcademicYear.list.index', $response);
    }


    public function sendStartYear(Request $request)
    {
        return redirect("admin/dormitorio-anual/recibo/{$request->startYear}");
    }
    

    public function print($startYear)
    {
        $response['room_academic_years'] = RoomAcademicYear::with('students')->where('startYear', $startYear)->get();
        $pdf = PDF::loadview('admin.pdf.roomAcademicYear.index', $response);
        return $pdf->setPaper('a4', 'landscape')->stream('pdf');
    }

    public function show($id)
    {

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

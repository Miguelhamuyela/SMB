<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
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
       // $response['registrations'] = Registration::get();
      //  return view('admin.registration.list.index', $response);

        $response['registrations'] = Registration::get();
        return view("admin.registration.list.index", $response)->with('destroy',1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // $response['registrations'] = Registration::get();
      //  $response['provinces'] = Province::get();
        $response['registrations'] = Registration::get();
        return view('admin.registration.create.index',$response);
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
            'father' => 'required|string|max:255',
            'mather' => 'max:50',
            'borthday' => 'required|string|max:50',
            'identification' => 'required|string|max:50',
            'arquiv' => 'required|string|max:255',
            'tel' => 'required|string|max:255',
            'genro' => 'max:50',
            'municipeName' => 'required|string|max:50',
            'startYear' => 'required|string|max:50',
            'address' => 'required|string|max:255',
        ]);

        $registrations = Registration::create($request->all());

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
        $response['registrations'] = Registration::find($id);
        return view('admin.registrations.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['registrations'] = Registration::find($id);
        return view('admin.registrations.edit.index', $response);
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
            'name' => 'required|string|max:255',
            'father' => 'required|string|max:255',
            'mather' => 'max:50',
            'borthday' => 'required|string|max:50',
            'identification' => 'required|string|max:50',
            'arquiv' => 'required|string|max:255',
            'tel' => 'required|string|max:255',
            'genro' => 'max:50',
            'municipeName' => 'required|string|max:50',
            'startYear' => 'required|string|max:50',
            'address' => 'required|string|max:255',
        ]);

        Registration::find($id)->update($request->all());

        return redirect()
            ->route('admin.registrations.list.index')
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
        Registration::find($id)->delete();
        return redirect()
            ->route('admin.registrations.list.index')
            ->with('destroy', '1');
    }
}

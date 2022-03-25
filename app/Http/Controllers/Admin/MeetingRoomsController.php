<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Classes\Logger;
use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\MeetingRoom;
use App\Models\Scheldule;
class MeetingRoomsController extends Controller
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
        $response['meetingRoom'] =MeetingRoom::get();
        $this->Logger->log('info', 'Listar Sala de Reuniões');
        return view('admin.meetingRoom.list.index', $response);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $this->Logger->log('info', 'Cadastrar Sala de Reuniões');
        return view('admin.meetingRoom.create.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validateMeetingRoom=MeetingRoom::where('meetRoom',$request->meetRoom)->count();
        $validateDate=Scheldule::where('end',$request->end)->count();
    
       
        if($validateMeetingRoom > 0 and $validateDate > 0){
           
            return redirect()->back()->with('NoPermit', '1');

        }else{

        $request->validate([
            /**Clients informatio */
            'title' => 'required|string|max:50',
            'description' => 'required|string|max:255',
            'phone' => 'max:50',
            'meetRoom' => 'required|string|max:50',
            'name' => 'required|string|max:50',
            'email' => 'required|string|max:255',

             /**Scheldules Information */
             'started' => 'required|string|max:255',
             'end' => 'required|string|max:255'
        ]);
     
        $schedule = Scheldule::create($request->all());
        $meetingRoom= MeetingRoom::create([
            'title' => $request->title,
            'description' => $request->description,
            'phone'=> $request->phone,
            'meetRoom'=> $request->meetRoom,
            'name'=> $request->name,
            'email'=> $request->email,
            'fk_Scheldules_id' => $schedule->id
        ]
        );
    

        $this->Logger->log('info', 'Cadastrou Sala de Reunião');
        return redirect()->route('admin.meetingRoom.show', $meetingRoom->id)->with('create', '1');
    }
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

        $response['meetingRoom'] = MeetingRoom::with('scheldules')->find($id);
        $this->Logger->log('info', 'Detalhes de Salas de Reunião');
        return view('admin.meetingRoom.details.index', $response);
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

        $middle = MeetingRoom::find($id);
        $response['meetingRoom'] = $middle;

        $response['scheldule'] =  Helper::scheldule($middle->fk_Scheldules_id);

        $this->Logger->log('info', 'Editar Salas de Reunião');
        return view('admin.meetingRoom.edit.index', $response);
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

        $request->validate([
            /**Clients informatio */
            'title' => 'required|string|max:50',
            'description' => 'required|string|max:255',
            'phone' => 'max:50',
            'meetRoom' => 'required|string|max:50',
            'name' => 'required|string|max:50',
            'email' => 'required|string|max:255',

             /**Scheldules Information */
             'started' => 'required|string|max:255',
             'end' => 'required|string|max:255'
        ]);

        MeetingRoom::find($id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'phone'=> $request->phone,
            'meetRoom'=> $request->meetRoom,
            'name'=> $request->name,
            'email'=> $request->email
        ]);
        $meetingRoom = MeetingRoom::find($id);
        Scheldule::find($meetingRoom->fk_Scheldules_id)->update($request->all());

        $this->Logger->log('info', 'Actualizou Sala de Reunião');
        return redirect()->route('admin.meetingRoom.list.index')->with('edit', '1');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        MeetingRoom::find($request->id)->delete();
        $this->Logger->log('info', 'Eliminou Sala de Reunião');
        return redirect()->route('admin.meetingRoom.list.index')->with('destroy', '1');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Employee;
use App\Models\EquipmentRepair;
use App\Models\Log;
use App\Models\ManufacturesSoftware;
use App\Models\Startup;
use App\Models\User;


class DashboardController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response['reports'] = null;

$response['user'] = User::count();
$response['startup'] = Startup::count();
$response['employee'] = Employee::count();
$response['client'] = Client::count();

$response['manufacturesSoftware'] = ManufacturesSoftware::count();
$response['equipmentRepair'] = EquipmentRepair::count();

        $jan=Log::whereMonth('created_at', '=',01)->count();
        $response['jan']= json_encode($jan);


        $fev=Log::whereMonth('created_at', '=',02)->count();

        $response['fev']= json_encode($fev);

        $mar=Log::whereMonth('created_at', '=',03)->count();
        $response['mar']= json_encode($mar);

        $abr=Log::whereMonth('created_at', '=',04)->count();
        $response['abr']= json_encode($abr);
        $maio=Log::whereMonth('created_at', '=',05)->count();
        $response['maio']= json_encode($maio);

        $jun=Log::whereMonth('created_at', '=',06)->count();
        $response['jun']= json_encode($jun);
        $jul=Log::whereMonth('created_at', '=',07)->count();
        $response['jul']= json_encode($jul);
        $ago=Log::whereMonth('created_at', '=','08')->count();
        $response['ago']= json_encode($ago);
        /**d */
        $set=Log::whereMonth('created_at', '=','09')->count();
        $response['set']= json_encode($set);

        $out=Log::whereMonth('created_at', '=','10')->count();
        $response['out']= json_encode($out);
        $nov=Log::whereMonth('created_at', '=',11)->count();
        $response['nov']= json_encode($nov);


        $dez=Log::whereMonth('created_at', '=',12)->count();
        $response['dez']= json_encode($dez);
        return view('admin.home.index', $response);
    }
}

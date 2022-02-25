<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EquipmentRepair;
use App\Models\Payment;
use Illuminate\Http\Request;

class StatisticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          /* equipaments/*/
        $response['totalEquipament'] = Payment::with('equipaments')->where('status', '=', 'Pago')->where('origin', '=', 'Reparação de Equipamentos')->sum('value');
        $janEquipament = Payment::with('equipaments')->whereMonth('created_at', '=', 01)->where('status', '=', 'Pago')->where('origin', '=', 'Reparação de Equipamentos')->sum('value');
        $response['janEquipament'] = json_encode($janEquipament);
        $fevEquipament = Payment::with('equipaments')->whereMonth('created_at', '=', 02)->where('status', '=', 'Pago')->where('origin', '=', 'Reparação de Equipamentos')->sum('value');
        $response['fevEquipament'] = json_encode($fevEquipament);
        $marEquipament = Payment::with('equipaments')->whereMonth('created_at', '=', 03)->where('status', '=', 'Pago')->where('origin', '=', 'Reparação de Equipamentos')->sum('value');
        $response['marEquipament'] = json_encode($marEquipament);
        $abrEquipament = Payment::with('equipaments')->whereMonth('created_at', '=', 04)->where('status', '=', 'Pago')->where('origin', '=', 'Reparação de Equipamentos')->sum('value');
        $response['abrEquipament'] = json_encode($abrEquipament);
        $maioEquipament = Payment::with('equipaments')->whereMonth('created_at', '=', 05)->where('status', '=', 'Pago')->where('origin', '=', 'Reparação de Equipamentos')->sum('value');
        $response['maioEquipament'] = json_encode($maioEquipament);
        $junEquipament = Payment::with('equipaments')->whereMonth('created_at', '=', 06)->where('status', '=', 'Pago')->where('origin', '=', 'Reparação de Equipamentos')->count();
        $response['junEquipament'] = json_encode($junEquipament);
        $julEquipament = Payment::with('equipaments')->whereMonth('created_at', '=', 07)->where('status', '=', 'Pago')->where('origin', '=', 'Reparação de Equipamentos')->sum('value');
        $response['julEquipament'] = json_encode($julEquipament);
        $agoEquipament = Payment::with('equipaments')->whereMonth('created_at', '=', '08')->where('status', '=', 'Pago')->where('origin', '=', 'Reparação de Equipamentos')->sum('value');
        $response['agoEquipament'] = json_encode($agoEquipament);
        $setEquipament = Payment::with('equipaments')->whereMonth('created_at', '=', '09')->where('status', '=', 'Pago')->where('origin', '=', 'Reparação de Equipamentos')->sum('value');
        $response['setEquipament'] = json_encode($setEquipament);
        $outEquipament = Payment::with('equipaments')->whereMonth('created_at', '=', '10')->where('status', '=', 'Pago')->where('origin', '=', 'Reparação de Equipamentos')->sum('value');
        $response['outEquipament'] = json_encode($outEquipament);
        $novEquipament = Payment::with('equipaments')->whereMonth('created_at', '=', 11)->where('status', '=', 'Pago')->where('origin', '=', 'Reparação de Equipamentos')->sum('value');
        $response['novEquipament'] = json_encode($novEquipament);
        $dezEquipament = Payment::with('equipaments')->whereMonth('created_at', '=', 12)->where('status', '=', 'Pago')->where('origin', '=', 'Reparação de Equipamentos')->sum('value');
        $response['dezEquipament'] = json_encode($dezEquipament);
        /* end equipaments/*/

        /**startups */
        $janStartups = Payment::with('startups')->whereMonth('created_at', '=', 01)->where('status', '=', 'Pago')->where('origin', '=', 'Startup')->sum('value');
        $response['janStartups'] = json_encode($janStartups);
        $fevStartups = Payment::with('startups')->whereMonth('created_at', '=', 02)->where('status', '=', 'Pago')->where('origin', '=', 'Startup')->sum('value');
        $response['fevStartups'] = json_encode($fevStartups);
        $marStartups = Payment::with('startups')->whereMonth('created_at', '=', 03)->where('status', '=', 'Pago')->where('origin', '=', 'Startup')->sum('value');
        $response['marStartups'] = json_encode($marStartups);
        $abrStartups = Payment::with('startups')->whereMonth('created_at', '=', 04)->where('status', '=', 'Pago')->where('origin', '=', 'Startup')->sum('value');
        $response['abrStartups'] = json_encode($abrStartups);
        $maioStartups = Payment::with('startups')->whereMonth('created_at', '=', 05)->where('status', '=', 'Pago')->where('origin', '=', 'Startup')->sum('value');
        $response['maioStartups'] = json_encode($maioStartups);
        $junStartups = Payment::with('startups')->whereMonth('created_at', '=', 06)->where('status', '=', 'Pago')->where('origin', '=', 'Startup')->sum('value');
        $response['junStartups'] = json_encode($junStartups);
        $julStartups = Payment::with('startups')->whereMonth('created_at', '=', 07)->where('status', '=', 'Pago')->where('origin', '=', 'Startup')->sum('value');
        $response['julStartups'] = json_encode($julStartups);
        $agoStartups = Payment::with('startups')->whereMonth('created_at', '=', '08')->where('status', '=', 'Pago')->where('origin', '=', 'Startup')->sum('value');
        $response['agoStartups'] = json_encode($agoStartups);
        $setStartups = Payment::with('startups')->whereMonth('created_at', '=', '09')->where('status', '=', 'Pago')->where('origin', '=', 'Startup')->sum('value');
        $response['setStartups'] = json_encode($setStartups);
        $outStartups = Payment::with('startups')->whereMonth('created_at', '=', '10')->where('status', '=', 'Pago')->where('origin', '=', 'Startup')->sum('value');
        $response['outStartups'] = json_encode($outStartups);
        $novStartups = Payment::with('startups')->whereMonth('created_at', '=', 11)->where('status', '=', 'Pago')->where('origin', '=', 'Startup')->sum('value');
        $response['novStartups'] = json_encode($novStartups);
        $dezStartups = Payment::with('startups')->whereMonth('created_at', '=', 12)->where('status', '=', 'Pago')->where('origin', '=', 'Startup')->sum('value');
        $response['dezStartups'] = json_encode($dezStartups);
        $response['totalStartups']  = Payment::with('startups')->where('status', '=', 'Pago')->where('origin', '=', 'Startup')->sum('value');
        /**end  startup */

        /**Manufacture  */
        $janManufacture = Payment::with('manufacturesSoftware')->whereMonth('created_at', '=', 01)->where('status', '=', 'Pago')->where('origin', '=', 'Fábrica de Software')->sum('value');
        $response['janManufacture'] = json_encode($janManufacture);
        $fevManufacture  = Payment::with('manufacturesSoftware')->whereMonth('created_at', '=', 02)->where('status', '=', 'Pago')->where('origin', '=', 'Fábrica de Software')->sum('value');
        $response['feManufacture'] = json_encode($fevManufacture);
        $marManufacture  = Payment::with('manufacturesSoftware')->whereMonth('created_at', '=', 03)->where('status', '=', 'Pago')->where('origin', '=', 'Fábrica de Software')->sum('value');
        $response['marManufacture'] = json_encode($marManufacture);
        $abrManufacture  = Payment::with('manufacturesSoftware')->whereMonth('created_at', '=', 04)->where('status', '=', 'Pago')->where('origin', '=', 'Fábrica de Software')->sum('value');
        $response['abrManufacture'] = json_encode($abrManufacture);
        $maioManufacture  = Payment::with('manufacturesSoftware')->whereMonth('created_at', '=', 05)->where('status', '=', 'Pago')->where('origin', '=', 'Fábrica de Software')->sum('value');
        $response['maioManufacture'] = json_encode($maioManufacture);
        $junManufacture  = Payment::with('manufacturesSoftware')->whereMonth('created_at', '=', 06)->where('status', '=', 'Pago')->where('origin', '=', 'Fábrica de Software')->sum('value');
        $response['junManufacture'] = json_encode($junManufacture);
        $julManufacture  = Payment::with('manufacturesSoftware')->whereMonth('created_at', '=', 07)->where('status', '=', 'Pago')->where('origin', '=', 'Fábrica de Software')->sum('value');
        $response['julManufacture'] = json_encode($julManufacture);
        $agoManufacture   = Payment::with('manufacturesSoftware')->whereMonth('created_at', '=', '08')->where('status', '=', 'Pago')->where('origin', '=', 'Fábrica de Software')->sum('value');
        $response['agoManufacture'] = json_encode($agoManufacture);
        $setManufacture  = Payment::with('manufacturesSoftware')->whereMonth('created_at', '=', '09')->where('status', '=', 'Pago')->where('origin', '=', 'Fábrica de Software')->sum('value');
        $response['setManufacture'] = json_encode($setManufacture);
        $outManufacture  = Payment::with('manufacturesSoftware')->whereMonth('created_at', '=', '10')->where('status', '=', 'Pago')->where('origin', '=', 'Fábrica de Software')->sum('value');
        $response['outManufacture'] = json_encode($outManufacture);
        $novManufacture  = Payment::with('manufacturesSoftware')->whereMonth('created_at', '=', 11)->where('status', '=', 'Pago')->where('origin', '=', 'Fábrica de Software')->sum('value');
        $response['novManufacture'] = json_encode($novManufacture);
        $dezManufacture  = Payment::with('manufacturesSoftware')->whereMonth('created_at', '=', 12)->where('status', '=', 'Pago')->where('origin', '=', 'Fábrica de Software')->sum('value');
        $response['dezManufacture'] = json_encode($dezManufacture);
        $response['totalManufacture']  = Payment::with('manufacturesSoftware')->where('status', '=', 'Pago')->where('origin', '=', 'Fábrica de Software')->sum('value');
        /**end  Manufacture  */
        /**cowork  */
        $jancowork = Payment::with('Cowork')->whereMonth('created_at', '=', 01)->where('status', '=', 'Pago')->where('origin', '=', 'Cowork')->sum('value');
        $response['jancowork'] = json_encode($jancowork);
        $fevcowork  = Payment::with('Cowork')->whereMonth('created_at', '=', 02)->where('status', '=', 'Pago')->where('origin', '=', 'Cowork')->sum('value');
        $response['fecowork'] = json_encode($fevcowork);
        $marcowork  = Payment::with('Cowork')->whereMonth('created_at', '=', 03)->where('status', '=', 'Pago')->where('origin', '=', 'Cowork')->sum('value');
        $response['marcowork'] = json_encode($marcowork);
        $abrcowork  = Payment::with('Cowork')->whereMonth('created_at', '=', 04)->where('status', '=', 'Pago')->where('origin', '=', 'Cowork')->sum('value');
        $response['abrcowork'] = json_encode($abrcowork);
        $maiocowork  = Payment::with('Cowork')->whereMonth('created_at', '=', 05)->where('status', '=', 'Pago')->where('origin', '=', 'Cowork')->sum('value');
        $response['maiocowork'] = json_encode($maiocowork);
        $juncowork  = Payment::with('Cowork')->whereMonth('created_at', '=', 06)->where('status', '=', 'Pago')->where('origin', '=', 'Cowork')->sum('value');
        $response['juncowork'] = json_encode($juncowork);
        $julcowork  = Payment::with('Cowork')->whereMonth('created_at', '=', 07)->where('status', '=', 'Pago')->where('origin', '=', 'Cowork')->sum('value');
        $response['julcowork'] = json_encode($julcowork);
        $agocowork   = Payment::with('Cowork')->whereMonth('created_at', '=', '08')->where('status', '=', 'Pago')->where('origin', '=', 'Cowork')->sum('value');
        $response['agocowork'] = json_encode($agocowork);
        $setcowork  = Payment::with('Cowork')->whereMonth('created_at', '=', '09')->where('status', '=', 'Pago')->where('origin', '=', 'Cowork')->sum('value');
        $response['setcowork'] = json_encode($setcowork);
        $outcowork  = Payment::with('Cowork')->whereMonth('created_at', '=', '10')->where('status', '=', 'Pago')->where('origin', '=', 'Cowork')->sum('value');
        $response['outcowork'] = json_encode($outcowork);
        $novcowork  = Payment::with('Cowork')->whereMonth('created_at', '=', 11)->where('status', '=', 'Pago')->where('origin', '=', 'Cowork')->sum('value');
        $response['novcowork'] = json_encode($novcowork);
        $dezcowork  = Payment::with('Cowork')->whereMonth('created_at', '=', 12)->where('status', '=', 'Pago')->where('origin', '=', 'Cowork')->sum('value');
        $response['dezcowork'] = json_encode($dezcowork);
        $response['totalcowork']  = Payment::with('Cowork')->where('status', '=', 'Pago')->where('origin', '=', 'Cowork')->sum('value');
        /**end  cowork  */

        /**Auditoriums  */
        $janAuditoriums = Payment::with('Auditoriums')->whereMonth('created_at', '=', 01)->where('status', '=', 'Pago')->where('origin', '=', 'Auditório')->sum('value');
        $response['janAuditoriums'] = json_encode($janAuditoriums);
        $fevAuditoriums  = Payment::with('Auditoriums')->whereMonth('created_at', '=', 02)->where('status', '=', 'Pago')->where('origin', '=', 'Auditório')->sum('value');
        $response['feAuditoriums'] = json_encode($fevAuditoriums);
        $marAuditoriums  = Payment::with('Auditoriums')->whereMonth('created_at', '=', 03)->where('status', '=', 'Pago')->where('origin', '=', 'Auditório')->sum('value');
        $response['marAuditoriums'] = json_encode($marAuditoriums);
        $abrAuditoriums  = Payment::with('Auditoriums')->whereMonth('created_at', '=', 04)->where('status', '=', 'Pago')->where('origin', '=', 'Auditório')->sum('value');
        $response['abrAuditoriums'] = json_encode($abrAuditoriums);
        $maioAuditoriums  = Payment::with('Auditoriums')->whereMonth('created_at', '=', 05)->where('status', '=', 'Pago')->where('origin', '=', 'Auditório')->sum('value');
        $response['maioAuditoriums'] = json_encode($maioAuditoriums);
        $junAuditoriums  = Payment::with('Auditoriums')->whereMonth('created_at', '=', 06)->where('status', '=', 'Pago')->where('origin', '=', 'Auditório')->sum('value');
        $response['junAuditoriums'] = json_encode($junAuditoriums);
        $julAuditoriums  = Payment::with('Auditoriums')->where('status', '=', 'Pago')->whereMonth('created_at', '=', 07)->where('origin', '=', 'Auditoriums')->sum('value');
        $response['julAuditoriums'] = json_encode($julAuditoriums);
        $agoAuditoriums   = Payment::with('Auditoriums')->whereMonth('created_at', '=', '08')->where('status', '=', 'Pago')->where('origin', '=', 'Auditório')->sum('value');
        $response['agoAuditoriums'] = json_encode($agoAuditoriums);
        $setAuditoriums  = Payment::with('Auditoriums')->whereMonth('created_at', '=', '09')->where('status', '=', 'Pago')->where('origin', '=', 'Auditório')->sum('value');
        $response['setAuditoriums'] = json_encode($setAuditoriums);
        $outAuditoriums  = Payment::with('Auditoriums')->whereMonth('created_at', '=', '10')->where('status', '=', 'Pago')->where('origin', '=', 'Auditório')->sum('value');
        $response['outAuditoriums'] = json_encode($outAuditoriums);
        $novAuditoriums  = Payment::with('Auditoriums')->whereMonth('created_at', '=', 11)->where('status', '=', 'Pago')->where('origin', '=', 'Auditório')->sum('value');
        $response['novAuditoriums'] = json_encode($novAuditoriums);
        $dezAuditoriums  = Payment::with('Auditoriums')->whereMonth('created_at', '=', 12)->where('status', '=', 'Pago')->where('origin', '=', 'Auditório')->sum('value');
        $response['dezAuditoriums'] = json_encode($dezAuditoriums);
        $response['totalAuditoriums']  = Payment::with('Auditoriums')->where('status', '=', 'Pago')->where('origin', '=', 'Auditório')->sum('value');
        /**end  Auditoriums  */

        return view('admin.Statistics.statisticsSection.index', $response);
    }
}

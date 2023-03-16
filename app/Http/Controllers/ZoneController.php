<?php

namespace App\Http\Controllers;

use App\Models\Minerai;
use App\Models\Zone;
use Illuminate\Http\Request;

class ZoneController extends Controller
{
    public function list()
    {
        $minerais = Minerai::all();
        $zones = Zone::all();
        return view('zone_list', compact('minerais', 'zones'));
    }

    public function show($id)
    {
        $zone = Zone::find($id);
        return view('zone_show', compact('zone'));
    }


    public function create(Request $request)
    {
        if ($request->input('danger') && $request->input('date') && $request->input('quantite') !== null) {
            $zone = new Zone;
            $zone->danger = $request->input('danger');
            $zone->date = $request->input('date');
            $zone->quantite = $request->input('quantite');
            $zone->minerai_id = $request->input('minerai');
            $zone->save();
            return redirect('/zone/create');
        }
        $zones = Zone::all();
        $minerais = Minerai::all();
        return view('zone_form', ['path' => 'create', 'zones' => $zones, 'minerais' => $minerais]);
    }

    public function update(Request $request, $id = null)
    {
        if ($request->input('danger') && $request->input('date') && $request->input('quantite') !== null) {
            $zone = Zone::find($request->input('id'));
            $zone->danger = $request->input('danger');
            $zone->date = $request->input('date');
            $zone->quantite = $request->input('quantite');
            $zone->save();
            return redirect('/zone/create');
        }
        $minerais = Minerai::all();
        $zones = Zone::find($id);
        // $zones = Zone::all();
        return view('zone_update', ['path' => 'update', 'zone' => $zones, 'minerais' => $minerais]);
    }



    public function delete($id)
    {
        $zone = Zone::find($id);
        $zone->delete();
        return redirect('/zone/create');
    }

    public function destroy()
    {
        return redirect('/zone');
    }

}

?>



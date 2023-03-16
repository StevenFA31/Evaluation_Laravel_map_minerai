<?php

namespace App\Http\Controllers;

use App\Models\Minerai;
use App\Models\Zone;
use Illuminate\Http\Request;

class MineraiController extends Controller
{
    public function list()
    {
        $minerais = Minerai::all();
        return view('minerai_list', compact('minerais'));
    }

    public function show($id)
    {
        $minerais = Minerai::find($id);
        $zones = Zone::where('minerai_id', $id);
        return view('minerai_show', ['zones' => $zones, 'minerais' => $minerais]);
    }

    public function create(Request $request)
    {
        if ($request->input('type') !== null) {
            $minerai = new Minerai;
            $minerai->type = $request->input('type');
            $minerai->save();
            return redirect('/minerai');
        }
        $minerais = Minerai::all();
        return view('minerai_form', ['path' => 'create', 'minerais' => $minerais]);
    }

    public function update(Request $request, $id = null)
    {
        if ($request->input('type') !== null) {
            $minerai = Minerai::find($request->input('id'));
            $minerai->type = $request->input('type');
            $minerai->save();
            return redirect('/minerai');
        }
        $minerai = Minerai::find($id);
        // $minerai = Minerai::all();
        return view('minerai_update', ['path' => 'update', 'minerai' => $minerai]);
    }



    public function delete($id)
    {
        $minerais = Minerai::find($id);
        $minerais->delete();
        return redirect('/minerai');
    }

    public function destroy()
    {
        return redirect('/minerai');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suivi;
use Livewire\Component\ContactForms;
use App\Models\Initial;
use App\Exports\SuivisExport;
use App\Imports\SuivisImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class SuiviController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function index()
    {
        $data = Suivi::all();

        return view('suivis.index' , compact('data'));
        // 
        // dd($suivis);

    }

        /**
    * @return \Illuminate\Support\Collection
    */
    public function export()
    {
        return Excel::download(new SuivisExport, 'suivis.xlsx');
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function import()
    {
        Excel::import(new SuivisImport,request()->file('file'));

        // return view('suivis.create');
        return back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
            // 'initial' => 'required|integer',
            'date' => 'required|string',
            'libelle' => 'required|string',
            'entree' => 'required|string',
            'sortie' => 'required|string',
             ]);

            

      return Redirect::route('suivis.index')->with('success', 'Félicitation, les informations ont bien été enrégistrées.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Suivi $id)
    {
        return view('suivis.show', compact('id'));
        // $data = Suivi::where('id', $id)->with('user')->first();
        // return view('suivis.show', compact('data'));

        // return view('suivis.show', [
        //     'data' => $data
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($data)
    {
        // $data = Suivi::where('id', $id)->first();
        return view('suivis.edit', compact('data'));
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
        $data = Suivi::where('id', $request->id)->first();

        $data->update($request->all());


      return Redirect::route('suivis.index')->with('success', 'Félicitation, les informations ont bien été enrégistrées.');
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

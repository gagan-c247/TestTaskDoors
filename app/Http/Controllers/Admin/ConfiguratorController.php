<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\{Configurator, Attribute};
use App\Http\Requests\ConfiguratorRequest;

class ConfiguratorController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $allConfig = Configurator::orderBy('id', 'DESC')->paginate(10);
        $allAttributes = Attribute::with('attributeDetails')->get();
        return view('dashboard.admin.configurator.index', compact('allConfig', 'allAttributes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $allAttributes = Attribute::with('attributeDetails')->get();
        return view('dashboard.admin.configurator.create', compact('allAttributes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ConfiguratorRequest $request){
        $data = [
            'section' => $request->section,
            'attribute' => implode(',', $request->attribute),
        ];
        Configurator::create($data);
        session()->flash('success', 'Configurator Inserted Successfully!');
        return redirect('/admin/configurator');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $config = Configurator::where('id', $id)->first();
        $allAttributes = Attribute::with('attributeDetails')->get();
        return view('dashboard.admin.configurator.edit', compact('config', 'allAttributes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ConfiguratorRequest $request, $id){
        $data = [
            'section' => $request->section,
            'attribute' => implode(',', $request->attribute),
        ];
        Configurator::where('id', $id)->update($data);
        session()->flash('success', 'Configurator Updated Successfully!');
        return redirect('/admin/configurator');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $config = Configurator::find($id);
        $config->delete();
        session()->flash('success', 'Configurator Deleted Successfully!');
        return redirect('/admin/configurator');
    }
}
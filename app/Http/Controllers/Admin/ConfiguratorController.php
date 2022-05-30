<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Configurator, Attribute};
use App\Http\Requests\ConfiguratorRequest;

class ConfiguratorController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $allConfig = Configurator::first();
        $allAttributes = Attribute::with('attributeDetails')->get();
        return view('dashboard.admin.configurator.index', compact('allConfig', 'allAttributes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $allConfig = Configurator::first();
        $allAttributes = Attribute::with('attributeDetails')->get();
        return view('dashboard.admin.configurator.create', compact('allConfig', 'allAttributes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ConfiguratorRequest $request){
        $data = [
            'base_option' => implode(',', $request->base_option),
            'door' => implode(',', $request->door),
            'face' => implode(',', $request->face),
            'hardware' => implode(',', $request->hardware),
        ];

        $config = Configurator::first();
        if($config){
            $config->update($data);
            session()->flash('success','Configurator Updated Successfully!');
        }else{
            Configurator::create($data);
            session()->flash('success','Configurator Inserted Successfully!');
        }
        return redirect('/admin/configurator');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){

    }
}
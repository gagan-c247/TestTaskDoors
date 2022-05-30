<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Configurator;
use App\Http\Requests\ConfiguratorRequest;

class ConfiguratorController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('dashboard.admin.configurator.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('dashboard.admin.configurator.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ConfiguratorRequest $request){
        $data = [
            'series' => $request->series,
            'product_type' => $request->product_type,
            'door_opening_type' => $request->door_opening_type,
            'opening_option' => $request->opening_option,
            'standerd_size' => $request->standerd_size,

            'ratting' => $request->ratting,
            'core_material' => $request->core_material,
            'agency' => $request->agency,

            'face_type' => $request->face_type,
            'cut' => $request->cut,
            'grade' => $request->grade,

            'hardware_type' => $request->hardware_type,
            'sub_category' => $request->sub_category,
            'hinge_height' => $request->hinge_height,
        ];

        $attribute = Configurator::create($data);
        session()->flash('success','Configurator Inserted Successfully!');
        return redirect('/admin/configurator');
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

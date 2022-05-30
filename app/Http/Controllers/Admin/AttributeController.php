<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Attribute,AttributeDetail};

class AttributeController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Attribute $attribute){
        $allAttribute = Attribute::paginate(10);
        return view('dashboard.admin.attribute.index', compact('attribute','allAttribute'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data['name'] = $request['name'];
        $data['type'] = $request['type'];
        $attribute = Attribute::create($data);
        for($i =0; $i < $request['total_row']; $i++) {
            $table['title'] = $request['titleNew_'.($i+1)];
            $table['price'] = $request['priceNew_'.($i+1)]; 
            $table['attribute_id'] = $attribute['id'];
            $j = 0;
            $img = [];
            foreach($request['fileNew_'.($i+1)] as  $file) {
                $name = time() .'type-'.$j.$i. '.' . $file->getClientOriginalExtension();
                $destinationPath = public_path('/frontend/attr-img');
                $file->move($destinationPath, $name);
                $img[$j] =  $name;
                $j++;
            }
            $table['filename'] = json_encode($img);
            AttributeDetail::create($table);
        }
        session()->flash('success','Attribute Inserted Successfully!');
        return back();
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
        $attribute = Attribute::with('attributeDetails')->find($id);
        $allAttribute = Attribute::paginate(10);
        return view('dashboard.admin.attribute.index', compact('attribute','allAttribute'));
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
        $data['name'] = $request['name'];
        $data['type'] = $request['type'];
        $attribute = Attribute::find($id);
        $attribute->update($data);
        if($request['remove-id']) {
            $deleteRows =  explode(',',$request['remove-id']);
            AttributeDetail::whereIn('id',$deleteRows)->delete();
        }
        if($data['type'] == 'input' || $attribute['type'] != $data['type']) {
            AttributeDetail::where('attribute_id',$id)->delete();
        }
        for($i =0; $i < $request['total_row']; $i++) {
            $table['title'] = $request['title_'.($i+1)] ?? $request['titleNew_'.($i+1)];
            $table['price'] = $request['price_'.($i+1)] ?? $request['priceNew_'.($i+1)]; 
            $table['attribute_id'] = $id;
            $j = 0;
            $img = [];
            if($request->has('file_'.($i+1))){
                foreach($request['file_'.($i+1)] as  $file) {
                    $name = time() .'type-'.$j.$i. '.' . $file->getClientOriginalExtension();
                    $destinationPath = public_path('/frontend/attr-img');
                    $file->move($destinationPath, $name);
                    $img[$j] =  $name;
                    $j++;
                }
                $table['filename'] = json_encode($img);
            }elseif( $request->has('fileNew_'.($i+1)) ){
                foreach($request['fileNew_'.($i+1)] as  $file) {
                    $name = time() .'type-'.$j.$i. '.' . $file->getClientOriginalExtension();
                    $destinationPath = public_path('/frontend/attr-img');
                    $file->move($destinationPath, $name);
                    $img[$j] =  $name;
                    $j++;
                }
                $table['filename'] = json_encode($img);
            }
            if($request->has('title_'.($i+1))) {
                AttributeDetail::where('id',$request['id_'.($i+1)])->update($table);
            }elseif( $request->has('titleNew_'.($i+1)) ) {
                AttributeDetail::create($table);
            }
        }
        session()->flash('success','Attribute Updated Successfully!');
        return back();
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

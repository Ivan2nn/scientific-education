<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\MaterialRequest;
use App\Material;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materials = Material::all();
        return view('basic.materials', compact('materials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin_panel.creatematerial');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MaterialRequest $request)
    {	
    	$input = $request->all();
        $document = $input['file'];
        $destinationPath = 'documents/'. $input['published_at'] .'/';
        $nameFile = $document->getClientOriginalName();
        $uploadSuccess = $document->move($destinationPath, $nameFile);
        $input['file'] = $destinationPath . $nameFile; 

        $newMaterial = Material::create($input);

        // since we can't make mass assignment::
        $newMaterial->filename = $nameFile;
        $newMaterial->user_id = $request->user()->id; 
        $newMaterial->save();
        return redirect('material');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($material)
    {
        return view('basic.material', compact('material'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($material)
    {
        return view('admin_panel.editmaterial', compact('material'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MaterialRequest $request, $material)
    {
        $input = $request->all();

        if (!isset($input['file']))
        {
           $input['file'] = $material->file;
           $nameFile = $material->filename;
        }       
        
        else
        {
            $document = $input['file'];
            $destinationPath = 'documents/'. $input['published_at'] .'/';
            $nameFile = $document->getClientOriginalName();
            $uploadSuccess = $document->move($destinationPath, $nameFile);
            $input['file'] = $destinationPath . $nameFile;   
        }
        
        $material->update($input);
        $material->filename = $nameFile;
        $material->update();
        return redirect('material');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($material)
    {
        //
    }
}

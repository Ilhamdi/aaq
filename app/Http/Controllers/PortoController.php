<?php

namespace App\Http\Controllers;

use App\Models\Porto;
use App\Models\Porto_list;
use Illuminate\Http\Request;

class PortoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Porto::all();

        $params = [
            'title'=> 'Data Portofolio',
            'data'=> $data,
        ];

        return view('admin.porto.index')->with($params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $param = [
            'title'=>'Buat Portofolio',
        ];
        return view('admin.porto.create')->with($param);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $filename = '';

        if ($image = $request->file('image')) {
            $destinationPath = 'images/porto';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
            $filename = $input['image'];
        }

        $Porto = Porto::create([
            'client'=> $request->client,
            'event'=> $request->event,
            'image'=> $filename,

        ]);

        return redirect()->route('porto.index')->with('success',"Data  berhasil dibuat.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Porto  $porto
     * @return \Illuminate\Http\Response
     */
    public function show(Porto $porto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Porto  $porto
     * @return \Illuminate\Http\Response
     */
    public function edit(Porto $porto)
    {
        try{
            $data = Porto::findOrFail($porto->id);

            $params = [
                'title' => 'Edit Portofolio',
                'porto' => $data,
            ];

            return view('admin.porto.edit')->with($params);
        }
        catch (ModelNotFoundException $ex) 
        {
            if ($ex instanceof ModelNotFoundException)
            {
                return response()->view('errors.'.'404');
            }
        }
    }


    public function addImage(Porto $porto)
    {
        try {
            $data = Porto::findOrFail($porto->id);

            $params = [
                'title' => 'Add Image Portofolio',
                'porto' => $data,
            ];

            return view('admin.porto.addImage')->with($params);
            
        } catch (ModelNotFoundException $ex) {
            if ($ex instanceof ModelNotFoundException)
            {
                return response()->view('errors.'.'404');
            }
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Porto  $porto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Porto $porto)
    {
        $data = Porto::findOrFail($porto->id);
        $input = $request->all();
        $filename = $data->image;

        if ($image = $request->file('image')) {
            $destinationPath = 'images/display';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
            $filename = $input['image'];
        }

        $data->client= $request->client;
        $data->event = $request->event;
        $data->image = $filename;
        $data->save();
        return redirect()->route('porto.index')->with('success', " Data Konten Berhasil di update.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Porto  $porto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Porto $porto)
    {
        try
        {
            $data = Porto::findOrFail($porto->id);

            $data->delete();
            DB::table("porto_list")->where('portos_id',$porto->id)->delete();
            return redirect()->route('porto.index')->with('success', "Konten sudah di Hapus.");
        }
        catch (ModelNotFoundException $ex) 
        {
            if ($ex instanceof ModelNotFoundException)
            {
                return response()->view('errors.'.'404');
            }
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Client::all();

        $params = [
            'title'=> 'Data Client',
            'data'=> $data,
        ];

        return view('admin.client.index')->with($params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $param = [
            'title'=>'Buat Client',
        ];
        return view('admin.client.create')->with($param);
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

        if ($image = $request->file('logo')) {
            $destinationPath = 'images/clients';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            
            $image->move($destinationPath, $profileImage);
            $input['logo'] = "$profileImage";
            $filename = $input['logo'];
        }

        $content = Client::create([
            'nama'=> $request->nama,
            'desk'=> $request->deskripsi,
            'logo'=> $filename,
            

        ]);

        return redirect()->route('client.index')->with('success',"Data  berhasil dibuat.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        try{
            $data = Client::findOrFail($client->id);

            $params = [
                'title' => 'Edit Klien',
                'content' => $data,
            ];

            return view('admin.client.edit')->with($params);
        }
        catch (ModelNotFoundException $ex) 
        {
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
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $data = Content::findOrFail($content->id);
        $input = $request->all();
        $filename = $data->logo;

        if ($image = $request->file('logo')) {
            $destinationPath = 'images/client';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            
            $image->move($destinationPath, $profileImage);
            $input['logo'] = "$profileImage";
            $filename = $input['logo'];
        }

        $data->nama = $request->nama;
        $data->logo = $filename;
        $data->desk = $request->deskripsi;
        $data->save();

        return redirect()->route('client.index')->with('success', " Data Klien Berhasil di update.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        try
        {
            $data = Client::findOrFail($client->id);

            $data->delete();
            return redirect()->route('client.index')->with('success', "Klien sudah di Hapus.");
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

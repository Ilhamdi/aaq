<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Image;

class ContentController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Content::all();

        $params = [
            'title'=> 'Data Kontent',
            'data'=> $data,
        ];

        return view('admin.content.index')->with($params);
    }

    public function getContent($string){
        $data = Content::where('section','=',$string)->orderBy('urut','asc')->get();
        $params = [
            'title'=> 'Beranda',
            'data'=> $data,
        ];
        return view('admin.content.index')->with($params);
    }

    public function beranda()
    {
        $slider = Content::where('section','=','slider')->get();
        $heading_block = Content::where('section','=','heading-block')->first();
        $last_event1 = Content::where('section','=','last-event')->where('urut','=','1')->first();
        $last_event = Content::where('section','=','last-event')->where('urut','=','2')->first();
        $params = [
            'title'=> 'Data Beranda',
            'slider'=> $slider,
            'heading_block'=> $heading_block,
            'last_event1'=> $last_event1,
            'last_event'=> $last_event,
        ];

        return view('beranda')->with($params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $param = [
            'title'=>'Buat Konten',
        ];
        return view('admin.content.create')->with($param);
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
            $destinationPath = 'images/display';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
            $filename = $input['image'];
        }

        $content = Content::create([
            'judul'=> $request->judul,
            'span'=> $request->span,
            'status'=> $request->status,
            'section'=> $request->section,
            'link'=> $request->link,
            'menu'=> $request->menu,
            'image'=> $filename,
            'urut'=>$request->urut,

        ]);

        

        return redirect()->route('content.index')->with('success',"Data  berhasil dibuat.");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function show(Content $content)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function edit(Content $content)
    {
        try{
            $data = Content::findOrFail($content->id);

            $params = [
                'title' => 'Edit Konten',
                'content' => $data,
            ];

            return view('admin.content.edit')->with($params);
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
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Content $content)
    {
        $data = Content::findOrFail($content->id);
        $input = $request->all();
        $filename = $data->image;

        if ($image = $request->file('image')) {
            $destinationPath = 'images/display';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
            $filename = $input['image'];
        }

        $data->judul = $request->judul;
        $data->span = $request->span;
        $data->status = $request->status;
        $data->section = $request->section;
        $data->link = $request->link;
        $data->menu = $request->menu;
        $data->image = $filename;
        $data->urut = $request->urut;
        $data->save();
        return redirect()->route('content.index')->with('success', " Data Konten Berhasil di update.");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function destroy(Content $content)
    {
        try
        {
            $data = Content::findOrFail($content->id);

            $data->delete();
            return redirect()->route('content.index')->with('success', "Konten sudah di Hapus.");
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

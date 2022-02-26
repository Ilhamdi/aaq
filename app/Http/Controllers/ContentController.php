<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Client;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\App;

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
        $locale = App::currentLocale();

        $slider = Content::where('section','=','slider')->where('lang','=',$locale)->orderBy('urut','asc')->get();
        $heading_block = Content::where('section','=','heading-block')->where('lang','=',$locale)->first();
        $layanan = Content::where('section','=','layanan')->where('lang','=',$locale)->orderBy('urut','asc')->get();
        $client = Client::all();

        $params = [
            'title'=> 'Data Beranda',
            'slider'=> $slider,
            'heading_block'=> $heading_block,
            //'last_event1'=> $last_event1,
            'layanan'=> $layanan,
            'client' => $client,
        ];

        return view('beranda')->with($params);
    }

    public function tentang()
    {
        $locale = App::currentLocale();

        $data = Content::where('section','=','galeri_about')->orderBy('urut','asc')->get();
        

        $params = [
            'title'=> 'Data Tentang',
            'data'=> $data,
            
        ];

        return view('tentang')->with($params);

    }
    public function services()
    {
        $params = [
            'title'=> 'Live Event',
            //'data'=> $data,
            
        ];

        return view('services.liveEvent')->with($params);
    }
    public function postProduction()
    {
        $params = [
            'title'=> 'Live Event',
            //'data'=> $data,
            
        ];

        return view('services.postProduction')->with($params);
    }
    public function videoProduction()
    {
        $params = [
            'title'=> 'Live Event',
            //'data'=> $data,
            
        ];

        return view('services.videoProduction')->with($params);
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
            'lang'=>$request->lang,
            'icon'=> $request->icon,
            'deskripsi'=>$request->deskripsi,

        ]);

        $data = Content::where('section','=',$request->section)->orderBy('urut','asc')->get();
        $params = [
            'title'=> 'Beranda',
            'data'=> $data,
        ];
        return view('admin.content.index')->with($params)->with('success',"Data  berhasil dibuat.");
        
        
        //return redirect()->route('content.index')->with('success',"Data  berhasil dibuat.");
        

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
        //$data = Content::where('id','=',$content->id)->where('section','=',$string)->orderBy('urut','asc')->get();
        

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
        $data->lang = $request->lang;
        $data->icon = $request->icon;
        $data->deskripsi = $request->deskripsi;
        $data->save();

        $tampilData = Content::where('section','=',$request->section)->orderBy('urut','asc')->get();
        $params = [
            'title'=> 'Beranda',
            'data'=> $tampilData,
        ];
        return view('admin.content.index')->with($params)->with('success',"Data  berhasil diUpdate.")->with('success', " Data Konten Berhasil di update.");    
        
        //return redirect()->route('content.index')->with('success', " Data Konten Berhasil di update.");

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

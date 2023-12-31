<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Pengajar;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        {
            $kelas = Kelas::orderBy('namakelas', 'asc')->simplePaginate(6);
            $filterKeyword = $request->get('keyword');
            if($filterKeyword) 
            {
                $kelas = Kelas::where('namakelas ', 'LIKE', "%$filterKeyword%")->paginate(3);
            }
            
            return view('admin.admin_sup.create_kelas', compact('kelas'));
        }
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allpengajar = Pengajar::all();
        
        return view('admin.admin_sup.create_kelas', compact('allpengajar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    // dd ($request);
    $data = $request->validate([
        'namakelas'          =>  ['required', 'string', 'max:255'],
        'deskripsikelas'     =>  ['required', 'string', 'max:255'],
        'harga'              =>  ['required', 'string', 'max:255'],
        'pengajarID'         =>  ['required'],
        'images'             =>  'required|image|mimes:jpeg,png,jpg,gif|max:5048',
    ]);

    $images = $request->file('images')->store('Gambar_Kelas');

    Kelas::create([
        'namakelas'         => $request->namakelas,
        'pengajarID'        => $request->pengajarID,
        'deskripsikelas'    => $request->deskripsikelas,
        'harga'             => $request->harga,
        "images"            => $images,
    ]);

    return redirect(route('kelas'))->with('success', "successfully uploaded your Kelas");
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
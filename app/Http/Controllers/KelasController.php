<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
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
        return view('admin.menu_bar.menu3');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'namakelas' =>  ['requaired','string','max:255'],
            'deskripsikelas' =>  ['requaired','string','max:255'],
            'images' =>  ['requaired','string'],
            'pengajarID' =>  ['requaired','string','max:255'],
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Kelas::create([
            'namakelas' => ['required','string','max:255'],
            'deskripsielas' => ['required','string','max:255'],
        ]);
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
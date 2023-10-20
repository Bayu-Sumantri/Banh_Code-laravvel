<?php

namespace App\Http\Controllers;

use App\Models\Pengajar;
use App\Models\User;
use Illuminate\Http\Request;

class PengajarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengajar = Pengajar::orderBy('namapengajar', 'asc')->simplePaginate(3);
        $total_pengajar = Pengajar::count();
        $users  = User::all();
        
        return view('admin.admin_sup.pengajar_create',compact('pengajar', 'total_pengajar', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users  = User::all();
        
        return view('admin.admin_sup.pengajar_create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $data = $request->validate([
            'namapengajar'          =>  ['required','string','max:255'],
            'spesialis'             =>  ['required','string','max:255'],
            'kontakemail'           =>  ['required','string','max:255'],
            'userID'                =>  ['required'],
        ]);

        Pengajar::create([
            "namapengajar"          => $request->namapengajar,
            "spesialis"             => $request->spesialis,
            "kontakemail"           => $request->kontakemail,
            "userID"                => $request->userID,
        ]);

        // return $data;

        return redirect(route('pengajar_create'))->with('success', "successfully uploaded your Pengajar");
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
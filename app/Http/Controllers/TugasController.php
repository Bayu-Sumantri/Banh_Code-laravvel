<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kelas;
use App\Models\Tugas;
use App\Models\Pengajar;
use Illuminate\Http\Request;

class TugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        {
            $tugas = Tugas::orderBy('name', 'asc')->simplePaginate(6);
            $filterKeyword = $request->get('keyword');
            if($filterKeyword) 
            {
                $tugas = Tugas::where('name ', 'LIKE', "%$filterKeyword%")->paginate(3);
            }
            
            return view('admin.user_sup.tugas', compact('tugas'));
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
        $alluser     = User::all();
        $allkelas    = Kelas::all();
        // return $episode;
        return view('admin.staff_sup.create_tugas', compact('allpengajar', 'alluser', 'allkelas'));
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
        'namatugas'          =>  ['required', 'string', 'max:255'],
        'keterangan'         =>  ['required', 'string', 'max:255'],
        'deadline'           =>  ['required', 'string', 'max:255'],
        'kelasID'            =>  ['required', 'max:50'],
        'userID'             =>  ['required', 'max:50'],
        'pengajarID'         =>  ['required', 'max:50'],
        // 'images'             =>  'required|image|mimes:jpeg,png,jpg,gif|max:5048',
    ]);

    // $images = $request->file('images')->store('Gambar_Kelas');

    Tugas::create([
        'namatugas'         => $request->namatugas,
        'keterangan'        => $request->keterangan,
        'deadline'          => $request->deadline,
        'kelasID'           => $request->kelasID,
        'userID'            => $request->userID,
        'pengajarID'        => $request->pengajarID,
        // "images"            => $images,
    ]);

    return redirect(route('tugas_create'))->with('success', "successfully uploaded your Tugas");
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
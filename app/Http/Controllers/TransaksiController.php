<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        {
            $transaksi = Transaksi::orderBy('name', 'asc')->simplePaginate(6);
            $filterKeyword = $request->get('keyword');
            if($filterKeyword) 
            {
                $transaksi = Transaksi::where('name ', 'LIKE', "%$filterKeyword%")->paginate(3);
            }
            
            return view('banhcode.transaksi_form', compact('transaksi'));
        }
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
    // return $request;
      $data = $request->validate([
        'name'                           =>  ['required', 'string', 'max:255'],
        'email'                          =>  ['required', 'string', 'max:255'],
        'metode_pembayaran'              =>  ['required', 'string', 'max:255'],
        'no_dana'                        =>  ['nullable', 'string', 'max:255'],
        'rek_bank'                       =>  ['nullable', 'string', 'max:255'],
        'no_telepon'                     =>  ['required', 'string', 'max:255'],
        'kelasID'                     =>  ['required'],

        // 'pengajarID'         =>  ['required'],
        // 'images'             =>  'required|image|mimes:jpeg,png,jpg,gif|max:5048',
    ]);

    //   $images = $request->file('images')->store('Gambar_Kelas');

      Transaksi::create([
        'name'                          => $request->name,
        'pengajarID'                    => $request->pengajarID,
        'email'                         => $request->email,
        'metode_pembayaran'             => $request->metode_pembayaran,
        'no_dana'                       => $request->no_dana,
        'rek_bank'                      => $request->rek_bank,
        'no_telepon'                    => $request->no_telepon,
        'kelasID'                       => $request->kelasID,

        // "images"            => $images,
    ]);

      return redirect(route('dashboard'))->with('success', "successfully Buy A Class");
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
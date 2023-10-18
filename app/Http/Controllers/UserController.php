<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::orderBy('name', 'asc')->simplePaginate(3);
        $total_user = User::count();
        return view('admin.admin_sup.user_create', compact('user', 'total_user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admin_sup.user_create');
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required',
            'level' => 'required|string|max:255',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'level' => $request->level,
        ]);
        // return $request;
        return redirect()->route('User.index')->with('success', "successfully Create user");
        
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
        $user = User::findOrFail($id);
        if ($request->hasFile('Profile')) {
            if ($user->Profile) {
                Storage::delete($user->Profile);
            }

            $path = $request->file('Profile')->store('Profile');
        } else {

            $path = $user->Profile;
        }
        $user -> update([
           'name'           =>$request->name,  
           'email'          =>$request->email,   
           'level'          =>$request->level,   
           "Profile"        => $path ?? $user->Profile
       ]);
       return redirect( route('user_list'))->with('success', 'Item updated successfully');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id, User $user)
    {
        $user = User::findOrFail($id);
        $profilePath = $user->Profile;
  
        if (!is_null($profilePath)) {
          Storage::delete($profilePath);
      }
  
      $user->delete();
  
      $user = User::orderBy('name', 'asc')->simplePaginate(3);
      $total_user = User::count();
      return view('admin.admin_sup.user_crud.list_user', compact('user', 'total_user'))->with('status', 'User berhasil dihapus'); 
    }
}
@extends('admin.admin_master')
@section('admin')
@section('tittle')
    User Edit
@endsection


    <!-- update user dan gmail mulai -->
    <div class="container-fluid pt-4 px-4">

        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('Poto.update', auth()->user()->id) }}" method="post" enctype="multipart/form-data">
            @method('patch')
            @csrf
            <div class="bg-secondary rounded h-100 p-4">
                <div class="section">
                    <h3 style="font-size: 18px; font-family: 'Figtree', sans-serif;">PROFILE SETTINGS</h3>
                    <p style="font-size: 14px; font-family: 'Figtree', sans-serif;">Update your account's profile
                        information and email address.</p>
                </div>


                @if (auth()->user()->Profile)
                    <img class="user" src="{{ \Illuminate\Support\Facades\Storage::url(auth()->user()->Profile) }}"
                        alt="">
                @endif

               <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="Profile">
                        <label class="custom-file-label" for="exampleInputFile">Choose img</label>
                    </div>
                </div>
                    <button type="submit" class="btn btn-primary" style="margin: 5px; font-size: 12px;">Save</button>
                </div>
        </form>

    </div>

    </div>
    <!-- update user dan gmail selesai -->




    <!-- update user dan gmail mulai -->
    <div class="container-fluid pt-4 px-4">

        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('profile.update') }}" method="post" enctype="multipart/form-data">
            @method('patch')
            @csrf
            <div class="bg-secondary rounded h-100 p-4">
                <!-- 			<div class="mb-3">
            <input class="form-control bg-dark user" type="file" id="formFile" name="Gambar_anime">
           </div> -->
                <!-- <img type="file" class="user" src="{{ asset('/admin/img/user.jpg') }}	" alt=""> -->
                <div class="section">
                    <h3 style="font-size: 18px; font-family: 'Figtree', sans-serif;">PROFILE SETTINGS</h3>
                    <p style="font-size: 14px; font-family: 'Figtree', sans-serif;">Update your account's profile
                        information and email address.</p>
                </div>


                <div class="container" style="margin-top: 15px;">
                    <div class="form-floating mb-3">
                        <label for="floatingInput" style="font-family: 'Figtree', sans-serif;">username</label>
                        <input type="text" name="name" class="form-control" id="floatingInput" placeholder="AnimeKu"
                            value="{{ auth()->user()->name }}" required autofocus autocomplete="name">
                    </div>
                    <div class="form-floating mb-3">
                        <label for="floatingInput" style="font-family: 'Figtree', sans-serif";>gmail</label>
                        <input type="text" name="email" class="form-control" id="floatingInput" placeholder="AnimeKu"
                            value="{{ auth()->user()->email }}">
                    </div>
                    <button type="submit" class="btn btn-primary" style="margin: 5px; font-size: 12px;">Save</button>
                </div>
        </form>

    </div>

    </div>
    <!-- update user dan gmail selesai -->




    <!-- Update Password mulai -->
    <div class="container-fluid pt-4 px-4">

        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('password.update') }}" method="post" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="bg-secondary rounded h-100 p-4">
                <!-- 			<div class="mb-3">
            <input class="form-control bg-dark user" type="file" id="formFile" name="Gambar_anime">
           </div> -->
                <!-- <img type="file" class="user" src="{{ asset('/admin/img/user.jpg') }}	" alt=""> -->
                <div class="section">
                    <h3 style="font-size: 18px; vfont-family: 'Figtree', sans-serif;">UPDATE PASSWORD</h3>
                    <p style="font-size: 14px; vfont-family: 'Figtree', sans-serif;">Ensure your account is using a long,
                        random password to stay secure.</p>
                </div>


                <div class="container" style="margin-top: 15px;">
                    <div class="form-floating mb-3">
                        <label for="floatingInput" style="font-family: 'Figtree', sans-serif;">Current Password</label>
                        <input type="password" name="current_password" class="form-control" id="floatingInput"
                            placeholder="AnimeKu">
                        <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />

                    </div>
                    <div class="form-floating mb-3">
                        <label for="floatingInput" style="font-family: 'Figtree', sans-serif;">New Password</label>
                        <input type="password" name="password" class="form-control" id="floatingInput"
                            placeholder="AnimeKu">
                        <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />

                    </div>
                    <div class="form-floating mb-3">
                        <label for="floatingInput" style="font-family: 'Figtree', sans-serif;">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="floatingInput"
                            placeholder="AnimeKu">
                        <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />

                    </div>
                    <button type="submit" class="btn btn-primary" style="margin: 5px; font-size: 12px;">Save</button>
                </div>
        </form>

    </div>

    </div>
    <!-- update password selesai -->




    <div class="container-fluid pt-4 px-4">

        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('profile.destroy') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('delete')
            <div class="bg-secondary rounded h-100 p-4">
                <!-- 			<div class="mb-3">
            <input class="form-control bg-dark user" type="file" id="formFile" name="Gambar_anime">
           </div> -->
                <!-- <img type="file" class="user" src="{{ asset('/admin/img/user.jpg') }}	" alt=""> -->
                <div class="section">
                    <h3 style="font-size: 18px; vfont-family: 'Figtree', sans-serif;">DELETE ACCOUNT</h3>
                    <p style="font-size: 14px; vfont-family: 'Figtree', sans-serif;">Once your account is deleted, all of
                        its resources and data will be permanently deleted. Before deleting your account, please download
                        any data or information that you wish to retain.</p>
                </div>


                <div class="container" style="margin-top: 15px;">
                    <button type="submit" class="btn btn-primary"
                        style="font-size: 12px; vfont-family: 'Figtree', sans-serif;">DELETE ACCOUNT</button>
                </div>
        </form>

    </div>

    </div>
@endsection

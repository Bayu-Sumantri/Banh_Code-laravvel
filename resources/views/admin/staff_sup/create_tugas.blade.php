@extends('admin.admin_master')
@section('admin')
@section('tittle')
    Create Tugas
@endsection





<div class="container-fluid pt-4 px-4">

    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('Tugas.store') }}" method="post">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Tugas</label>
                <input type="text" class="form-control" id="exampleInputtext" name="namatugas" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Penjelasan</label>
                <input type="text" class="form-control" id="exampleInputtext" name="keterangan"
                    placeholder="Enter Penjelasan">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Tenggat Waktu</label>
                <input type="text" class="form-control" id="exampleInputtext" name="deadline"
                    placeholder="Enter Deadline">
            </div>

            <div class="form-group">
                <label for="exampleSelectBorder">nama dan spesialis </label>
                <select class="custom-select form-control-border" name="pengajarID" id="exampleSelectBorder">
                    <option value="#">Select</option>
                    @foreach ($allpengajar as $allpengajar)
                        <option value="{{ $allpengajar->pengajarID }}">{{ $allpengajar->namapengajar }} -
                            {{ $allpengajar->spesialis }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="exampleSelectBorder">nama user  </label>
                <select class="custom-select form-control-border" name="userID" id="exampleSelectBorder">
                    <option value="#">Select</option>
                    @foreach ($alluser as $user)
                        <option value="{{ $user->id }}">{{ $user->name }} - {{ $user->id }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="exampleSelectBorder">Kelas user  </label>
                <select class="custom-select form-control-border" name="kelasID" id="exampleSelectBorder">
                    <option value="#">Select</option>
                    @foreach ($allkelas as $kelas)
                        <option value="{{ $kelas->kelasID }}">{{ $kelas->namakelas }} - {{ $kelas->kelasID }}</option>
                    @endforeach
                </select>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
    </form>

</div>
@endsection

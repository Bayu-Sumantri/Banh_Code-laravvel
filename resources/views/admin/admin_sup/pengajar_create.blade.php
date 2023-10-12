@extends('admin.admin_master')
@section('admin')
@section('tittle')
    Pengajar Create
@endsection





<div class="container-fluid pt-4 px-4">

    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('Pengajar.store') }}" method="post">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Pengajar</label>
                <input type="text" class="form-control" id="exampleInputtext" name="namapengajar" placeholder="Enter nama pengajar">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Spesial</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="spesialis"
                    placeholder="Enter Spesial">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Email</label>
                <input type="email" class="form-control" id="exampleInputPassword1" name="kontakemail"
                    placeholder="Enter email pengajar">
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

</div>
@endsection

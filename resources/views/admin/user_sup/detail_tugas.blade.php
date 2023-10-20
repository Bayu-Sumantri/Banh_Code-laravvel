@extends('admin.admin_master')
@section('admin')
@section('tittle')
    Detail Tugas
@endsection

<div class="bg-secondary rounded h-100 p-4">

<h2 class="text-center">Tugas {{ old('namatugas', $tugas->namatugas) }}</h2>

<p class="lh-sm p-5">{{ old('keterangan', $tugas->keterangan) }}</p>
</div>


@endsection
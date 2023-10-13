@extends('admin.admin_master')
@section('admin')
@section('tittle')
    Kelas Create
@endsection





<div class="container-fluid pt-4 px-4">

    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('Kelas.store') }}" method="post">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Kelas</label>
                <input type="text" class="form-control" id="exampleInputtext" name="namakelas"
                    placeholder="Enter Nama Kelas">
            </div>
            <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="images">
                        <label class="custom-file-label" for="exampleInputFile">Choose img</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Deskripsi Kelas</label>
                <textarea class="form-control" rows="3" placeholder="Enter Deskripsi Kelas" name="deskripsikelas"></textarea>
            </div>

            <div class="form-group">
                <label for="exampleSelectBorder">nama dan spesialis </label>
                <select class="custom-select form-control-border" name="spesialis" id="exampleSelectBorder">
                    <option value="#">Select</option>
                    @foreach ($allpengajar as $pengajar)
                        <option value="{{ $pengajar->id }}">{{ $pengajar->namapengajar }} - {{ $pengajar->spesialis }}</option>
                    @endforeach
                </select>
            </div>

</div>

<div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>

</div>
@endsection

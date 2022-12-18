@extends('layouts.master')
@section('title','Edit Data Mahasiswa')
@section('active2','active')
@section('content')
<div class="container pt-4 bg-white">
    <div class="row">
        <div class="col-md-8">
            <h2>Edit Data Mahasiswa</h2>
            @if (session()->has('message'))
            <div class="my-3">
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        </div> 
        
            @endif 
            <form action="{{ route('mahasiswa.update',['mahasiswa' => $mahasiswa->id]) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" name="npm" placeholder="Example : 2010631170069" id="npm"  value="{{ old('npm') ?? $mahasiswa->npm}}"
                    class="form-control">
                    <label for="npm">NPM</label>
                    @error('npm')
                    <div class="text-danger">
                    {{ $message }}    
                    </div> 
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="nama" placeholder="Example : Fathan IlhanSilfa" id="nama" 
                    class="form-control" value="{{ old('nama')??$mahasiswa->nama }}">
                    <label for="nama">Nama</label>
                    @error('nama')
                    <div class="text-danger">
                    {{ $message }}    
                    </div> 
                    @enderror
                </div>
                
                <div class="form-floating mb-3">
                    <input type="text" name="umur" id="umur" placeholder="Example : 19" 
                    value="{{ old('umur') ?? $mahasiswa->umur}}" class="form-control">
                    <label for="umur">Umur</label>
                    @error('umur')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

            <div class="form-floating mb-3  ">
                <select name="prodi" placeholder="Masukkan Prodi" id="prodi" class="form-select">
                    <option value="Informatika" {{ old('prodi')??$mahasiswa->prodi == "Informatika" ? "selected" : "" }}>Informatika</option>
                    <option value="Sistem Informasi" {{ old('prodi')??$mahasiswa->prodi == "Sistem Informasi" ? "selected" : "" }}>Sistem Informasi</option>
                </select>
                <label for="prodi">Pilih Prodi</label>
                @error('prodi')
                <div class="text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="ukf_id" class="form-label">Pilih UKF yang Diikuti</label>
            <div class="form-group">
                @foreach ($ukfs as $ukf)
                <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" name="ukf_id[]" id="{{ $ukf->id }}" value="{{ $ukf->id }}" {{ $mahasiswa->ukfs()->find($ukf->id) ? 'checked' : '' }}>
                    <label for="{{ $ukf->id }}" class="form-check-label">{{ $ukf->nama_ukf }}</label>
                </div>
                    
                @endforeach
            </div>
        </div>
            
            <button type="submit" class="btn btn-primary">Ubah</button>
        </form>
        </div>
    </div>
</div>
@endsection
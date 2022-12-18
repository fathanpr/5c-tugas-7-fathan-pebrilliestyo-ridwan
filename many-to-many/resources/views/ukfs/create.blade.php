@extends('layouts.master')
@section('title','Input Data UKF')
@section('active3','active')
@section('content')
<div class="container pt-4 bg-white">
    <div class="row">
        <div class="col-md-8">
            <h2>Input Data UKF</h2>
            @if (session()->has('message'))
            <div class="my-3">
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        </div> 
            @endif 
            <form action="{{ route('ukf.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" name="nama_ukf" placeholder="Example : UKF Wayang (Fakyuyang)" id="nama_ukf" 
                    class="form-control" value="{{ old('nama_ukf') }}">
                    <label for="nama_ukf">Nama UKF</label>
                    @error('nama_ukf')
                    <div class="text-danger">
                    {{ $message }}    
                    </div> 
                    @enderror
                </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
        </div>
    </div>
</div>
@endsection
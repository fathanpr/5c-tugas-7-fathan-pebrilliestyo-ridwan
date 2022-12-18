@extends('layouts.master')
@section('title','Dashboard')
@section('active1','active')
@section('content')
    <div class="container mt-3 mb-5 pb-5">
        <div class="header">
            <h1 class="mb-5">Dashboard</h1>
            <div class="row">
                <div class="col-6">
                  <div class="card" style="max-width: 32rem;">
                        <h5 class="card-header bg-primary text-white">Mahasiswas<span><i class="bi bi-person-fill" style="float: right"></i></span></h5>
                        <div class="card-body">
                          <h5 class="card-title">Jumlah Mahasiswa Fasilkom</h5>
                          <p class="card-text">{{ $mahasiswas }} Mahasiswa</p>
                          <a href="/mahasiswa" class="btn btn-primary">Lihat Data</a>
                        </div>
                      </div>
                </div>
                <div class="col-6">
                  <div class="card" style="max-width: 32rem;">
                    <h5 class="card-header  bg-primary text-white">Data UKF Fasilkom <span> <i class="bi bi-people-fill" style="float: right"></i></span></h5>
                    <div class="card-body">
                      <h5 class="card-title">Jumlah UKF Fasilkom</h5>
                      <p class="card-text">{{ $ukfs }} UKF</p>
                          <a href="/ukf" class="btn btn-primary">Lihat Data</a>
                        </div>
                      </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
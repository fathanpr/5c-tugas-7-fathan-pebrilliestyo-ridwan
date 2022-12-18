@extends('layouts.master')
@section('title','Data UKF Fasilkom')
@section('active3','active')
@section('content')
<div class="row">
    <div class="col-md-12">
        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        
        @error(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Data gagal diubah/diinput, silahkan input kembali data UKF.</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @enderror

        <div class="card p-4">
            <h3 class="fw-bold">Data UKF Fasilkom</h3>
            <div class="card-body">
                <div class="tambahdata mb-3 d-flex justify-content-end">
                    <a href="{{ route('ukf.create') }}" class="btn btn-success">Tambah Data</a>
                </div>
                <div class="row g-3 align-items-center mb-3">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr  class="align-middle" style="text-align: center">
                                <th>No</th>
                                <th>Nama UKF</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ukfs as $ukf)
                            <tr class="align-middle" @if($loop->odd)  style="background-color: #f1f3f5; text-align: center"  @endif>
                                <td class="align-middle" style="text-align: center">{{ $loop->iteration + $ukfs->firstItem() - 1 }}</td>
                                <td class="align-middle" style="text-align: center">{{ $ukf->nama_ukf }}</td>
                                <td class="align-middle" style="text-align: center">
                            <a href="{{ route('ukf.edit',['ukf' => $ukf->id]) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('ukf.destroy',['ukf'=>$ukf->id]) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger mt-2">Hapus</button>
                            </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-start sm">
                        Showing
                        {{ $ukfs->firstItem() }}
                        to
                        {{ $ukfs->lastItem() }}
                        of
                        {{ $ukfs->total() }}
                        entries
                    </div>
                    <div class="paginate d-flex justify-content-center sm">
                    {{ $ukfs->links() }}
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
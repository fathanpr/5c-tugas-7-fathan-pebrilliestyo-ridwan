@extends('layouts.master')
@section('title','Data Mahasiswa Fasilkom')
@section('active2','active')
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
            <strong>Data gagal diubah, silahkan cek kembali form yang anda isi!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @enderror

        <div class="card p-4">
            <h3 class="fw-bold">Data Mahasiswa Fasilkom</h3>
            <div class="card-body">
                <div class="tambahdata mb-3 d-flex justify-content-end">
                    <a href="{{ route('mahasiswa.create') }}" class="btn btn-success">Tambah Data</a>
                </div>
                <div class="row g-3 align-items-center mb-3">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr  class="align-middle" style="text-align: center">
                                <th>NO</th>
                                <th>NPM</th>
                                <th>Nama</th>
                                <th>Umur</th>
                                <th>Prodi</th>
                                <th> </th>
                                <th>UKF(Diikuti)</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mahasiswas as $mahasiswa)
                            <tr @if($loop->odd)  style="background-color: #f1f3f5;"  @endif>
                                <td class="align-middle" style="text-align: center">{{ $loop->iteration + $mahasiswas->firstItem() - 1 }}</td>
                                <td class="align-middle" style="text-align: center">{{ $mahasiswa->npm }}</td>
                                <td class="align-middle" style="text-align: center">{{ $mahasiswa->nama }}</td>
                                <td class="align-middle" style="text-align: center">{{ $mahasiswa->umur }} Tahun</td>
                                <td class="align-middle" style="text-align: center">{{ $mahasiswa->prodi }}</td>
                                <td class="align-middle" style="text-align: center">{{ $mahasiswa->ukf }}</td>
                                <td class="align-middle" style="text-align: center">
                                    @forelse ($mahasiswa->ukfs as $item)
                                        <ul class="align-middle" style="text-align: center">
                                            <li class="align-middle" style="text-align: center">{{ $item->nama_ukf }}</li>
                                        </ul>
                                        @empty
                                       <div class="text-danger"> Mahasiswa belum mengikuti UKF sama sekali. </div>
                                        @endforelse
                                  
                                </td>
                                <td class="align-middle" style="text-align: center">
                                    <a href="{{ route('mahasiswa.edit',['mahasiswa' => $mahasiswa->id]) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('mahasiswa.destroy',['mahasiswa'=>$mahasiswa->id]) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger mt-2">
                                            Delete
                                        </button>
                                    </form>
                                        </td>
                                    </tr>
                                
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-start sm">
                        Showing
                        {{ $mahasiswas->firstItem() }}
                        to
                        {{ $mahasiswas->lastItem() }}
                        of
                        {{ $mahasiswas->total() }}
                        entries
                    </div>
                    <div class="paginate d-flex justify-content-center sm">
                    {{ $mahasiswas->links() }}
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
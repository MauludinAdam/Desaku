@extends('layout.template')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card" style="border: 1px solid #7FFF00">
            <div class="card-header d-flex justify-content-between">
                <div class="card-title"><i class="fas fa-home"></i><b>Kepala Rumah</b></div>
                <a href="{{ route('kepalaRumah/kepalarumah') }}" class="btn btn-dark"><i class="fas fa-arrow-left"></i> Kembali</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="gap-3">
                                    <label for="name" class="form-label fs-4 mb-3"><i class="ti ti-users" style="font-size: 1.5rem; color:#7FFF00"></i> {{ $keparum->name }}</label>
                                    <img src="{{ asset('storage/'. $keparum->image) }}" width="450" height="300" class="rounded" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-6">
                                            <div class="d-flex mt-3">
                                                <div class=" p-2">
                                                    <i class="fas fa-file" style="color: #7FFF00; font-size:1.5rem"></i>
                                                </div>
                                                <div class="mx-1">
                                                    <span class="fw-bold text-black" style="font-size: 1rem"><b>{{ $keparum->nik }}</b></span>
                                                    <p>Nomor Induk Kependudukan</p>
                                                </div>
                                            </div>
                                            <div class="d-flex mt-3">
                                                <div class=" p-2">
                                                    <i class="fas fa-calendar" style="color: #7FFF00; font-size:1.5rem"></i>
                                                </div>
                                                <div class="mx-1">
                                                    <span class="fw-bold text-black"><b>{{ $keparum->tgl_lhr }}</b></span>
                                                    <p>Tanggal Lahir</p>
                                                </div>
                                            </div>
                                            <div class="d-flex mt-3">
                                                <div class=" p-2">
                                                    <i class="fas fa-envelope" style="color: #7FFF00; font-size:1.5rem"></i>
                                                </div>
                                                <div class="mx-1">
                                                    <span class="fw-bold text-black"><b>{{ $keparum->email }}</b></span>
                                                    <p>Email Address</p>
                                                </div>
                                            </div>
                                            <div class="d-flex mt-3">
                                                <div class=" p-2">
                                                    <i class="ti ti-users" style="color: #7FFF00; font-size:1.5rem"></i>
                                                </div>
                                                <div class="mx-1">
                                                    <span class="fw-bold text-black"><b>{{ $keparum->jml_anggota }}</b></span>
                                                    <p>Anggota Keluarga</p>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="col-lg-6">
                                            <div class="d-flex mt-3">
                                                <div class=" p-2">
                                                    <i class="fas fa-phone" style="color: #7FFF00; font-size:1.5rem"></i>
                                                </div>
                                                <div class="mx-1">
                                                    <span class="fw-bold text-black" style="font-size: 1rem"><b>{{ $keparum->phone }}</b></span>
                                                    <p>Nomor Telpone</p>
                                                </div>
                                            </div>
                                            <div class="d-flex mt-3">
                                                <div class=" p-2">
                                                    <i class="fas fa-user" style="color: #7FFF00; font-size:1.5rem"></i>
                                                </div>
                                                <div class="mx-1">
                                                    <span class="fw-bold text-black"><b>{{ $keparum->jenkel }}</b></span>
                                                    <p>Jenis Kelamin</p>
                                                </div>
                                            </div>
                                            <div class="d-flex mt-3">
                                                <div class=" p-2">
                                                    <i class="fa-solid fa-mars-and-venus-burst" style="color: #7FFF00; font-size:1.5rem"></i>
                                                </div>
                                                <div class="mx-1">
                                                    <span class="fw-bold text-black"><b>{{ $keparum->status }}</b></span>
                                                    <p>Status Perkawinan</p>
                                                </div>
                                            </div>
                                            <div class="d-flex mt-3">
                                                <div class=" p-2">
                                                    <i class="fa-regular fa-building" style="font-size: 1.5rem; color:#7FFF00"></i>
                                                </div>
                                                <div class="mx-1">
                                                    <span class="fw-bold text-black"><b>{{ $keparum->pekerjaan }}</b></span>
                                                    <p>Pekerjaan</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                            </div>
                        </div>  
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

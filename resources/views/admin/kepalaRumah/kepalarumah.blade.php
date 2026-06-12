@extends('layout.template')

@section('content')
    <div class="col-lg-12">
        <div class="card" style="background-color: #f2f6f7">
            <div class="card-header">
                <div class="card-title">
                    <a href="{{ route('kepalaRumah/addData') }}" class="btn btn-success"><i class="fas fa-plus"></i> Add New</a>
                </div>
            </div>
            <div class="card-body">
                @if (@session('success'))
                    <div class="alert bg-success text-white">
                        <i class="fas fa-check-circle"></i> {{ session('success') }}
                    </div>
                @endif
               <table id="myTable" class="table table-striped" style="width: 100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Pekerjaan</th>
                            <th>NIK</th>
                            <th>Jml Keluarga</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($keparum as $item )
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->pekerjaan }}</td>
                                <td class="text-right">{{ $item->nik }}</td>
                                <td>
                                    <span class="bg-success p-2 rounded text-white"> <i class="ti ti-users"></i> {{ $item->jml_anggota }} Anggota Keluarga</span></td>
                                <td><img src="{{ asset('storage/' . $item->image) }}" class="rounded-circle" width="50" height="50" alt=""></td>
                                <td width="20%">
                                    <a href="{{ route('kepalaRumah/editData', $item->id) }}" class="btn btn-warning"><i class="fas fa-pen-square"></i></a>
                                    <a href="{{ route('kepalaRumah/show', $item->id) }}" class="btn btn-dark"><i class="fas fa-eye"></i></a>
                                    <a href="{{ route('kepalaRumah/destroy', $item) }}" class="btn btn-danger" onclick="return confirm('Yakin, ingin menghapus data ini ?')"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
               </table>
            </div>
        </div>
    </div>
@endsection

@extends('layout.template')

@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Profil Kepala Keluarga</div>
            </div>
            <div class="card-body">
                <form action="{{ route('kepalaRumah/store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="name" class="form-label">Nama kelapa Keluarga</label>
                        <input type="text" name="name" class="form-control @error('name')
                            is-invalid
                        @enderror" value="{{ old('name') }}" placeholder="Masukkan Nama Keluarga">
                        <small class="text-danger">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </small>
                    </div>
                    <div class="form-group mb-3">
                        <label for="nik" class="form-label">NIK</label>
                        <input type="number" name="nik" class="form-control @error('nik')
                            is-invalid
                        @enderror" value="{{ old('nik') }}" placeholder="Masukkan NIK">
                        <small class="text-danger">
                            @error('nik')
                                {{ $message }}
                            @enderror
                        </small>
                    </div>
                    <div class="form-group mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="number" name="phone" class="form-control @error('phone')
                            is-invalid
                        @enderror" value="{{ old('phone') }}" placeholder="Masukkan Phone">
                        <small class="text-danger">
                            @error('phone')
                                {{ $message }}
                            @enderror
                        </small>
                    </div>
                    <div class="form-group mb-3">
                        <label for="pekerjaa" class="form-label">Pekerjaan</label>
                        <input type="text" name="pekerjaan" class="form-control @error('pekerjaan')
                            is-invalid
                        @enderror" value="{{ old('pekerjaan') }}" placeholder="Masukkan Pekerjaan">
                        <small class="text-danger">
                            @error('pekerjaan')
                                {{ $message }}
                            @enderror
                        </small>
                    </div>
                    <div class="form-group mb-3">
                        <label for="tgl_lhr" class="form-label">Tgl Lahir</label>
                        <input type="date" name="tgl_lhr" class="form-control @error('tgl_lhr')
                            is-invalid
                        @enderror" value="{{ old('tgl_lhr') }}" placeholder="Masukkan Tanggal Lahir">
                    </div>
                    <div class="form-group mb-3">
                        <label for="jenkel" class="form-label">Jenis Kelamin</label>
                        <select name="jenkel" id="jenkel" class="form-control">
                            <option selected disabled>--- Pilih jenis Kelamin ---</option>
                            <option value="Laki - Laki">Laki - Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        <small class="text-danger">
                            @error('tgl_lhr')
                                {{ $message }}
                            @enderror
                        </small>
                    </div>
                    <div class="form-group mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select name="status" id="status" class="form-control @error('status')
                            is-invalid
                        @enderror">
                            <option selected disabled>--- Pilih Status ---</option>
                            <option value="Belum Menikah">Belum Menikah</option>
                            <option value="Sudah Menikah">Sudah Menikah</option>
                        </select>
                        <small class="text-danger">
                            @error('status')
                                {{ $message }}
                            @enderror
                        </small>
                    </div>
                    <div class="form-group mb-4">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" name="image" id="image" class="form-control @error('image')
                            is-invalid
                        @enderror" accept="image/*">
                        <small class="text-danger">
                            @error('image')
                                {{ $message }}
                            @enderror
                        </small>
                    </div>
                    <hr />
                    <h6 class="fw-bold mt-2 mb-4 text-black">Akun Dashboard</h6>
                    <div class="form-group mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control @error('email')
                            is-invalid
                        @enderror" value="{{ old('email') }}" placeholder="Masukkan Alamat Email">
                        <small class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </small>
                    </div>
                    <div class="form-label mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control @error('password')
                            is-invalid
                        @enderror" value="{{ old('password') }}" placeholder="Masukkan Password">
                        <small class="text-danger">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </small>
                    </div>
                    <div class="d-flex gap-2">
                        <a href="{{ route('kepalaRumah/kepalarumah') }}" class="btn btn-warning"><i class="fas fa-arrow-left"></i> Kembali</a>
                        <button class="btn btn-success"><i class="fas fa-paper-plane"></i> Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
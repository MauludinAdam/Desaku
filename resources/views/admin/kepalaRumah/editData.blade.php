@extends('layout.template')

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <div class="card-title"><b>{{ $subtitle }}</b></div>
        </div><hr>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card-body">
            <form action="{{ route('kepalaRumah/update', $keparum->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="row">
                    <div class="col-lg-4">
                        <img src="{{ asset('storage/'. $keparum->image) }}" width="300" height="300" id="gambar" class="rounded" alt="">
                        <div class="mt-4">
                            <label for="image" class="form-label">Ganti Gambar</label>
                            <input type="file" name="image" id="uploadGambar" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="form-group mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $keparum->name }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="nik" class="form-label">NIK</label>
                            <input type="number" name="nik" class="form-control" value="{{ $keparum->nik }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="number" name="phone" class="form-control" value="{{ $keparum->phone }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="pekerjaan" class="form-label">Pekerjaan</label>
                            <input type="text" name="pekerjaan" class="form-control" value="{{ $keparum->pekerjaan }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="tgl_lhr" class="form-label">Tgl Lahir</label>
                            <input type="date" name="tgl_lhr" class="form-control" value="{{ $keparum->tgl_lhr }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="jenkel" class="form-label">Jenis kelamin</label>
                            <select name="jenkel" id="jenkel" class="form-control">
                                @foreach (['Laki-Laki','Perempuan'] as $jenkel )
                                    <option value="{{ $jenkel }}" @if ($keparum->jenkel == $jenkel)
                                        selected @endif>{{ $jenkel }}</option>
                                @endforeach
                            </select>
                        </div>
                         <div class="form-group mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" id="status" class="form-control">
                                @foreach (['Belum Menikah','Sudah Menikah','Duda','Janda'] as $status)
                                    <option value="{{ $status }}" @if ($keparum->status == $status)
                                        selected @endif>{{ $status }}</option>
                                @endforeach
                            </select>
                         </div>
                         <div class="mt-3">
                            <a href="{{ route('kepalaRumah/kepalarumah') }}" class="btn btn-warning"><i class="fas fa-arrow-left"></i> kembali</a>
                            <button type="submit" class="btn btn-success mx-2"><i class="fas fa-paper-plane"></i> Update</button>
                         </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    function bacaGambar(input) {
        if(input.files && input.files [0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#gambar').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $('#uploadGambar').change(function() {
        bacaGambar(this);
    })
</script>

@endsection

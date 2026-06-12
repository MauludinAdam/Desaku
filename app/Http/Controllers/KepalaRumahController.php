<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\KepalaRumah;

class KepalaRumahController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Kepala Rumah',
            'subtitle' => 'Kepala Rumah',
             'keparum'   => KepalaRumah::all(),
              'menu'      => 'kepalarumah',
        ];

        return view('admin.kepalaRumah.kepalarumah', $data);
    }

    public function AddData()
    {
        $data = [
            'title'     => 'Tambah Data Kepala Rumah',
            'subtitle'  => 'Add New Data',
            'keparum'   => KepalaRumah::all(),
             'menu'      => 'kepalarumah',
        ];

        return view('admin.kepalaRumah.addData', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required',
            'nik'       => 'required',
            'phone'       => 'required',
            'pekerjaan'       => 'required',
            'tgl_lhr'       => 'required',
            'jenkel'       => 'required',
            'status'       => 'required',
            'image'       => 'required',
            'email'       => 'required|email',
            'password'       => 'required',
        ],[
            'name.required'     => 'Nama tidak boleh kosong',
            'email.required'     => 'Email tidak boleh kosong',
            'password.required'     => 'Password tidak boleh kosong',
            'nik.required'     => 'NIK tidak boleh kosong',
            'phone.required'     => 'Phone tidak boleh kosong',
            'pekerjaan.required'     => 'Pekerjaan tidak boleh kosong',
            'tgl_lhr.required'     => 'Tgl Lahir tidak boleh kosong',
            'jenkel.required'     => 'Jenis Kelamin tidak boleh kosong',
            'status.required'     => 'Status tidak boleh kosong',
            'image.required'     => 'Gambar tidak boleh kosong',
        ]);

        KepalaRumah::create([
            'name'      => $request->name,
            'nik'      => $request->nik,
            'phone'      => $request->phone,
            'jml_anggota'      => 0,
            'pekerjaan'      => $request->pekerjaan,
            'tgl_lhr'      => $request->tgl_lhr,
            'jenkel'      => $request->jenkel,
            'status'      => $request->status,
            'image'      => $request->file('image')->store('image','public'),
            'email'     => $request->email, 
            'password'     => Hash::make($request->password),
        ]);

        return redirect()->route('kepalaRumah/kepalarumah')->with('success','Data kepala rumah berhasil di simpan!');
    }

    public function show($id)
    {
        $data = [
            'title'     => 'Detail Profile Kepala Rumah',
            'subtitle'     => 'Manage Kepala Rumah',
            'menu'      => 'kepalarumah',
            'keparum'   => KepalaRumah::findorFail($id),
        ];

        return view('admin.kepalaRumah.showData', $data);
    }

    public function editData($id)
    {
        $data = [
            'title'     => 'Edit Kepala Rumah',
            'subtitle'  => 'Edit Kepala Rumah',
            'menu'      => 'kepalarumah',
            'keparum'   => KepalaRumah::findOrFail($id)
        ];

        return view('admin.kepalaRumah.editData', $data);
    }

    public function update(Request $request, $id) 
    {
        $request->validate([
            'name'      => 'required',
            'nik'      => 'required',
            'phone'      => 'required',
            'pekerjaan'      => 'required',
            'tgl_lhr'      => 'required',
            'jenkel'      => 'required',
            'status'      => 'required',
            'image'      => 'nullable',
        ],[
            'name.required'     => 'Nama tidak boleh kosong',
            'email.required'     => 'Email tidak boleh kosong',
            'password.required'     => 'Password tidak boleh kosong',
            'nik.required'     => 'NIK tidak boleh kosong',
            'phone.required'     => 'Phone tidak boleh kosong',
            'pekerjaan.required'     => 'Pekerjaan tidak boleh kosong',
            'tgl_lhr.required'     => 'Tgl Lahir tidak boleh kosong',
            'jenkel.required'     => 'Jenis Kelamin tidak boleh kosong',
            'status.required'     => 'Status tidak boleh kosong',
        ]);

        $keparum = KepalaRumah::findorFail($id);
        
        $keparum->name  = $request->name;
        $keparum->nik  = $request->nik;
        $keparum->phone  = $request->phone;
        $keparum->pekerjaan  = $request->pekerjaan;
        $keparum->tgl_lhr  = $request->tgl_lhr;
        $keparum->jenkel  = $request->jenkel;
        $keparum->status  = $request->status;

        if($request->file('image')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }

            $keparum['image'] = $request->file('image')->store('image','public');
        }

        $keparum->save();

        return redirect()->route('kepalaRumah/kepalarumah')->with('success','Data kepala rumah berhasil di update !');
    }

    public function destroy($id) 
    {
        $keparum = KepalaRumah::findOrfail($id);

        $keparum->delete();

        return redirect()->route('kepalaRumah/kepalarumah')->with('success','Data kepala rumah berhasil dihapus !');
    }
}

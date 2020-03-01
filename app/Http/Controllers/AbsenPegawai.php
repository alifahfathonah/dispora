<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use App\Absen;
use Carbon\carbon;
use Auth;

class AbsenPegawai extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->check()) {
            if (auth::user()->role == "Pegawai") {
                $cek = Pegawai::where('id_user',auth::user()->id)->first();
                $cekabsen = Absen::where('id_pegawai',$cek->id)->first();
                $absen = Absen::where('id_pegawai',$cek->id)->get();
                $date = Carbon::now()->format('d-m-Y');
                $jam = Carbon::now()->format('h:i:s');
                $dates = '04:30:0';
                return view('pegawai.absen.index', compact('absen','cekabsen','date','dates','jam'));
            } else {
                return redirect('home');
            }
        } else {
            return redirect('home');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (auth()->check()) {
            if (auth::user()->role == "Pegawai") {
                return view('pegawai.absen.create');
            } else {
                return redirect('home');
            }
        } else {
            return redirect('home');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (auth()->check()) {
            if (auth::user()->role == "Pegawai") {
                $cek = Pegawai::where('id_user',auth::user()->id)->first();
                $absen = New Absen;
                $absen->id_pegawai = $cek->id;
                $absen->nip = $cek->nip;
                $absen->nama = $cek->nama;
                $absen->tgl = carbon::now()->format('d-m-Y');
                $absen->jam_masuk = carbon::now()->format('h:i:s');
                $absen->status = $request->status;
                $absen->keterangan = $request->keterangan;
                $absen->save();

                return redirect('absensi');
            }
        }
    }

    public function keluar(Request $request)
    {
        $keluar = Absen::find($request->id);
        $keluar->update([
            'jam_keluar' => Carbon::now()->format('h:i:s'),
        ]);

        return $keluar;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

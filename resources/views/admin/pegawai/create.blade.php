@extends('layouts.admin')
@section('title','Tambah Data Pegawai')
@section('content')
<div class="col-12">
    <div class="card card-outline-info">
        <div class="card-header">
            <h4 class="m-b-0 text-white">Informasi Data Pegawai</h4>
        </div>
        <div class="card-body">
            <form action="{{route('pegawai.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-body">
                    <div class="row p-t-20">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Nama Pegawai</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Nama">
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group has-danger">
                                <label class="control-label">Email</label>
                                <input type="email" name="email" id="email" class="form-control form-control-danger" placeholder="E-mail">
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <!--/row-->

                    <div class="row p-t-20">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Nomor Induk Pegawai (NIP)</label>
                                <input type="text" name="nip" id="nip" class="form-control" placeholder="0398272827">
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group has-danger">
                                <label class="control-label">Tipe PNS</label>
                                <input type="text" name="tipepns" id="tipepns" class="form-control form-control-danger" placeholder="Honorer">
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <!--/row-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group has-success">
                                <label class="control-label">Status</label>
                                <input type="text" value="Aktif" class="form-control form-control-danger">
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Tanggal Lahir</label>
                                <input type="date" name="ttl" class="form-control" placeholder="dd/mm/yyyy">
                            </div>
                        </div>
                        <!--/span-->
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <textarea name="tempatlahir" class="form-control" rows="4"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Alamat Saat Ini</label>
                                <textarea name="alamat" class="form-control" rows="4"></textarea>
                            </div>
                        </div>
                    </div>

                    <!--/row-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nomor NPWP</label>
                                <input type="text" name="nonpwp" class="form-control">
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nomor Induk Keluarga</label>
                                <input type="number" name="nik" class="form-control">
                            </div>
                        </div>
                        <!--/span-->
                    </div>

                    <!--/row-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Jenis Kelamin</label>
                                <select class="form-control custom-select" name="kelamin" data-placeholder="Choose a Category" tabindex="1">
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Agama</label>
                                <select class="form-control custom-select" name="agama" data-placeholder="Choose a Category" tabindex="1">
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Hindu">Hindu</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!--/row-->

                    <!--/row-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control custom-select" name="statusnikah" data-placeholder="Choose a Category" tabindex="1">
                                    <option value="Menikah">Menikah</option>
                                    <option value="Lajang">Lajang</option>
                                </select>
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Kedudukan</label>
                               <input type="text" name="kedudukanpns" class="form-control">
                            </div>
                        </div>
                        <!--/span-->
                    </div>

                    <!--/row-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Gol. Darah</label>
                                <input type="text" name="goldarah" class="form-control">
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Foto Pegawai</label>
                                <input type="file" name="foto" class="form-control">
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                    <button type="button" class="btn btn-inverse">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('scripts')
    
@endsection
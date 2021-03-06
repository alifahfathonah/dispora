@extends('layouts.admin')
@section('title','Edit Data Pangkat')
@section('content')
   <div class="col-12">
       <div class="card">
        <div class="card-header">
            <h4 class="m-b-0 text-black">Edit Data Pangkat Pegawai</h4>
        </div>
           <div class="card-body">
                <form action="{{route('pangkat.update', $edit->id)}}" method="post">
                @csrf
                @method('PUT')
                    <div class="form-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">NIP</label>
                                    <input type="text" value="{{$edit->nip}}" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">Nama</label>
                                    <input type="text" value="{{$edit->nama}}" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">Golongan</label>
                                    <select name="golongan" class="form-control" required>
                                        <option value="">Select</option>
                                        <option value="A"@if($edit->golongan=='A') selected='selected' @endif >Golongan A</option>
                                        <option value="B"@if($edit->golongan=='B') selected='selected' @endif >Golongan B</option>
                                        <option value="C"@if($edit->golongan=='C') selected='selected' @endif >Golongan C</option>
                                        <option value="D"@if($edit->golongan=='D') selected='selected' @endif >Golongan D</option>
                                        <option value="E"@if($edit->golongan=='E') selected='selected' @endif >Golongan E</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">Kelas</label>
                                    <select name="kelas" class="form-control" required>
                                        <option value="">Select</option>
                                        <option value="I"@if($edit->kelas=='I') selected='selected' @endif >Juru</option>
                                        <option value="II"@if($edit->kelas=='II') selected='selected' @endif >Pengatur</option>
                                        <option value="II"@if($edit->kelas=='III') selected='selected' @endif >Penata</option>
                                        <option value="IV"@if($edit->kelas=='IV') selected='selected' @endif >Pembina</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">Kedudukan</label>
                                    <input type="text" name="kedudukan" value="{{$edit->kedudukan}}" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-check"> Submit</i></button>
                        <a href="{{url('pangkat')}}" class="btn btn-warning btn-sm"> <i class="fa fa-close"> Cancel</i> </a>
                    </div>
                </form>
           </div>
       </div>
   </div>
@endsection
@section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            var nip = $("#nip").val();
                $.get('{{ Url("select-nama-pangkat") }}',{'_token': $('meta[name=csrf-token]').attr('content'),nip:nip}, function(resp){  
                    $("#select-nama-pangkat").html(resp);
                });
        }); 

        $(document).on('change', '#nip', function (e) { 
            var nip = $(this).val();
            $.get('{{ Url("select-nama-pangkat") }}',{'_token': $('meta[name=csrf-token]').attr('content'),nip:nip}, function(resp){  
                $("#select-nama-pangkat").html(resp);
            });
        });
    </script>
@endsection

@include('layouts.tu.header')

<div class="breadcome-area">
    <div class="container-fluid" style="margin-top:20px;">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="breadcomb-wp">
                                <div class="breadcomb-icon">
                                    <i class="icon nalika-home"></i>
                                </div>
                                <div class="breadcomb-ctn">
                                    <h2>KELOLA NILAI</h2>
                                    <p>SELAMAT DATANG DI SISTEM INFORMASI AKADEMIK</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <div class="section-admin container-fluid">
            <div class="row admin text-center">
                <div class="col-md-12">
                    <div class="row">
                        <div class="container-fluid" style="color:white;">
                            <h1>TAMBAH DATA NILAI</h1>
                            <form class="text-left" action="{{ url('tu/aksi_tambah_nilai') }}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Matkul</label>
                                    <div class="col-sm-10">
                                      <select class="form-control" name="matkul_id" id="inputPassword3" placeholder="Password" style="border-color:white;" required>
                                        <option value="" selected disabled>PILIH MATKUL...</option>
                                        @foreach($matkul as $mk)
                                          <option value="{{ $mk->id }}">{{ $mk->id . "-" . $mk->nama_matkul }}</option>
                                        @endforeach
                                      </select>
                                    </div>
                                  </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nilai</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="nilai" class="form-control" id="inputNama" placeholder="Masukan Nilai...." style="border-color:white;" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                  <label for="inputPassword3" class="col-sm-2 col-form-label">Mahasiswa</label>
                                  <div class="col-sm-10">
                                    <select class="form-control" name="mahasiswa_id" id="inputPassword3" placeholder="Password" style="border-color:white;" required>
                                      <option value="" selected disabled>PILIH MAHASISWA...</option>
                                      @foreach($mahasiswa as $m)
                                        <option value="{{ $m->id }}">{{ $m->nim . "-" . $m->nama }}</option>
                                      @endforeach
                                    </select>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                  </div>
                                </div>
                              </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="margin-top:300px">

        </div>
@include('layouts.tu.footer')

<script>
    $(document).ready( function () {
     $('#table').DataTable();
    } );
</script>
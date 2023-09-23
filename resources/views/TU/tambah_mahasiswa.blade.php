
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
                                    <h2>KELOLA MAHASISWA</h2>
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
                            <h1>TAMBAH DATA MAHASISWA</h1>
                            <form class="text-left" method="post" action="{{ url('tu/aksi_tambah_mahasiswa') }}">
                                @csrf
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">NIM</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="nim" class="form-control" id="inputNama" placeholder="Masukan NIM" style="border-color:white;">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="nama" class="form-control" id="inputNama" placeholder="Masukan Nama.." style="border-color:white;">
                                    </div>
                                </div>
                                <div class="form-group row">
                                  <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                  <div class="col-sm-10">
                                    <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email" style="border-color:white;">
                                  </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">No Hp</label>
                                    <div class="col-sm-10">
                                      <input type="number" name="no_hp" class="form-control" id="inputEmail3" placeholder="No Hp" style="border-color:white;">
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

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
                                    <h2>KELOLA DOSEN</h2>
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
                            <h1>DATA DOSEN</h1>
                            <a href="{{ url('tu/tambah_dosen') }}" class="btn btn-success" style="float:left; margin-bottom:10px;">Tambah Data</a>
                            <table class="table" id="table" style="color: white;">
                                <thead>
                                    <tr>
                                        <th>NID</th>
                                        <th>Nama</th>
                                        <th>No Hp</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($dosen as $d)
                                        <tr>
                                            <td>{{ $d->nid }}</td>
                                            <td>{{ $d->nama }}</td>
                                            <td>{{ $d->no_hp }}</td>
                                            <td>{{ $d->email }}</td>
                                            <td>
                                                <a href="{{ url('tu/hapus_dosen/'. $d->id)  }}" class="btn btn-danger">Hapus</a>
                                                <a href="{{ url('tu/update_dosen/'. $d->id)  }}" class="btn btn-warning">Update</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
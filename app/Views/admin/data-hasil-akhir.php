<?= $this->extend('layouts/page-layout') ?>

<?= $this->section('content')?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Hasil Akhir</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Urutan</th>
                                        <th>Rekomendasi</th>
                                        <th>Tanggal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Joko - AX09983</td>
                                        <td>
                                            <ol>
                                                <ul>Padi</ul>
                                                <ul>Jagung</ul>
                                                <ul>Kacang Kedelai</ul>
                                                <ul>Cabai</ul>
                                            </ol>
                                        </td>
                                        <td>Padi</td>
                                        <td>27 Juni 2022</td>
                                        <td>
                                            <a class="btn btn-iconsolid btn-sm" href="cart.html"><i class="icon-pencil">Detail Perhitungan</i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>
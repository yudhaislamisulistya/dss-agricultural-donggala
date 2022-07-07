<?= $this->extend('layouts/page-layout') ?>

<?= $this->section('content')?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Cuaca (K001)</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Nama Sub Kriteria</th>
                                        <th>Bobot</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>C001</td>
                                        <td>Panas</td>
                                        <td>5</td>
                                        <td>
                                            <a class="btn btn-iconsolid btn-sm" href="cart.html"><i class="icon-pencil"></i></a>
                                            <a class="btn btn-iconsolid btn-danger btn-sm" href="cart.html"><i class="icon-trash"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Jumlah Hasil Panen (K002)</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Nama Sub Kriteria</th>
                                        <th>Bobot</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>C001</td>
                                        <td>Banyak</td>
                                        <td>5</td>
                                        <td>
                                            <a class="btn btn-iconsolid btn-sm" href="cart.html"><i class="icon-pencil"></i></a>
                                            <a class="btn btn-iconsolid btn-danger btn-sm" href="cart.html"><i class="icon-trash"></i></a>
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
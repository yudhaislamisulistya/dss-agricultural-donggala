<?= $this->extend('layouts/page-layout') ?>

<?= $this->section('content')?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Profil</h4>
                </div>
                <div class="card-body">
                    <form action="POST" class="mb-5">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nama_lengkap">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nohp">Nomor Handphone</label>
                            <input type="text" name="nohp" id="nohp" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" id="alamat" class="form-control">
                        </div>
                        <button class="btn btn-primary">Ubah Profil</button>
                    </form>
                    <form action="POST">
                        <div class="form-group">
                            <label for="email">Password Lama</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nama_lengkap">Password Baru</label>
                            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nohp">Konfrimasi Password Baru</label>
                            <input type="text" name="nohp" id="nohp" class="form-control">
                        </div>
                        <button class="btn btn-primary">Ubah Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
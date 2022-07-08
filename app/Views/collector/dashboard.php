<?= $this->extend('layouts/page-layout') ?>

<?= $this->section('content') ?>
<div class="container-fluid dashboard-default-sec">
    <div class="row">
        <div class="col-xl-12 box-col-12 des-xl-100">
            <div class="row">
                <div class="col-xl-12 col-md-6 box-col-6 des-xl-50">
                    <div class="card profile-greeting">
                        <div class="card-header">
                            <div class="header-top">
                                <div class="setting-list bg-primary position-unset">
                                    <ul class="list-unstyled setting-option">
                                        <li>
                                            <div class="setting-white"><i class="icon-settings"></i>
                                            </div>
                                        </li>
                                        <li><i class="view-html fa fa-code font-white"></i></li>
                                        <li><i class="icofont icofont-maximize full-card font-white"></i>
                                        </li>
                                        <li><i class="icofont icofont-minus minimize-card font-white"></i>
                                        </li>
                                        <li><i class="icofont icofont-refresh reload-card font-white"></i>
                                        </li>
                                        <li><i class="icofont icofont-error close-card font-white"> </i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body text-center p-t-0">
                            <h3 class="font-light">Selamat Datang, Akun Admin!!</h3>
                            <p>Welcome to the viho Family! we are glad that you are visite this
                                dashboard. we will be happy to help you grow your business.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-3 col-sm-6 box-col-3 des-xl-25 rate-sec">
                    <div class="card income-card card-primary">
                        <div class="card-body text-center">
                            <div class="round-box">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 448.057 448.057"
                                    style="enable-background:new 0 0 448.057 448.057;" space="preserve">
                                    <g>
                                        <g>
                                            <path
                                                d="M404.562,7.468c-0.021-0.017-0.041-0.034-0.062-0.051c-13.577-11.314-33.755-9.479-45.069,4.099                                            c-0.017,0.02-0.034,0.041-0.051,0.062l-135.36,162.56L88.66,11.577C77.35-2.031,57.149-3.894,43.54,7.417                                            c-13.608,11.311-15.471,31.512-4.16,45.12l129.6,155.52h-40.96c-17.673,0-32,14.327-32,32s14.327,32,32,32h64v144                                            c0,17.673,14.327,32,32,32c17.673,0,32-14.327,32-32v-180.48l152.64-183.04C419.974,38.96,418.139,18.782,404.562,7.468z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path
                                                d="M320.02,208.057h-16c-17.673,0-32,14.327-32,32s14.327,32,32,32h16c17.673,0,32-14.327,32-32                                            S337.694,208.057,320.02,208.057z" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <h5><?= count(get_kriteria()) ?></h5>
                            <p>Data Kriteria</p><a class="btn-arrow arrow-primary" href="javascript:void(0)"></a>
                            <div class="parrten">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 448.057 448.057"
                                    style="enable-background:new 0 0 448.057 448.057;" space="preserve">
                                    <g>
                                        <g>
                                            <path
                                                d="M404.562,7.468c-0.021-0.017-0.041-0.034-0.062-0.051c-13.577-11.314-33.755-9.479-45.069,4.099                                            c-0.017,0.02-0.034,0.041-0.051,0.062l-135.36,162.56L88.66,11.577C77.35-2.031,57.149-3.894,43.54,7.417                                            c-13.608,11.311-15.471,31.512-4.16,45.12l129.6,155.52h-40.96c-17.673,0-32,14.327-32,32s14.327,32,32,32h64v144                                            c0,17.673,14.327,32,32,32c17.673,0,32-14.327,32-32v-180.48l152.64-183.04C419.974,38.96,418.139,18.782,404.562,7.468z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path
                                                d="M320.02,208.057h-16c-17.673,0-32,14.327-32,32s14.327,32,32,32h16c17.673,0,32-14.327,32-32                                            S337.694,208.057,320.02,208.057z">
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-3 col-sm-6 box-col-3 des-xl-25 rate-sec">
                    <div class="card income-card card-secondary">
                        <div class="card-body text-center">
                            <div class="round-box">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                                    style="enable-background:new 0 0 512 512;" space="preserve">
                                    <g>
                                        <g>
                                            <path
                                                d="M256,0C114.615,0,0,114.615,0,256s114.615,256,256,256s256-114.615,256-256S397.385,0,256,0z M96,100.16                                            c50.315,35.939,80.124,94.008,80,155.84c0.151,61.839-29.664,119.919-80,155.84C11.45,325.148,11.45,186.851,96,100.16z M256,480                                            c-49.143,0.007-96.907-16.252-135.84-46.24C175.636,391.51,208.14,325.732,208,256c0.077-69.709-32.489-135.434-88-177.6                                            c80.1-61.905,191.9-61.905,272,0c-98.174,75.276-116.737,215.885-41.461,314.059c11.944,15.577,25.884,29.517,41.461,41.461                                            C353.003,463.884,305.179,480.088,256,480z M416,412v-0.16c-86.068-61.18-106.244-180.548-45.064-266.616                                            c12.395-17.437,27.627-32.669,45.064-45.064C500.654,186.871,500.654,325.289,416,412z" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <h5><?= count(get_sub_kriteria()) ?></h5>
                            <p>Data Sub Kriteria</p><a class="btn-arrow arrow-secondary" href="javascript:void(0)"></a>
                            <div class="parrten">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                                    style="enable-background:new 0 0 512 512;" space="preserve">
                                    <g>
                                        <g>
                                            <path
                                                d="M256,0C114.615,0,0,114.615,0,256s114.615,256,256,256s256-114.615,256-256S397.385,0,256,0z M96,100.16                                            c50.315,35.939,80.124,94.008,80,155.84c0.151,61.839-29.664,119.919-80,155.84C11.45,325.148,11.45,186.851,96,100.16z M256,480                                            c-49.143,0.007-96.907-16.252-135.84-46.24C175.636,391.51,208.14,325.732,208,256c0.077-69.709-32.489-135.434-88-177.6                                            c80.1-61.905,191.9-61.905,272,0c-98.174,75.276-116.737,215.885-41.461,314.059c11.944,15.577,25.884,29.517,41.461,41.461                                            C353.003,463.884,305.179,480.088,256,480z M416,412v-0.16c-86.068-61.18-106.244-180.548-45.064-266.616                                            c12.395-17.437,27.627-32.669,45.064-45.064C500.654,186.871,500.654,325.289,416,412z" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-3 col-sm-6 box-col-3 des-xl-25 rate-sec">
                    <div class="card income-card card-primary">
                        <div class="card-body text-center">
                            <div class="round-box">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 448.057 448.057"
                                    style="enable-background:new 0 0 448.057 448.057;" space="preserve">
                                    <g>
                                        <g>
                                            <path
                                                d="M404.562,7.468c-0.021-0.017-0.041-0.034-0.062-0.051c-13.577-11.314-33.755-9.479-45.069,4.099                                            c-0.017,0.02-0.034,0.041-0.051,0.062l-135.36,162.56L88.66,11.577C77.35-2.031,57.149-3.894,43.54,7.417                                            c-13.608,11.311-15.471,31.512-4.16,45.12l129.6,155.52h-40.96c-17.673,0-32,14.327-32,32s14.327,32,32,32h64v144                                            c0,17.673,14.327,32,32,32c17.673,0,32-14.327,32-32v-180.48l152.64-183.04C419.974,38.96,418.139,18.782,404.562,7.468z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path
                                                d="M320.02,208.057h-16c-17.673,0-32,14.327-32,32s14.327,32,32,32h16c17.673,0,32-14.327,32-32                                            S337.694,208.057,320.02,208.057z" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <h5><?= count(get_alternatif()) ?></h5>
                            <p>Data Alternatif</p><a class="btn-arrow arrow-primary" href="javascript:void(0)"></a>
                            <div class="parrten">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 448.057 448.057"
                                    style="enable-background:new 0 0 448.057 448.057;" space="preserve">
                                    <g>
                                        <g>
                                            <path
                                                d="M404.562,7.468c-0.021-0.017-0.041-0.034-0.062-0.051c-13.577-11.314-33.755-9.479-45.069,4.099                                            c-0.017,0.02-0.034,0.041-0.051,0.062l-135.36,162.56L88.66,11.577C77.35-2.031,57.149-3.894,43.54,7.417                                            c-13.608,11.311-15.471,31.512-4.16,45.12l129.6,155.52h-40.96c-17.673,0-32,14.327-32,32s14.327,32,32,32h64v144                                            c0,17.673,14.327,32,32,32c17.673,0,32-14.327,32-32v-180.48l152.64-183.04C419.974,38.96,418.139,18.782,404.562,7.468z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path
                                                d="M320.02,208.057h-16c-17.673,0-32,14.327-32,32s14.327,32,32,32h16c17.673,0,32-14.327,32-32                                            S337.694,208.057,320.02,208.057z">
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-3 col-sm-6 box-col-3 des-xl-25 rate-sec">
                    <div class="card income-card card-secondary">
                        <div class="card-body text-center">
                            <div class="round-box">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                                    style="enable-background:new 0 0 512 512;" space="preserve">
                                    <g>
                                        <g>
                                            <path
                                                d="M256,0C114.615,0,0,114.615,0,256s114.615,256,256,256s256-114.615,256-256S397.385,0,256,0z M96,100.16                                            c50.315,35.939,80.124,94.008,80,155.84c0.151,61.839-29.664,119.919-80,155.84C11.45,325.148,11.45,186.851,96,100.16z M256,480                                            c-49.143,0.007-96.907-16.252-135.84-46.24C175.636,391.51,208.14,325.732,208,256c0.077-69.709-32.489-135.434-88-177.6                                            c80.1-61.905,191.9-61.905,272,0c-98.174,75.276-116.737,215.885-41.461,314.059c11.944,15.577,25.884,29.517,41.461,41.461                                            C353.003,463.884,305.179,480.088,256,480z M416,412v-0.16c-86.068-61.18-106.244-180.548-45.064-266.616                                            c12.395-17.437,27.627-32.669,45.064-45.064C500.654,186.871,500.654,325.289,416,412z" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <h5><?= count(get_seleksi()) ?></h5>
                            <p>Data Hasil Perhitungan</p><a class="btn-arrow arrow-secondary"
                                href="javascript:void(0)"></a>
                            <div class="parrten">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                                    style="enable-background:new 0 0 512 512;" space="preserve">
                                    <g>
                                        <g>
                                            <path
                                                d="M256,0C114.615,0,0,114.615,0,256s114.615,256,256,256s256-114.615,256-256S397.385,0,256,0z M96,100.16                                            c50.315,35.939,80.124,94.008,80,155.84c0.151,61.839-29.664,119.919-80,155.84C11.45,325.148,11.45,186.851,96,100.16z M256,480                                            c-49.143,0.007-96.907-16.252-135.84-46.24C175.636,391.51,208.14,325.732,208,256c0.077-69.709-32.489-135.434-88-177.6                                            c80.1-61.905,191.9-61.905,272,0c-98.174,75.276-116.737,215.885-41.461,314.059c11.944,15.577,25.884,29.517,41.461,41.461                                            C353.003,463.884,305.179,480.088,256,480z M416,412v-0.16c-86.068-61.18-106.244-180.548-45.064-266.616                                            c12.395-17.437,27.627-32.669,45.064-45.064C500.654,186.871,500.654,325.289,416,412z" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12 box-col-12 des-xl-100">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <h5>Perhitungan Terbaru</h5>
                        <table class="table table-bordernone">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Pengepul</th>
                                    <th>Urutan</th>
                                    <th>Rekomendasi</th>
                                    <th>Tanggal</th>
                                    <th>Aksi</th>
                                    <th>
                                        <div class="setting-list">
                                            <ul class="list-unstyled setting-option">
                                                <li>
                                                    <div class="setting-primary"><i class="icon-settings"> </i></div>
                                                </li>
                                                <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                                                <li><i class="icofont icofont-minus minimize-card font-primary"></i>
                                                </li>
                                                <li><i class="icofont icofont-refresh reload-card font-primary"></i>
                                                </li>
                                                <li><i class="icofont icofont-error close-card font-primary"></i></li>
                                            </ul>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach (get_seleksi_by_id_user_dan_limit_5(session()->get('id_user')) as $key => $value) { ?>
                                <tr>
                                    <td>1</td>
                                    <td><?= get_user_by_id_user($value->id_user)['nama_lengkap'] ?></td>
                                    <td>
                                        <ol>
                                            <?php foreach (get_rating_by_kode_seleksi_all($value->kode_seleksi) as $key2 => $value2) { ?>
                                            <li><?= get_alternatif_by_kode_alternatif($value2->kode_alternatif)['nama_alternatif'] ?>
                                                - (<?= $value2->hasil ?>) - (Ranking ke <?= $value2->ranking ?>)</li>
                                            <?php } ?>
                                        </ol>
                                    </td>
                                    <td>
                                        <b>
                                            <?= get_alternatif_by_kode_alternatif(get_rekomendasi_by_kode_seleksi($value->kode_seleksi)['kode_alternatif'])['nama_alternatif']?>
                                        </b>
                                    </td>
                                    <td>
                                        <?= $value->created_at ?>
                                    </td>
                                    <td>
                                        <a class="btn btn-iconsolid btn-sm"
                                            href="<?= route_to('perhitungan_topsis_admin_detail', $value->kode_seleksi) ?>"><i
                                                class="icon-pencil">Detail Perhitungan</i></a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->
<?= $this->endSection() ?>
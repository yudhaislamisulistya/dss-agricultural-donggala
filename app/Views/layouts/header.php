<?php if(session()->get('role') == 2){ ?>
    <header class="main-nav">
    <div class="sidebar-user text-center"><a class="setting-primary" href="javascript:void(0)"><i
                data-feather="settings"></i></a><img class="img-90 rounded-circle"
            src="<?= base_url() ?>/assets/images/1.png" alt>
        <div class="badge-bottom"><span class="badge badge-primary">New</span></div><a href="user-profile.html">
            <h6 class="mt-3 f-14 f-w-600"><?= session()->get('nama_lengkap') ?></h6>
        </a>
        <p class="mb-0 font-roboto">Admin</p>

    </div>
    <?= $this->include('layouts/menu') ?>
</header>
<?php }else if(session()->get('role') == 1){ ?>
<header class="main-nav">
    <div class="sidebar-user text-center"><a class="setting-primary" href="javascript:void(0)"><i
                data-feather="settings"></i></a><img class="img-90 rounded-circle"
            src="<?= base_url() ?>/assets/images/1.png" alt>
        <div class="badge-bottom"><span class="badge badge-primary">New</span></div><a href="user-profile.html">
            <h6 class="mt-3 f-14 f-w-600"><?= session()->get('nama_lengkap') ?></h6>
        </a>
        <p class="mb-0 font-roboto">Pengepul</p>

    </div>
    <?= $this->include('layouts/menu') ?>
</header>
<?php } ?>
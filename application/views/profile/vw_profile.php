<div class="content-page">

    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Dashboard</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <!-- <div class="card mb-3" style="max-width: 540px;"> -->
            <div class="no-gutters">
                <div class="col-md-4 ">
                    <img src="<?= base_url('assets/templet/images/profile/') . $user['gambar']; ?>" class="card-img">

                </div>
                <div class="col-md-5">
                    <div class="card-body">
                        <h2 class="card-title"><?= $user['nama']; ?></h2>
                        <h4 class="card-text"><?= $user['email']; ?></h4>
                        <h4 class="card-text"><small class="text-muted">Anggota sejak <?= date('d F Y', $user['date_created']); ?></small></h4>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
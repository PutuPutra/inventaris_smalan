<?= $this->extend('/layout/templateAdmin'); ?>
<?= $this->section('content'); ?>
<section class="section">
    <div class="card">
        <div class="card-header">
            <h4>Data Penghapus</h4>
        </div>
        <!-- modal start -->
        <div class="col-md-6 col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="buttons">
                            <a href="<?= base_url('tambahPenghapus') ?>" class="btn btn-success">Tambah
                                Data</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal end -->
        <div class="card-body">
            <table class="table table-hover table-responsive" id="table1">
                <thead>
                    <tr>
                        <th style="text-align: center;">Merk</th>
                        <th style="text-align: center; ">Gambar</th>
                        <th style="text-align: center;">Kondisi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    foreach ($files_penghapus as $f) : ?>
                    <tr style="text-align: center;">
                        <td><?= $f->merk_penghapus; ?></td>
                        <td><img class="pictures" src="/assets/penghapus/<?= $f->gambar_penghapus; ?>" alt=""
                                width="100px"></img></td>
                        <td><?= $f->kondisi_penghapus; ?></td>
                        <td>
                            <div class="buttons">
                                <a href="#" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></i></a>
                                <a href="<?= base_url('/penghapus/deleted') . '/' . $f->id ?>" class="btn btn-danger"><i
                                        class="fa-solid fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    <?php
                    endforeach ?>


                </tbody>
            </table>
        </div>
    </div>

</section>



<?= $this->endSection(); ?>

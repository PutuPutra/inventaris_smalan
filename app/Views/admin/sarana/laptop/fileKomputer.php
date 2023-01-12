<?= $this->extend('/layout/templateAdmin'); ?>
<?= $this->section(''); ?>
<section class="section">
    <div class="card">
        <div class="card-header">
            <h4>Data Komputer</h4>
        </div>
        <!-- modal start -->
        <div class="col-md-6 col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="buttons">
                            <a href="<?= base_url('tambahLaptop') ?>" class="btn btn-success">Tambah
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
                        <th style="text-align: center;">Brand</th>
                        <th style="text-align: center; ">Gambar</th>
                        <th style="text-align: center;">Kondisi</th>
                        <th style="text-align: center;">Spesifikasi</th>
                        <th style="text-align: center;">Jenis</th>
                        <th style="text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    foreach ($files_komputer as $f) : ?>
                    <tr style="text-align: center;">
                        <td><?= $f->brand_komputer; ?></td>
                        <td><img class="pictures" src="/assets/foto/<?= $f->gambar_komputer; ?>" alt=""
                                width="100px"></img></td>
                        <td><?= $f->kondisi_komputer; ?></td>
                        <td style="width: 100px;"><?= $f->spesifikasi_komputer; ?></td>
                        <td><?= $f->jenis_produk_komputer; ?></td>
                        <td>
                            <div class="buttons">
                                <a href="<?= base_url('KomputerEdit') . '/' . $f->id ?>" class="btn btn-warning"><i
                                        class="fa-solid fa-pen-to-square"></i></i></a>
                                <a href="<?= base_url('deleted') . '/' . $f->id ?>" class="btn btn-danger"><i
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

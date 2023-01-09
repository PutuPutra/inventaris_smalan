<?php

use Faker\Provider\Base;
?>
<?= $this->extend('/layout/templateAdmin'); ?>
<?= $this->section('content'); ?>
<!-- Form and scrolling Components start -->
<section id="form-and-scrolling-components">
    <div class="row">
        <div class="col-md-6 col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="container">

                            <div class="form-group">
                                <form action="<?= base_url('papanTulis/store') ?>" method="POST" enctype="multipart/form-data">
                                    <?= csrf_field(); ?>
                                    <?php $validation = \Config\Services::validation(); ?>
                                    <div class="mb-3">
                                        <label for="ukuran_papan_tulis" class="form-label"
                                            <?= $validation->hasError('ukuran_papan_tulis') ? 'is-invalid' : null; ?>>Ukuran</label>
                                        <input type="text" class="form-control" id="ukuran_papan_tulis"
                                            name="ukuran_papan_tulis" aria-describedby="ukuran" placeholder="30 cm">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('ukuran_papan_tulis'); ?>
                                        </div>

                                    </div>
                                    <div class="mb-3">
                                        <label for="gambar_papan_tulis" class="form-label"
                                            <?= $validation->hasError('gambar_papan_tulis') ? 'is-invalid' : null; ?>>Gambar</label>
                                        <input class="form-control" type="file" id="gambar_papan_tulis"
                                            name="gambar_papan_tulis">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('gambar_papan_tulis'); ?>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success float-end mb-4 mt-2">Submit</button>
                                </form>

                                <div class="buttons" style="margin-top:28px;">
                                    <a href="<?= base_url('papanTulis') ?>" class="btn btn-warning">Kembali</a>
                                </div>

                            </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- Form and scrolling Components end -->
<?= $this->endSection(); ?>

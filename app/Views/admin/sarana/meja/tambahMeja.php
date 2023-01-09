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
                                <form action="<?= base_url('meja/store') ?>" method="POST" enctype="multipart/form-data">
                                    <?= csrf_field(); ?>
                                    <?php $validation = \Config\Services::validation(); ?>
                                    <div class="mb-3">
                                        <label for="ukuran_meja" class="form-label"
                                            <?= $validation->hasError('ukuran_meja') ? 'is-invalid' : null; ?>>Ukuran</label>
                                        <input type="text" class="form-control" id="ukuran_meja"
                                            name="ukuran_meja" aria-describedby="penerbit" placeholder="10 cm">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('ukuran_meja'); ?>
                                        </div>

                                    </div>
                                    <div class="mb-3">
                                        <label for="gambar_meja" class="form-label"
                                            <?= $validation->hasError('gambar_meja') ? 'is-invalid' : null; ?>>Gambar</label>
                                        <input class="form-control" type="file" id="gambar_meja"
                                            name="gambar_meja">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('gambar_meja'); ?>
                                        </div>
                                    </div>
                                    <div class="col-auto mb-4">
                                        <p>Kondisi</p>

                                        <fieldset class="form-group">
                                            <select class="form-select" id="kondisi_meja" name="kondisi_meja"
                                                <?= $validation->hasError('kondisi_meja') ? 'is-invalid' : null; ?>>
                                                <option selected>Pilih Kondisi Meja</option>
                                                <option value="Baik">Baik</option>
                                                <option value="Kerusakan Ringan">Kerusakan Ringan</option>
                                                <option value="Kerusakan Sedang">Kerusakan Sedang</option>
                                                <option value="Kerusakan Berat">Kerusakan Berat</option>
                                            </select>
                                        </fieldset>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('kondisi_meja'); ?>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success float-end mb-4 mt-2">Submit</button>
                                </form>

                                <div class="buttons" style="margin-top:28px;">
                                    <a href="<?= base_url('meja') ?>" class="btn btn-warning">Kembali</a>
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

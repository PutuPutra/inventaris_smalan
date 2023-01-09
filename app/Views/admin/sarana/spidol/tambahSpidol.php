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
                                <form action="<?= base_url('spidol/store') ?>" method="POST" enctype="multipart/form-data">
                                    <?= csrf_field(); ?>
                                    <?php $validation = \Config\Services::validation(); ?>
                                    <div class="mb-3">
                                        <label for="merk_spidol" class="form-label"
                                            <?= $validation->hasError('merk_spidol') ? 'is-invalid' : null; ?>>Merk</label>
                                        <input type="text" class="form-control" id="merk_spidol"
                                            name="merk_spidol" aria-describedby="penerbit" placeholder="Snowman">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('merk_spidol'); ?>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="gambar_spidol" class="form-label"
                                            <?= $validation->hasError('gambar_spidol') ? 'is-invalid' : null; ?>>Gambar</label>
                                        <input class="form-control" type="file" id="gambar_spidol"
                                            name="gambar_spidol">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('gambar_spidol'); ?>
                                        </div>
                                    </div>
                                    <div class="col-auto mb-4">
                                        <p>Kondisi</p>

                                        <fieldset class="form-group">
                                            <select class="form-select" id="kondisi_spidol" name="kondisi_spidol"
                                                <?= $validation->hasError('kondisi_spidol') ? 'is-invalid' : null; ?>>
                                                <option selected>Pilih Kondisi Spidol</option>
                                                <option value="Baik">Baik</option>
                                                <option value="Kerusakan Ringan">Kerusakan Ringan</option>
                                                <option value="Kerusakan Sedang">Kerusakan Sedang</option>
                                                <option value="Kerusakan Berat">Kerusakan Berat</option>
                                            </select>
                                        </fieldset>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('kondisi_spidol'); ?>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="warna_spidol" class="form-label"
                                            <?= $validation->hasError('warna_spidol') ? 'is-invalid' : null; ?>>Warna</label>
                                        <input type="text" class="form-control" id="warna_spidol"
                                            name="warna_spidol" aria-describedby="warna" placeholder="Hitam">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('warna_spidol'); ?>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success float-end mb-4 mt-2">Submit</button>
                                </form>

                                <div class="buttons" style="margin-top:28px;">
                                    <a href="<?= base_url('spidol') ?>" class="btn btn-warning">Kembali</a>
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

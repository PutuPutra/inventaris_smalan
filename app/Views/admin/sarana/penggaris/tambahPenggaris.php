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
                                <form action="<?= base_url('penggaris/store') ?>" method="POST" enctype="multipart/form-data">
                                    <?= csrf_field(); ?>
                                    <?php $validation = \Config\Services::validation(); ?>
                                    <div class="mb-3">
                                        <label for="merk_penggaris" class="form-label"
                                            <?= $validation->hasError('merk_penggaris') ? 'is-invalid' : null; ?>>Merk</label>
                                        <input type="text" class="form-control" id="merk_penggaris"
                                            name="merk_penggaris" aria-describedby="merk">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('merk_penggaris'); ?>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="panjang_penggaris" class="form-label"
                                            <?= $validation->hasError('panjang_penggaris') ? 'is-invalid' : null; ?>>Panjang</label>
                                        <input type="text" class="form-control" id="panjang_penggaris"
                                            name="panjang_penggaris" aria-describedby="panjang">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('panjang_penggaris'); ?>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="gambar_penggaris" class="form-label"
                                            <?= $validation->hasError('gambar_penggaris') ? 'is-invalid' : null; ?>>Gambar</label>
                                        <input class="form-control" type="file" id="gambar_penggaris"
                                            name="gambar_penggaris">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('gambar_penggaris'); ?>
                                        </div>
                                    </div>
                                    <div class="col-auto mb-4">
                                        <p>Kondisi</p>

                                        <fieldset class="form-group">
                                            <select class="form-select" id="kondisi_penggaris" name="kondisi_penggaris"
                                                <?= $validation->hasError('kondisi_penggaris') ? 'is-invalid' : null; ?>>
                                                <option selected>Pilih Kondisi Penggaris</option>
                                                <option value="Baik">Baik</option>
                                                <option value="Kerusakan Ringan">Kerusakan Ringan</option>
                                                <option value="Kerusakan Sedang">Kerusakan Sedang</option>
                                                <option value="Kerusakan Berat">Kerusakan Berat</option>
                                            </select>
                                        </fieldset>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('kondisi_penggaris'); ?>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success float-end mb-4 mt-2">Submit</button>
                                </form>

                                <div class="buttons" style="margin-top:28px;">
                                    <a href="<?= base_url('penggaris') ?>" class="btn btn-warning">Kembali</a>
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

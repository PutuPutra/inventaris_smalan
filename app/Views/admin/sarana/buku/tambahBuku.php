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
                                <form action="<?= base_url('buku/store') ?>" method="POST" enctype="multipart/form-data">
                                    <?= csrf_field(); ?>
                                    <?php $validation = \Config\Services::validation(); ?>
                                    <div class="mb-3">
                                        <label for="penerbit_buku" class="form-label"
                                            <?= $validation->hasError('penerbit_buku') ? 'is-invalid' : null; ?>>Penerbit</label>
                                        <input type="text" class="form-control" id="penerbit_buku"
                                            name="penerbit_buku" aria-describedby="penerbit" placeholder="Erlangga">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('penerbit_buku'); ?>
                                        </div>

                                    </div>
                                    <div class="mb-3">
                                        <label for="gambar_buku" class="form-label"
                                            <?= $validation->hasError('gambar_buku') ? 'is-invalid' : null; ?>>Gambar</label>
                                        <input class="form-control" type="file" id="gambar_buku"
                                            name="gambar_buku">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('gambar_buku'); ?>
                                        </div>
                                    </div>
                                    <div class="col-auto mb-4">
                                        <p>Kondisi</p>

                                        <fieldset class="form-group">
                                            <select class="form-select" id="kondisi_buku" name="kondisi_buku"
                                                <?= $validation->hasError('kondisi_buku') ? 'is-invalid' : null; ?>>
                                                <option selected>Pilih Kondisi Buku</option>
                                                <option value="Baik">Baik</option>
                                                <option value="Kerusakan Ringan">Kerusakan Ringan</option>
                                                <option value="Kerusakan Sedang">Kerusakan Sedang</option>
                                                <option value="Kerusakan Berat">Kerusakan Berat</option>
                                            </select>
                                        </fieldset>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('kondisi_buku'); ?>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <div class="form-group mb-3">
                                            <label for="deskirpsi_buku" class="form-label"
                                                <?= $validation->hasError('deskripsi_buku') ? 'is-invalid' : null; ?>>Deskripsi</label>
                                            <textarea class="form-control" id="deskripsi_buku"
                                                name="deskripsi_buku" rows="3"></textarea>
                                        </div>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('deskripsi_buku'); ?>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success float-end mb-4 mt-2">Submit</button>
                                </form>

                                <div class="buttons" style="margin-top:28px;">
                                    <a href="<?= base_url('buku') ?>" class="btn btn-warning">Kembali</a>
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

<?= $this->extend('/layout/templateAdmin'); ?>
<?= $this->section(''); ?>
<!-- Form and scrolling Components start -->
<section id="form-and-scrolling-components">
    <div class="row">
        <div class="col-md-6 col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="container">

                            <div class="form-group">
                                <form action="<?= base_url('store') ?>" method="POST" enctype="multipart/form-data">
                                    <?= csrf_field(); ?>
                                    <?php $validation = \Config\Services::validation(); ?>
                                    <div class="mb-3">
                                        <label for="brand_komputer" class="form-label"
                                            <?= $validation->hasError('brand_komputer') ? 'is-invalid' : null; ?>>Brand</label>
                                        <input type="text" class="form-control" id="brand_komputer"
                                            name="brand_komputer" aria-describedby="brand" placeholder="Asus">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('brand_komputer'); ?>
                                        </div>

                                    </div>
                                    <div class="mb-3">
                                        <label for="gambar_komputer" class="form-label"
                                            <?= $validation->hasError('gambar_komputer') ? 'is-invalid' : null; ?>>Gambar</label>
                                        <input class="form-control" type="file" id="gambar_komputer"
                                            name="gambar_komputer">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('gambar_komputer'); ?>
                                        </div>
                                    </div>
                                    <div class="col-auto mb-4">
                                        <p>Kondisi</p>

                                        <fieldset class="form-group">
                                            <select class="form-select" id="kondisi_komputer" name="kondisi_komputer"
                                                <?= $validation->hasError('kondisi_komputer') ? 'is-invalid' : null; ?>>
                                                <option selected>Pilih Kondisi Komputer</option>
                                                <option value="Baik">Baik</option>
                                                <option value="Kerusakan Ringan">Kerusakan Ringan</option>
                                                <option value="Kerusakan Sedang">Kerusakan Sedang</option>
                                                <option value="Kerusakan Berat">Kerusakan Berat</option>
                                                <option value="Sedang Diperbaiki">Sedang Diperbaiki</option>
                                            </select>
                                        </fieldset>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('kondisi_komputer'); ?>
                                        </div>
                                    </div>
                                    <div class="col-auto mb-4">
                                        <p>Jenis</p>

                                        <fieldset class="form-group">
                                            <select class="form-select" id="jenis_produk_komputer"
                                                name="jenis_produk_komputer"
                                                <?= $validation->hasError('jenis_produk_komputer') ? 'is-invalid' : null; ?>>
                                                <option selected>Pilih Jenis</option>
                                                <option value="Komputer">Komputer</option>
                                                <option value="Laptop">Laptop</option>
                                            </select>
                                        </fieldset>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('jenis_produk_komputer'); ?>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <div class="form-group mb-3">
                                            <label for="spesifikasi_komputer" class="form-label"
                                                <?= $validation->hasError('spesifikasi_komputer') ? 'is-invalid' : null; ?>>Spesifikasi</label>
                                            <textarea class="form-control" id="spesifikasi_komputer"
                                                name="spesifikasi_komputer" rows="3"></textarea>
                                        </div>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('spesifikasi_komputer'); ?>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success float-end mb-4 mt-2">Submit</button>
                                </form>

                                <div class="buttons" style="margin-top:28px;">
                                    <a href="<?= base_url('komputer') ?>" class="btn btn-warning">Kembali</a>
                                </div>

                            </div>


                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- Form and scrolling Components end -->
<?= $this->endSection(); ?>

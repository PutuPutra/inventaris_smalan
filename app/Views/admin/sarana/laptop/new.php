<div class="mb-5 mt-5">
    <a href="<?= base_url('komputer') ?>"> <button type="button" class="btn btn-success"></i>Back</button></a>
    <div class="py-3">
        <form action="<?= base_url('store') ?>" method="POST" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="row">
                <div class="col-md-8">
                    <?php $validation = \Config\Services::validation(); ?>
                    <div class="mb-3">
                        <label for="brand_komputer"
                            class="form-label <?= $validation->hasError('brand_komputer') ? 'is-invalid' : null; ?>">Brand</label>
                        <input type="text" class="form-control" id="brand_komputer" name="brand_komputer"
                            placeholder="Asus">
                        <div class="invalid-feedback">
                            <?= $validation->getError('brand_komputer'); ?>
                        </div>


                    </div>
                    <div class="mb-3">
                        <label for="kondisi_komputer"
                            class="form-label <?= $validation->hasError('kondisi_komputer') ? 'is-invalid' : null; ?>">Kondisi</label>
                        <input type="text" class="form-control" id="kondisi_komputer" name="kondisi_komputer">
                        <div class="invalid-feedback">
                            <?= $validation->getError('kondisi_komputer'); ?>
                        </div>


                    </div>
                    <div class="mb-3">
                        <label for="spesifikasi_komputer"
                            class="form-label <?= $validation->hasError('spesifikasi_komputer') ? 'is-invalid' : null; ?>">Spesifikasi</label>
                        <input type="text" class="form-control" id="spesifikasi_komputer" name="spesifikasi_komputer">
                        <div class="invalid-feedback">
                            <?= $validation->getError('spesifikasi_komputer'); ?>
                        </div>


                    </div>
                    <div class="mb-3">
                        <label for="jenis_produk_komputer"
                            class="form-label <?= $validation->hasError('jenis_produk_komputer') ? 'is-invalid' : null; ?>">Price</label>
                        <input type="text" class="form-control" id="jenis_produk_komputer" name="jenis_produk_komputer">
                        <div class="invalid-feedback">
                            <?= $validation->getError('jenis_produk_komputer'); ?>
                        </div>


                    </div>
                    <div class="mb-3">
                        <label for="gambar_komputer"
                            class="form-label <?= $validation->hasError('gambar_komputer') ? 'is-invalid' : null; ?>">Images</label>
                        <input type="file" class="form-control" id="gambar_komputer" name="gambar_komputer">
                        <div class="invalid-feedback">
                            <?= $validation->getError('gambar_komputer'); ?>
                        </div>


                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fa-solid fa-paper-plane"></i></button>
                </div>
            </div>
    </div>
</div>

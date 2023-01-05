<?= $this->extend('/layout/templateAdmin'); ?>
<?= $this->section('content'); ?>
<!-- Form and scrolling Components start -->
<section id="form-and-scrolling-components">
    <div class="row">
        <div class="col-md-6 col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="form-group">
                            <form>
                                <div class="mb-3">
                                    <label for="brand" class="form-label">Brand</label>
                                    <input type="text" class="form-control" id="brand" aria-describedby="brand"
                                        placeholder="Asus">

                                </div>
                                <div class="mb-3">
                                    <label for="lapangan" class="form-label">Gambar</label>
                                    <input class="form-control" type="file" id="gambarLaptop">
                                </div>
                                <div class="col-auto mb-4">
                                    <p>Kondisi</p>

                                    <fieldset class="form-group">
                                        <select class="form-select" id="kondisi">
                                            <option selected>Pilih Kondisi Komputer</option>
                                            <option>Baik</option>
                                            <option>Kerusakan Ringan</option>
                                            <option>Kerusakan Sedang</option>
                                            <option>Kerusakan Berat</option>
                                            <option>Sedang Diperbaiki</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="mb-3">
                                    <div class="form-group mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Spesifikasi</label>
                                        <textarea class="form-control" id="spesifikasi" rows="3"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary float-end mb-4 mt-2">Submit</button>
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

<?= $this->extend('/layout/templateAdmin'); ?>
<?= $this->section('content'); ?>
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
                        <th style="text-align: center;" width="250px">Gambar</th>
                        <th style="text-align: center;">Kondisi</th>
                        <th style="text-align: center;" width="400px">Spesifikasi</th>
                        <th style="text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="text-align: center;">
                        <td>Graiden</td>
                        <td>vehicula@gmail.com</td>
                        <td>076 4820 8838</td>
                        <td>Offenburg</td>
                        <td>
                            <div class="buttons">
                                <a href="#" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></i></a>
                                <a href="#" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>


                </tbody>
            </table>
        </div>
    </div>

</section>



<?= $this->endSection(); ?>

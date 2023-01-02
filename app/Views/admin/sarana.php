<?= $this->extend('/layout/templateAdmin'); ?>
<?= $this->section('content'); ?>
<section class="section">
    <div class="card">
        <div class="card-header">
            <h4>Data Laptop</h4>

        </div>
        <!-- Modal start -->
        <section id="form-and-scrolling-components">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="form-group">

                                    <!-- Button trigger for login form modal -->
                                    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal"
                                        data-bs-target="#inlineForm">
                                        Tambah Data
                                    </button>

                                    <!--login form Modal -->
                                    <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel33" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                            role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myModalLabel33">Tambah Data Laptop
                                                    </h4>
                                                    <button type="button" class="close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                        <i data-feather="x"></i>
                                                    </button>
                                                </div>
                                                <form action="#">
                                                    <div class="modal-body">
                                                        <label>Brand: </label>
                                                        <div class="form-group">
                                                            <input type="text" placeholder="brand" class="form-control">
                                                        </div>
                                                        <label>Seri: </label>
                                                        <div class="form-group">
                                                            <input type="text" placeholder="seri" class="form-control">
                                                        </div>
                                                        <label>Harga: </label>
                                                        <div class="form-group">
                                                            <input type="text" placeholder="Rp 00" class="form-control">
                                                        </div>
                                                        <label>Harga: </label>
                                                        <div class="form-group">
                                                            <input type="text" placeholder="Rp 00" class="form-control">
                                                        </div>
                                                        <label>Harga: </label>
                                                        <div class="form-group">
                                                            <input type="text" placeholder="Rp 00" class="form-control">
                                                        </div>
                                                        <label>Harga: </label>
                                                        <div class="form-group">
                                                            <input type="text" placeholder="Rp 00" class="form-control">
                                                        </div>
                                                        <label>Harga: </label>
                                                        <div class="form-group">
                                                            <input type="text" placeholder="Rp 00" class="form-control">
                                                        </div>
                                                        <label>Harga: </label>
                                                        <div class="form-group">
                                                            <input type="text" placeholder="Rp 00" class="form-control">
                                                        </div>
                                                        <label>Harga: </label>
                                                        <div class="form-group">
                                                            <input type="text" placeholder="Rp 00" class="form-control">
                                                        </div>
                                                        <label>Harga: </label>
                                                        <div class="form-group">
                                                            <input type="text" placeholder="Rp 00" class="form-control">
                                                        </div>
                                                        <label>Harga: </label>
                                                        <div class="form-group">
                                                            <input type="text" placeholder="Rp 00" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light-secondary"
                                                            data-bs-dismiss="modal">
                                                            <i class="bx bx-x d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Tutup</span>
                                                        </button>
                                                        <button type="button" class="btn btn-primary ml-1"
                                                            data-bs-dismiss="modal">
                                                            <i class="bx bx-check d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Tambahkan</span>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- Modal end -->
        <div class="card-body">
            <table class="table table-striped" id="table1">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>City</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Graiden</td>
                        <td>vehicula.aliquet@semconsequat.co.uk</td>
                        <td>076 4820 8838</td>
                        <td>Offenburg</td>
                        <td>
                            <span class="badge bg-success">Active</span>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

</section>
<?= $this->endSection(); ?>

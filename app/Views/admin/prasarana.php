<?= $this->extend('/layout/templateAdmin'); ?>
<?= $this->section('content'); ?>
<section class="section">
    <div class="card">
        <div class="card-header">
            <h4>Data Gedung</h4>
        </div>
        <div class="col-md-6 col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <!-- Button trigger for scrolling content modal -->
                        <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModalScrollable">
                            Tambah Data
                        </button>

                        <!--scrolling content Modal -->
                        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalScrollableTitle">Tambah Data Gedung</h5>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <i data-feather="x"></i>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Email
                                                address</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Email
                                                address</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Email
                                                address</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Email
                                                address</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Email
                                                address</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Email
                                                address</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Email
                                                address</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Email
                                                address</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Email
                                                address</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Email
                                                address</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Email
                                                address</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Email
                                                address</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Email
                                                address</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Email
                                                address</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Email
                                                address</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Email
                                                address</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label">Example
                                                textarea</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                            <i class="bx bx-x d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Batal</span>
                                        </button>
                                        <button type="button" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                                            <i class="bx bx-check d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Kirim</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
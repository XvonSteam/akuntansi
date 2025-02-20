<?php require 'header.php'; ?>
<div class="body-wrapper">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header bg-success text-white">
                <h3 class="card-title mb-0 text-white">
                    <i class="ti ti-user me-2"></i>MASTER DATA CUSTOMER
                </h3>
            </div>
            <div class="card-body">
                <form action="process_customer.php" method="POST">
                    <div class="row g-3 mb-4">
                        <div class="col-md-4">
                            <label class="form-label">Nama Customer</label>
                            <input type="text" name="nama_customer" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Alamat</label>
                            <input type="text" name="alamat" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Telepon</label>
                            <input type="text" name="telepon" class="form-control" required>
                        </div>
                    </div>
                    <div class="row g-3 mb-4">
                        <div class="col-md-4">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Kontak Person</label>
                            <input type="text" name="kontak_person" class="form-control" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">
                        <i class="ti ti-device-floppy me-2"></i>Simpan Customer
                    </button>
                </form>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Daftar Customer</h5>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Nama Customer</th>
                                <th>Alamat</th>
                                <th>Telepon</th>
                                <th>Email</th>
                                <th>Kontak Person</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php /* Data dari database */ ?>
                            <tr>
                                <td>1</td>
                                <td>Customer A</td>
                                <td>Jl. Contoh No. 2</td>
                                <td>08123456780</td>
                                <td>customerA@example.com</td>
                                <td>Jane Doe</td>
                                <td>
                                    <button class="btn btn-sm btn-warning">
                                        <i class="ti ti-pencil"></i>Edit
                                    </button>
                                    <button class="btn btn-sm btn-danger">
                                        <i class="ti ti-trash"></i>Hapus
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require 'footer.php'; ?>
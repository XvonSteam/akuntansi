<?php require 'header.php'; ?>
<div class="body-wrapper">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title text-white mb-0">
                    <i class="ti ti-user me-2"></i>MASTER DATA SUPPLIER
                </h3>
            </div>
            <div class="card-body">
                <form action="process_supplier.php" method="POST">
                    <div class="row g-3 mb-4">
                        <div class="col-md-4">
                            <label class="form-label">Nama Supplier</label>
                            <input type="text" name="nama_supplier" class="form-control" required>
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
                    <button type="submit" class="btn btn-primary">
                        <i class="ti ti-device-floppy me-2"></i>Simpan Supplier
                    </button>
                </form>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Daftar Supplier</h5>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Nama Supplier</th>
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
                                <td>Supplier A</td>
                                <td>Jl. Contoh No. 1</td>
                                <td>08123456789</td>
                                <td>supplierA@example.com</td>
                                <td>John Doe</td>
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
<?php require 'header.php'; ?>
<div class="body-wrapper">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header bg-warning text-dark">
                <h3 class="card-title mb-0 text-white">
                    <i class="ti ti-package me-2"></i>MASTER DATA PRODUK
                </h3>
            </div>
            <div class="card-body">
                <form action="process_produk.php" method="POST">
                    <div class="row g-3 mb-4">
                        <div class="col-md-4">
                            <label class="form-label">Nama Produk</label>
                            <input type="text" name="nama_produk" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Kategori</label>
                            <input type="text" name="kategori" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Harga</label>
                            <input type="number" name="harga" class="form-control" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-warning">
                        <i class="ti ti-device-floppy me-2"></i>Simpan Produk
                    </button>
                </form>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Daftar Produk</h5>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Nama Produk</th>
                                <th>Kategori</th>
                                <th>Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php /* Data dari database */ ?>
                            <tr>
                                <td>1</td>
                                <td>Produk A</td>
                                <td>Kategori A</td>
                                <td>Rp 100.000</td>
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
<?php require 'header.php'; ?>
<div class="body-wrapper">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header bg-info text-white">
                <h3 class="card-title mb-0 text-white">
                    <i class="ti ti-home me-2"></i>MASTER DATA GUDANG
                </h3>
            </div>
            <div class="card-body">
                <form action="process_gudang.php" method="POST">
                    <div class="row g-3 mb-4">
                        <div class="col-md-4">
                            <label class="form-label">Nama Gudang</label>
                            <input type="text" name="nama_gudang" class="form-control" required>
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
                    <button type="submit" class="btn btn-info">
                        <i class="ti ti-device-floppy me-2"></i>Simpan Gudang
                    </button>
                </form>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Daftar Gudang</h5>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Nama Gudang</th>
                                <th>Alamat</th>
                                <th>Telepon</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php /* Data dari database */ ?>
                            <tr>
                                <td>1</td>
                                <td>Gudang Utama</td>
                                <td>Jl. Utama No. 1</td>
                                <td>08123456781</td>
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
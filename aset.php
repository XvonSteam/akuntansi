<?php require 'header.php'; ?>
<div class="body-wrapper">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header bg-secondary text-white">
                <h3 class="card-title mb-0 text-white">
                    <i class="ti ti-briefcase me-2"></i>MASTER DATA ASET
                </h3>
            </div>
            <div class="card-body">
                <form action="process_aset.php" method="POST">
                    <div class="row g-3 mb-4">
                        <div class="col-md-4">
                            <label class="form-label">Nama Aset</label>
                            <input type="text" name="nama_aset" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Nilai Aset</label>
                            <input type="number" name="nilai_aset" class="form-control" required>
                        </div>
                        <div class="col-md- 4">
                            <label class="form-label">Tanggal Perolehan</label>
                            <input type="date" name="tanggal_perolehan" class="form-control" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-secondary">
                        <i class="ti ti-device-floppy me-2"></i>Simpan Aset
                    </button>
                </form>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Daftar Aset</h5>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Nama Aset</th>
                                <th>Nilai Aset</th>
                                <th>Tanggal Perolehan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php /* Data dari database */ ?>
                            <tr>
                                <td>1</td>
                                <td>Aset A</td>
                                <td>Rp 1.000.000</td>
                                <td>01/01/2023</td>
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
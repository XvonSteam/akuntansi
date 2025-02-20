<?php require 'header.php'; ?>
<div class="body-wrapper">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header bg-warning text-dark">
                <h3 class="card-title mb-0">
                    <i class="ti ti-wallet me-2"></i>MANAJEMEN PIUTANG CUSTOMER
                </h3>
            </div>
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-md-4">
                        <div class="input-group">
                            <span class="input-group-text"><i class="ti ti -search"></i></span>
                            <input type="text" class="form-control" placeholder="Cari piutang customer...">
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>Pelanggan</th>
                                <th>No. Faktur</th>
                                <th>Tanggal</th>
                                <th>Jatuh Tempo</th>
                                <th class="text-end">Total Piutang</th>
                                <th class="text-end">Terbayar</th>
                                <th class="text-end">Sisa</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php /* Data dari database */ ?>
                            <tr>
                                <td>Pelanggan A</td>
                                <td>INV-202308-002</td>
                                <td>02/08/2023</td>
                                <td>16/08/2023</td>
                                <td class="text-end">Rp 3.000.000</td>
                                <td class="text-end">Rp 1.000.000</td>
                                <td class="text-end text-danger fw-bold">Rp 2.000.000</td>
                                <td>
                                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#bayarPiutang">
                                        <i class="ti ti-cash me-2"></i>Bayar
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

<!-- Modal Bayar Piutang -->
<div class="modal fade" id="bayarPiutang">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-warning text-dark">
                <h5 class="modal-title"><i class="ti ti-cash me-2"></i>PEMBAYARAN PIUTANG</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="process_bayar_piutang.php" method="POST">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Nominal Pembayaran</label>
                        <input type="number" name="nominal" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Pembayaran</label>
                        <input type="date" name="tanggal" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Metode Pembayaran</label>
                        <select name="metode" class="form-select" required>
                            <option value="cash">Cash</option>
                            <option value="transfer">Transfer Bank</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-warning">
                        <i class="ti ti-cash me-2"></i>Simpan Pembayaran
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php require 'footer.php'; ?>
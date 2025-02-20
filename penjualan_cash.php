<?php require 'header.php'; ?>
<div class="body-wrapper">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header bg-success text-white">
                <h3 class="card-title mb-0">
                    <i class="ti ti-cash me-2"></i>FORM PENJUALAN CASH
                </h3>
            </div>
            <div class="card-body">
                <form action="process_penjualan_cash.php" method="POST">
                    <div class="row g-3 mb-4">
                        <div class="col-md-3">
                            <label class="form-label"><i class="ti ti-calendar me-2"></i>Tanggal</label>
                            <input type="date" name="tanggal" class="form-control" required>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label"><i class="ti ti-id me-2"></i>No. Faktur</label>
                            <input type="text" name="no_faktur" class="form-control" value="PJ-<?= date('YmdHis') ?>" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label"><i class="ti ti-user me -2"></i>Pelanggan</label>
                            <select name="pelanggan" class="form-select" required>
                                <option value="">Pilih Pelanggan</option>
                                <?php /* Data dari database */ ?>
                                <option value="1">Pelanggan A</option>
                                <option value="2">Pelanggan B</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label"><i class="ti ti-cash me-2"></i>Metode Pembayaran</label>
                            <select name="metode_pembayaran" class="form-select" required>
                                <option value="cash">Cash</option>
                                <option value="kredit">Kredit</option>
                            </select>
                        </div>
                    </div>

                    <div class="table-responsive mb-4">
                        <table class="table table-bordered" id="tabel-penjualan">
                            <thead class="table-dark">
                                <tr>
                                    <th>Nama Barang</th>
                                    <th width="120">Qty</th>
                                    <th width="180">Harga Satuan</th>
                                    <th width="150">Diskon</th>
                                    <th width="150">PPN</th>
                                    <th width="200">Subtotal</th>
                                    <th width="50"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="item-row">
                                    <td>
                                        <select name="barang[]" class="form-select select-barang" required>
                                            <option value="">Pilih Barang</option>
                                            <?php /* Data dari database */ ?>
                                            <option value="1">Barang A</option>
                                            <option value="2">Barang B</option>
                                        </select>
                                    </td>
                                    <td><input type="number" name="qty[]" class="form-control" min="1" value="1" required></td>
                                    <td><input type="number" name="harga[]" class="form-control harga" min="0" required></td>
                                    <td><input type="number" name="diskon[]" class="form-control diskon" min="0" value="0"></td>
                                    <td>
                                        <select name="ppn[]" class="form-select ppn">
                                            <option value="0">0%</option>
                                            <option value="11">11%</option>
                                        </select>
                                    </td>
                                    <td class="subtotal text-end">Rp 0</td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-danger btn-sm hapus-item">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="button" class="btn btn-primary btn-sm" id="tambah-item">
                            <i class="ti ti-plus me-2"></i>Tambah Barang
                        </button>
                    </div>

                    <div class="row g-3">
                        <div class="col-md-4">
                            <label class="form-label"><i class="ti ti-notes me-2"></i>Keterangan</label>
                            <textarea name="keterangan" class="form-control" rows="2"></textarea>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label"><i class="ti ti-cash me-2"></i>Total Penjualan</label>
                                <input type="text" id="total-penjualan" class="form-control bg-light" readonly>
                            </div>
                        </div>
                        <div class="col-md-4 text-end">
                            <button type="submit" class="btn btn-lg btn-success">
                                <i class="ti ti-device-floppy me-2"></i>Simpan Penjualan
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require 'footer.php'; ?>
<?php
require 'header.php';

// Simulasi data dari database
$transactions = [
    [
        'id' => 'TRX-20230801-001',
        'date' => '2023-08-01',
        'debit' => 0,
        'credit' => 1500000,
        'notes' => 'Pembayaran dari Customer A',
        'coa_debit' => '501',
        'coa_credit' => '102'
    ],
    [
        'id' => 'TRX-20230801-002',
        'date' => '2023-08-02',
        'debit' => 750000,
        'credit' => 0,
        'notes' => 'Pembelian bahan baku',
        'coa_debit' => '502',
        'coa_credit' => '101'
    ]
];

// Fungsi format mata uang
function formatRupiah($nominal)
{
    return $nominal > 0 ? 'Rp ' . number_format($nominal, 0, ',', '.') : '-';
}

// Fungsi get COA name
function getCoaName($code)
{
    $coa = [
        '101' => 'Kas Kecil',
        '102' => 'Bank BCA',
        '103' => 'Bank Mandiri',
        '501' => 'Beban Operasional',
        '502' => 'Beban Penyusutan',
        '503' => 'Beban Lainnya'
    ];
    return $coa[$code] ?? 'Unknown COA';
}
?>
<div class="body-wrapper">
    <div class="container-fluid">
        <!-- Form Input Transaksi -->
        <div class="card mb-4">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title text-white mb-0"><i class="ti ti-file-invoice me-2"></i>ENTRI TRANSAKSI KEUANGAN</h3>
            </div>
            <div class="card-body">
                <form action="process_transaction.php" method="POST" class="needs-validation" novalidate>
                    <!-- Baris 1 - Header Transaksi -->
                    <div class="row g-3 mb-4">
                        <div class="col-md-6">
                            <label for="transaction_date" class="form-label">
                                <i class="ti ti-calendar-event me-2"></i>Tanggal Transaksi
                            </label>
                            <div class="input-group">
                                <span class="input-group-text bg-primary text-white">
                                    <i class="ti ti-calendar"></i>
                                </span>
                                <input type="date"
                                    class="form-control border-start-0"
                                    id="transaction_date"
                                    name="transaction_date"
                                    value="<?= date('Y-m-d') ?>"
                                    required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="transaction_id" class="form-label">
                                <i class="ti ti-id me-2"></i>ID Transaksi
                            </label>
                            <div class="input-group">
                                <span class="input-group-text bg-primary text-white">
                                    <i class="ti ti-barcode"></i>
                                </span>
                                <input type="text"
                                    class="form-control border-start-0"
                                    id="transaction_id"
                                    name="transaction_id"
                                    value="TRX-<?= date('Ymd-His') ?>"
                                    readonly>
                            </div>
                        </div>
                    </div>

                    <!-- Baris 2 - COA Selection -->
                    <div class="row g-3 mb-4">
                        <div class="col-md-6">
                            <label for="credit_coa" class="form-label">
                                <i class="ti ti-arrow-narrow-up text-danger me-2"></i>Kredit (Sumber Dana)
                            </label>
                            <div class="input-group">
                                <span class="input-group-text bg-danger text-white">
                                    <i class="ti ti-wallet"></i>
                                </span>
                                <select class="form-select border-start-0" id="credit_coa" name="credit_coa" required>
                                    <option value="">Pilih Akun Kas/Bank...</option>
                                    <option value="101">101 - Kas Kecil</option>
                                    <option value="102">102 - Bank BCA</option>
                                    <option value="103">103 - Bank Mandiri</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="debit_coa" class="form-label">
                                <i class="ti ti-arrow-narrow-down text-success me-2"></i>Debit (Penggunaan Dana)
                            </label>
                            <div class="input-group">
                                <span class="input-group-text bg-success text-white">
                                    <i class="ti ti-coins"></i>
                                </span>
                                <select class="form-select border-start-0" id="debit_coa" name="debit_coa" required>
                                    <option value="">Pilih Akun Beban...</option>
                                    <option value="501">501 - Beban Operasional</option>
                                    <option value="502">502 - Beban Penyusutan</option>
                                    <option value="503">503 - Beban Lainnya</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Baris 3 - Nominal dan Deskripsi -->
                    <div class="row g-3 mb-4">
                        <div class="col-md-6">
                            <label for="amount" class="form-label">
                                <i class="ti ti-currency-dollar me-2"></i>Nominal Transaksi
                            </label>
                            <div class="input-group">
                                <span class="input-group-text bg-warning text-dark">
                                    <i class="ti ti-cash"></i>
                                </span>
                                <input type="number"
                                    class="form-control border-start-0"
                                    id="amount"
                                    name="amount"
                                    min="0"
                                    step="1000"
                                    placeholder="0"
                                    required>
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="description" class="form-label">
                                <i class="ti ti-notes me-2"></i>Deskripsi Transaksi
                            </label>
                            <div class="input-group">
                                <span class="input-group-text bg-info text-white">
                                    <i class="ti ti-file-description"></i>
                                </span>
                                <textarea class="form-control border-start-0"
                                    id="description"
                                    name="description"
                                    rows="2"
                                    placeholder="Deskripsi lengkap transaksi..."
                                    required></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Tombol Aksi -->
                    <div class="d-flex justify-content-between border-top pt-4">
                        <button type="reset" class="btn btn-outline-secondary">
                            <i class="ti ti-rotate-clockwise me-2"></i>Reset Form
                        </button>
                        <button type="submit" class="btn btn-primary px-5">
                            <i class="ti ti-device-floppy me-2"></i>Simpan Transaksi
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Tabel History Transaksi -->
        <div class="card">
            <div class="card-header bg-success text-white">
                <h3 class="card-title text-white mb-0"><i class="ti ti-history me-2"></i>RIWAYAT TRANSAKSI</h3>
            </div>
            <div class="card-body">
                <!-- Toolbar Tabel -->
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div class="d-flex gap-2">
                        <div class="input-group w-300">
                            <span class="input-group-text">
                                <i class="ti ti-search"></i>
                            </span>
                            <input type="text"
                                class="form-control"
                                placeholder="Cari transaksi...">
                        </div>
                        <button class="btn btn-outline-primary">
                            <i class="ti ti-filter"></i>
                            <span class="d-none d-md-inline ms-2">Filter</span>
                        </button>
                    </div>
                    <div class="d-flex gap-2">
                        <button class="btn btn-success">
                            <i class="ti ti-download"></i>
                            <span class="d-none d-md-inline ms-2">Export</span>
                        </button>
                        <button class="btn btn-danger">
                            <i class="ti ti-printer"></i>
                            <span class="d-none d-md-inline ms-2">Print</span>
                        </button>
                    </div>
                </div>

                <!-- Tabel Data -->
                <div class="table-responsive">
                    <table class="table table-hover align-middle table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th width="50">#</th>
                                <th><i class="ti ti-id me-2"></i>ID Transaksi</th>
                                <th><i class="ti ti-calendar me-2"></i>Tanggal</th>
                                <th class="text-end"><i class="ti ti-arrow-narrow-down me-2"></i>Debit</th>
                                <th class="text-end"><i class="ti ti-arrow-narrow-up me-2"></i>Kredit</th>
                                <th><i class="ti ti-wallet me-2"></i>COA</th>
                                <th><i class="ti ti-notes me-2"></i>Keterangan</th>
                                <th width="150"><i class="ti ti-settings me-2"></i>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($transactions as $index => $trx): ?>
                                <tr>
                                    <td><?= $index + 1 ?></td>
                                    <td>
                                        <span class="badge bg-primary">
                                            <i class="ti ti-id me-2"></i><?= $trx['id'] ?>
                                        </span>
                                    </td>
                                    <td>
                                        <i class="ti ti-calendar me-2"></i>
                                        <?= date('d/m/Y', strtotime($trx['date'])) ?>
                                    </td>
                                    <td class="text-end text-success fw-bold">
                                        <?= formatRupiah($trx['debit']) ?>
                                    </td>
                                    <td class="text-end text-danger fw-bold">
                                        <?= formatRupiah($trx['credit']) ?>
                                    </td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <span class="badge bg-danger">
                                                <i class="ti ti-arrow-narrow-up me-1"></i><?= $trx['coa_credit'] ?>
                                            </span>
                                            <span class="badge bg-success">
                                                <i class="ti ti-arrow-narrow-down me-1"></i><?= $trx['coa_debit'] ?>
                                            </span>
                                        </div>
                                    </td>
                                    <td><?= $trx['notes'] ?></td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <!-- Tombol Detail -->
                                            <button class="btn btn-sm btn-outline-primary"
                                                data-bs-toggle="modal"
                                                data-bs-target="#detailModal<?= $index ?>"
                                                title="Detail">
                                                <i class="ti ti-eye"></i>
                                            </button>

                                            <!-- Tombol Edit -->
                                            <button class="btn btn-sm btn-outline-warning"
                                                data-bs-toggle="modal"
                                                data-bs-target="#editModal<?= $index ?>"
                                                title="Edit">
                                                <i class="ti ti-edit"></i>
                                            </button>

                                            <!-- Tombol Hapus -->
                                            <button class="btn btn-sm btn-outline-danger"
                                                data-bs-toggle="modal"
                                                data-bs-target="#deleteModal<?= $index ?>"
                                                title="Hapus">
                                                <i class="ti ti-trash"></i>
                                            </button>
                                        </div>

                                        <!-- Modal Detail untuk Setiap Transaksi -->
                                        <div class="modal fade" id="detailModal<?= $index ?>" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-primary text-white">
                                                        <h5 class="modal-title">Detail Transaksi</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row mb-3">
                                                            <div class="col-md-6">
                                                                <label>ID Transaksi:</label>
                                                                <p class="fw-bold"><?= $trx['id'] ?></p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label>Tanggal:</label>
                                                                <p class="fw-bold"><?= date('d/m/Y', strtotime($trx['date'])) ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <div class="col-md-6">
                                                                <label>Debit:</label>
                                                                <p class="text-success fw-bold"><?= formatRupiah($trx['debit']) ?></p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label>Kredit:</label>
                                                                <p class="text-danger fw-bold"><?= formatRupiah($trx['credit']) ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <div class="col-md-6">
                                                                <label>COA Debit:</label>
                                                                <p><?= $trx['coa_debit'] ?> - <?= getCoaName($trx['coa_debit']) ?></p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label>COA Kredit:</label>
                                                                <p><?= $trx['coa_credit'] ?> - <?= getCoaName($trx['coa_credit']) ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <label>Keterangan:</label>
                                                                <p><?= $trx['notes'] ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Modal Edit untuk Setiap Transaksi -->
                                        <div class="modal fade" id="editModal<?= $index ?>" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-warning text-dark">
                                                        <h5 class="modal-title">Edit Transaksi</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <form action="update_transaction.php" method="POST">
                                                        <div class="modal-body">
                                                            <input type="hidden" name="transaction_id" value="<?= $trx['id'] ?>">
                                                            <div class="row mb-3">
                                                                <div class="col-md-6">
                                                                    <label class="form-label">Tanggal Transaksi</label>
                                                                    <input type="date" class="form-control"
                                                                        name="transaction_date"
                                                                        value="<?= $trx['date'] ?>"
                                                                        required>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label class="form-label">Nominal</label>
                                                                    <input type="number" class="form-control"
                                                                        name="amount"
                                                                        value="<?= $trx['debit'] + $trx['credit'] ?>"
                                                                        required>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <div class="col-md-6">
                                                                    <label class="form-label">Kredit (COA)</label>
                                                                    <select class="form-select" name="credit_coa" required>
                                                                        <?php foreach (['101', '102', '103'] as $coa): ?>
                                                                            <option value="<?= $coa ?>" <?= $coa == $trx['coa_credit'] ? 'selected' : '' ?>>
                                                                                <?= $coa ?> - <?= getCoaName($coa) ?>
                                                                            </option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label class="form-label">Debit (COA)</label>
                                                                    <select class="form-select" name="debit_coa" required>
                                                                        <?php foreach (['501', '502', '503'] as $coa): ?>
                                                                            <option value="<?= $coa ?>" <?= $coa == $trx['coa_debit'] ? 'selected' : '' ?>>
                                                                                <?= $coa ?> - <?= getCoaName($coa) ?>
                                                                            </option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <div class="col-12">
                                                                    <label class="form-label">Keterangan</label>
                                                                    <textarea class="form-control"
                                                                        name="description"
                                                                        required><?= $trx['notes'] ?></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                            <button type="submit" class="btn btn-warning">Simpan Perubahan</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Modal Hapus untuk Setiap Transaksi -->
                                        <div class="modal fade" id="deleteModal<?= $index ?>" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-danger text-white">
                                                        <h5 class="modal-title">Konfirmasi Hapus</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <form action="delete_transaction.php" method="POST">
                                                        <div class="modal-body">
                                                            <input type="hidden" name="transaction_id" value="<?= $trx['id'] ?>">
                                                            <p>Apakah Anda yakin ingin menghapus transaksi ini?</p>
                                                            <p class="fw-bold"><?= $trx['notes'] ?></p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                            <button type="submit" class="btn btn-danger">Hapus Transaksi</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require 'footer.php'; ?>
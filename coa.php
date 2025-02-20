<?php
require_once 'header.php';
$coa = [
    'NERACA' => [
        [
            'kode_coa' => '100',
            'nama_coa' => 'Kas',
            'tipe_coa' => 'DEBET',
            'kelompok' => 'NERACA'
        ],
        [
            'kode_coa' => '100.01',
            'nama_coa' => 'Kas Kecil',
            'tipe_coa' => 'DEBET',
            'kelompok' => 'NERACA'
        ],
        [
            'kode_coa' => '100.02',
            'nama_coa' => 'Kas patty cash 1',
            'tipe_coa' => 'DEBET',
            'kelompok' => 'NERACA'
        ],
        [
            'kode_coa' => '100.03',
            'nama_coa' => 'Kas patty cash 2',
            'tipe_coa' => 'DEBET',
            'kelompok' => 'NERACA'
        ],
        [
            'kode_coa' => '110',
            'nama_coa' => 'Bank',
            'tipe_coa' => 'DEBET',
            'kelompok' => 'NERACA'
        ],
        [
            'kode_coa' => '110.01',
            'nama_coa' => 'Bank BNI Giro',
            'tipe_coa' => 'DEBET',
            'kelompok' => 'NERACA'
        ],
        [
            'kode_coa' => '110.02',
            'nama_coa' => 'Bank BRI Tabungan',
            'tipe_coa' => 'DEBET',
            'kelompok' => 'NERACA'
        ],
        [
            'kode_coa' => '120',
            'nama_coa' => 'Piutang',
            'tipe_coa' => 'DEBET',
            'kelompok' => 'NERACA'
        ],
        [
            'kode_coa' => '120.01',
            'nama_coa' => 'Piutang BPJS',
            'tipe_coa' => 'DEBET',
            'kelompok' => 'NERACA'
        ],
        [
            'kode_coa' => '120.02',
            'nama_coa' => 'Piutang pasien UMUM',
            'tipe_coa' => 'DEBET',
            'kelompok' => 'NERACA'
        ],
        [
            'kode_coa' => '121',
            'nama_coa' => 'Cadangan kerugian piutang',
            'tipe_coa' => 'DEBET',
            'kelompok' => 'NERACA'
        ],
        [
            'kode_coa' => '121.01',
            'nama_coa' => 'Piutang Karyawan',
            'tipe_coa' => 'DEBET',
            'kelompok' => 'NERACA'
        ],
        [
            'kode_coa' => '121.02',
            'nama_coa' => 'Piutang Lain-lain',
            'tipe_coa' => 'DEBET',
            'kelompok' => 'NERACA'
        ],
        [
            'kode_coa' => '122',
            'nama_coa' => 'Persediaan',
            'tipe_coa' => 'DEBET',
            'kelompok' => 'NERACA'
        ],
        [
            'kode_coa' => '122.01',
            'nama_coa' => 'Persediaan Obat',
            'tipe_coa' => 'DEBET',
            'kelompok' => 'NERACA'
        ],
        [
            'kode_coa' => '122.02',
            'nama_coa' => 'Persediaan Bahan Makan',
            'tipe_coa' => 'DEBET',
            'kelompok' => 'NERACA'
        ],
        [
            'kode_coa' => '125',
            'nama_coa' => 'Deposito',
            'tipe_coa' => 'DEBET',
            'kelompok' => 'NERACA'
        ],
        [
            'kode_coa' => '125.01',
            'nama_coa' => 'Deposito BCA',
            'tipe_coa' => 'DEBET',
            'kelompok' => 'NERACA'
        ],
        [
            'kode_coa' => '126',
            'nama_coa' => 'Biaya di bayar dimuka',
            'tipe_coa' => 'DEBET',
            'kelompok' => 'NERACA'
        ],
        [
            'kode_coa' => '126.01',
            'nama_coa' => 'Alat medik',
            'tipe_coa' => 'DEBET',
            'kelompok' => 'NERACA'
        ],
        [
            'kode_coa' => '126.02',
            'nama_coa' => 'Bangunan',
            'tipe_coa' => 'DEBET',
            'kelompok' => 'NERACA'
        ],
        [
            'kode_coa' => '127',
            'nama_coa' => 'Pajak',
            'tipe_coa' => 'DEBET',
            'kelompok' => 'NERACA'
        ],
        [
            'kode_coa' => '127.01',
            'nama_coa' => 'PDD PPn',
            'tipe_coa' => 'DEBET',
            'kelompok' => 'NERACA'
        ],
        [
            'kode_coa' => '127.02',
            'nama_coa' => 'PDD PPh 21',
            'tipe_coa' => 'DEBET',
            'kelompok' => 'NERACA'
        ],
        [
            'kode_coa' => '127.03',
            'nama_coa' => 'PDD PPh 25',
            'tipe_coa' => 'DEBET',
            'kelompok' => 'NERACA'
        ],
        [
            'kode_coa' => '128',
            'nama_coa' => 'Cadangan kerugian piutang',
            'tipe_coa' => 'DEBET',
            'kelompok' => 'NERACA'
        ],
        [
            'kode_coa' => '128.01',
            'nama_coa' => 'Cadangan kerugian piutang',
            'tipe_coa' => 'KREDIT',
            'kelompok' => 'NERACA'
        ],
        [
            'kode_coa' => '130',
            'nama_coa' => 'TANAH',
            'tipe_coa' => 'DEBET',
            'kelompok' => 'NERACA'
        ],
        [
            'kode_coa' => '130.01',
            'nama_coa' => 'Tanah & Bangunan',
            'tipe_coa' => 'DEBET',
            'kelompok' => 'NERACA'
        ],
        [
            'kode_coa' => '130.02',
            'nama_coa' => 'Akumulasi penyusutan bangunan',
            'tipe_coa' => 'KREDIT',
            'kelompok' => 'NERACA'
        ],
        [
            'kode_coa' => '131',
            'nama_coa' => 'KENDARAAN',
            'tipe_coa' => 'DEBET',
            'kelompok' => 'NERACA'
        ],
        [
            'kode_coa' => '131.01',
            'nama_coa' => 'Inventaris Kendaraan',
            'tipe_coa' => 'DEBET',
            'kelompok' => 'NERACA'
        ],
        [
            'kode_coa' => '131.02',
            'nama_coa' => 'Akumulasi penyusutan kendaraan',
            'tipe_coa' => 'KREDIT',
            'kelompok' => 'NERACA'
        ],
        [
            'kode_coa' => '132',
            'nama_coa' => 'Alat Medik',
            'tipe_coa' => 'DEBET',
            'kelompok' => 'NERACA'
        ],
        [
            'kode_coa' => '132.01',
            'nama_coa' => 'Inventaris Alat Medik',
            'tipe_coa' => 'DEBET',
            'kelompok' => 'NERACA'
        ],
        [
            'kode_coa' => '132.02',
            'nama_coa' => 'Akumulasi penyusutan alat medik',
            'tipe_coa' => 'KREDIT',
            'kelompok' => 'NERACA'
        ],
        [
            'kode_coa' => '133',
            'nama_coa' => 'Alat Kantor',
            'tipe_coa' => 'DEBET',
            'kelompok' => 'NERACA'
        ],
        [
            'kode_coa' => '133.01',
            'nama_coa' => 'Inventaris Alat Kantor',
            'tipe_coa' => 'DEBET',
            'kelompok' => 'NERACA'
        ],
        [
            'kode_coa' => '133.02',
            'nama_coa' => 'Akumulasi penyusutan alat kantor',
            'tipe_coa' => 'KREDIT',
            'kelompok' => 'NERACA'
        ],
        [
            'kode_coa' => '200',
            'nama_coa' => 'HUTANG USAHA',
            'tipe_coa' => 'KREDIT',
            'kelompok' => 'NERACA'
        ],
        [
            'kode_coa' => '200.01',
            'nama_coa' => 'Hutang obat',
            'tipe_coa' => 'KREDIT',
            'kelompok' => 'NERACA'
        ],
        [
            'kode_coa' => '200.02',
            'nama_coa' => 'Hutang BMHP',
            'tipe_coa' => 'KREDIT',
            'kelompok' => 'NERACA'
        ],
        [
            'kode_coa' => '200.03',
            'nama_coa' => 'Hutang Alat',
            'tipe_coa' => 'KREDIT',
            'kelompok' => 'NERACA'
        ],
        [
            'kode_coa' => '201',
            'nama_coa' => 'HUTANG PAJAK',
            'tipe_coa' => 'KREDIT',
            'kelompok' => 'NERACA'
        ],
        [
            'kode_coa' => '201.01',
            'nama_coa' => 'PPn',
            'tipe_coa' => 'KREDIT',
            'kelompok' => 'NERACA'
        ],
        [
            'kode_coa' => '201.02',
            'nama_coa' => 'PPh 21',
            'tipe_coa' => 'KREDIT',
            'kelompok' => 'NERACA'
        ],
        [
            'kode_coa' => '201.03',
            'nama_coa' => 'PPh 25',
            'tipe_coa' => 'KREDIT',
            'kelompok' => 'NERACA'
        ],
        [
            'kode_coa' => '202',
            'nama_coa' => 'Hutang Lain-lain',
            'tipe_coa' => 'KREDIT',
            'kelompok' => 'NERACA'
        ],
        [
            'kode_coa' => '202.01',
            'nama_coa' => 'Hutang Gaji',
            'tipe_coa' => 'KREDIT',
            'kelompok' => 'NERACA'
        ],
        [
            'kode_coa' => '202.02',
            'nama_coa' => 'Hutang Bonus',
            'tipe_coa' => 'KREDIT',
            'kelompok' => 'NERACA'
        ],
    ],
    'LABA_RUGI' => [
        [
            'kode_coa' => '300',
            'nama_coa' => 'PENDAPATAN UMUM',
            'tipe_coa' => 'KREDIT',
            'kelompok' => 'LABA RUGI'
        ],
        [
            'kode_coa' => '300',
            'nama_coa' => 'UMUM - RAJAL',
            'tipe_coa' => 'KREDIT',
            'kelompok' => 'LABA RUGI'
        ],
        [
            'kode_coa' => '300.01',
            'nama_coa' => 'UMUM - RAJAL JASA DOKTER',
            'tipe_coa' => 'KREDIT',
            'kelompok' => 'LABA RUGI'
        ],
        [
            'kode_coa' => '300.02',
            'nama_coa' => 'UMUM - RAJAL JASA PERAWAT',
            'tipe_coa' => 'KREDIT',
            'kelompok' => 'LABA RUGI'
        ],
        [
            'kode_coa' => '400',
            'nama_coa' => 'PENDAPATAN LAIN-LAIN',
            'tipe_coa' => 'KREDIT',
            'kelompok' => 'LABA RUGI'
        ],
        [
            'kode_coa' => '500',
            'nama_coa' => 'BIAYA UMUM',
            'tipe_coa' => 'DEBET',
            'kelompok' => 'LABA RUGI'
        ],
        [
            'kode_coa' => '500.01',
            'nama_coa' => 'Gaji Karyawan',
            'tipe_coa' => 'DEBET',
            'kelompok' => 'LABA RUGI'
        ],
        [
            'kode_coa' => '500.02',
            'nama_coa' => 'Biaya Listrik',
            'tipe_coa' => 'DEBET',
            'kelompok' => 'LABA RUGI'
        ],
        [
            'kode_coa' => '600',
            'nama_coa' => 'BIAYA PELAYANAN',
            'tipe_coa' => 'DEBET',
            'kelompok' => 'LABA RUGI'
        ],
        [
            'kode_coa' => '600.01',
            'nama_coa' => 'Jasa Dokter',
            'tipe_coa' => 'DEBET',
            'kelompok' => 'LABA RUGI'
        ],
        [
            'kode_coa' => '600.02',
            'nama_coa' => 'Jasa Medik',
            'tipe_coa' => 'DEBET',
            'kelompok' => 'LABA RUGI'
        ],
        [
            'kode_coa' => '680.01',
            'nama_coa' => 'Biaya Operasional Corporate',
            'tipe_coa' => 'KREDIT',
            'kelompok' => 'LABA RUGI'
        ],
        [
            'kode_coa' => '680.02',
            'nama_coa' => 'Biaya entertainment',
            'tipe_coa' => 'KREDIT',
            'kelompok' => 'LABA RUGI'
        ],
        [
            'kode_coa' => '680.03',
            'nama_coa' => 'Biaya promosi',
            'tipe_coa' => 'KREDIT',
            'kelompok' => 'LABA RUGI'
        ],
        [
            'kode_coa' => '680.04',
            'nama_coa' => 'Biaya iklan',
            'tipe_coa' => 'KREDIT',
            'kelompok' => 'LABA RUGI'
        ],
        [
            'kode_coa' => '680.05',
            'nama_coa' => 'Biaya perjalanan',
            'tipe_coa' => 'KREDIT',
            'kelompok' => 'LABA RUGI'
        ],
        [
            'kode_coa' => '680.06',
            'nama_coa' => 'Biaya pelatihan',
            'tipe_coa' => 'KREDIT',
            'kelompok' => 'LABA RUGI'
        ],
        [
            'kode_coa' => '680.07',
            'nama_coa' => 'Biaya pemeliharaan',
            'tipe_coa' => 'KREDIT',
            'kelompok' => 'LABA RUGI'
        ],
        [
            'kode_coa' => '680.08',
            'nama_coa' => 'Pembulatan',
            'tipe_coa' => 'KREDIT',
            'kelompok' => 'LABA RUGI'
        ],
        [
            'kode_coa' => '700',
            'nama_coa' => 'BIAYA ADMINISTRASI',
            'tipe_coa' => 'DEBET',
            'kelompok' => 'LABA RUGI'
        ],
        [
            'kode_coa' => '700.01',
            'nama_coa' => 'Gaji Admin',
            'tipe_coa' => 'DEBET',
            'kelompok' => 'LABA RUGI'
        ],
        [
            'kode_coa' => '700.02',
            'nama_coa' => 'Biaya Kantor',
            'tipe_coa' => 'DEBET',
            'kelompok' => 'LABA RUGI'
        ],
        [
            'kode_coa' => '700.03',
            'nama_coa' => 'Biaya Perlengkapan',
            'tipe_coa' => 'DEBET',
            'kelompok' => 'LABA RUGI'
        ],
        [
            'kode_coa' => '800',
            'nama_coa' => 'BIAYA PENDIDIKAN',
            'tipe_coa' => 'DEBET',
            'kelompok' => 'LABA RUGI'
        ],
        [
            'kode_coa' => '800.01',
            'nama_coa' => 'Biaya Pendidikan Karyawan',
            'tipe_coa' => 'DEBET',
            'kelompok' => 'LABA RUGI'
        ],
        [
            'kode_coa' => '800.02',
            'nama_coa' => 'Biaya Seminar',
            'tipe_coa' => 'DEBET',
            'kelompok' => 'LABA RUGI'
        ],
        [
            'kode_coa' => '900',
            'nama_coa' => 'BIAYA LAINNYA',
            'tipe_coa' => 'DEBET',
            'kelompok' => 'LABA RUGI'
        ],
        [
            'kode_coa' => '900.01',
            'nama_coa' => 'Biaya Lain-lain',
            'tipe_coa' => 'DEBET',
            'kelompok' => 'LABA RUGI'
        ],
        [
            'kode_coa' => '900.02',
            'nama_coa' => 'Biaya Tak Terduga',
            'tipe_coa' => 'DEBET',
            'kelompok' => 'LABA RUGI'
        ],
    ]
];
?>
<div class="body-wrapper">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header bg-dark text-white">
                <h3 class="card-title mb-0 text-white">
                    <i class="ti ti-list me-2"></i>MASTER DATA COA
                </h3>
            </div>
            <div class="card-body">
                <form action="process_coa.php" method="POST">
                    <div class="row g-3 mb-4">
                        <div class="col-md-3">
                            <label class="form-label">Kode COA</label>
                            <input type="text" name="kode_coa" class="form-control" required>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Nama COA</label>
                            <input type="text" name="nama_coa" class="form-control" required>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Tipe COA</label>
                            <select name="tipe_coa" class="form-select" required>
                                <option value="DEBET">Debet</option>
                                <option value="KREDIT">Kredit</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Kelompok</label>
                            <select name="kelompok" class="form-select" required>
                                <option value="NERACA">Neraca</option>
                                <option value="LABA_RUGI">Laba Rugi</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-dark">
                        <i class="ti ti-device-floppy me-2"></i>Simpan COA
                    </button>
                </form>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Daftar COA</h5>

                <!-- Search Form -->
                <div class="mb-4">
                    <form method="GET" class="row g-2">
                        <div class="col-md-8">
                            <input type="text" name="search" class="form-control"
                                placeholder="Cari berdasarkan Kode COA, Nama COA, atau Tipe COA..."
                                value="<?= htmlspecialchars($_GET['search'] ?? '') ?>">
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary w-100">
                                <i class="ti ti-search"></i> Cari
                            </button>
                        </div>
                        <div class="col-md-2">
                            <a href="?" class="btn btn-outline-secondary w-100">
                                <i class="ti ti-refresh"></i> Reset
                            </a>
                        </div>
                    </form>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped table-hover" style="width:100%">
                        <thead class="table-dark">
                            <tr>
                                <th>Kode COA</th>
                                <th>Nama COA</th>
                                <th>Tipe COA</th>
                                <th>Kelompok</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Konfigurasi Paginasi
                            $perPage = 10;
                            $currentPage = isset($_GET['page']) ? max(1, (int)$_GET['page']) : 1;
                            $searchTerm = trim($_GET['search'] ?? '');

                            // Fungsi Pencarian
                            function filterCOA($data, $search)
                            {
                                if (empty($search)) return $data;

                                return array_filter($data, function ($item) use ($search) {
                                    $search = strtolower($search);
                                    return str_contains(strtolower($item['kode_coa']), $search) ||
                                        str_contains(strtolower($item['nama_coa']), $search) ||
                                        str_contains(strtolower($item['tipe_coa']), $search);
                                });
                            }

                            // Proses Filter Data
                            $filteredNeraca = filterCOA($coa['NERACA'], $searchTerm);
                            $filteredLabaRugi = filterCOA($coa['LABA_RUGI'], $searchTerm);

                            // Gabung semua data untuk paginasi
                            $allData = [
                                'NERACA' => $filteredNeraca,
                                'LABA_RUGI' => $filteredLabaRugi
                            ];

                            // Hitung total item
                            $totalItems = count($filteredNeraca) + count($filteredLabaRugi);
                            $totalPages = ceil($totalItems / $perPage);

                            // Pagination Offset
                            $offset = ($currentPage - 1) * $perPage;

                            // Tampilkan data dengan grouping
                            $displayed = 0;
                            foreach ($allData as $group => $items):
                                if (empty($items)) continue;
                            ?>
                                <tr class="table-group-header">
                                    <td colspan="5" class="bg-light fw-bold">
                                        <i class="ti ti-category"></i> <?= $group ?>
                                    </td>
                                </tr>

                                <?php
                                foreach (array_slice($items, $offset, $perPage) as $data):
                                    $displayed++;
                                    $kode = (float)$data['kode_coa'];
                                    $is_header = ($kode == floor($kode));
                                ?>
                                    <tr class="<?= !$is_header ? 'sub-coa' : 'main-coa' ?>">
                                        <td>
                                            <a href="#" class="text-decoration-none">
                                                <?php if (!$is_header): ?>
                                                    <span class="sub-coa-indicator">↳ </span>
                                                <?php endif; ?>
                                                <?= $data['kode_coa'] ?>
                                            </a>
                                        </td>
                                        <td><?= $data['nama_coa'] ?></td>
                                        <td>
                                            <span class="badge bg-primary">
                                                <?= $data['tipe_coa'] ?>
                                            </span>
                                        </td>
                                        <td><?= $group ?></td>
                                        <td>
                                            <button class="btn btn-sm btn-warning">
                                                <i class="ti ti-pencil"></i>
                                            </button>
                                            <button class="btn btn-sm btn-danger">
                                                <i class="ti ti-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                            <?php
                                endforeach;
                                $offset = max(0, $offset - count($items));
                            endforeach;
                            ?>
                        </tbody>
                    </table>

                    <!-- Pagination -->
                    <?php if ($totalPages > 1): ?>
                        <nav class="mt-4">
                            <ul class="pagination justify-content-center">
                                <li class="page-item <?= $currentPage == 1 ? 'disabled' : '' ?>">
                                    <a class="page-link"
                                        href="?page=<?= $currentPage - 1 ?>&search=<?= urlencode($searchTerm) ?>">
                                        Previous
                                    </a>
                                </li>

                                <?php for ($page = 1; $page <= $totalPages; $page++): ?>
                                    <li class="page-item <?= $page == $currentPage ? 'active' : '' ?>">
                                        <a class="page-link"
                                            href="?page=<?= $page ?>&search=<?= urlencode($searchTerm) ?>">
                                            <?= $page ?>
                                        </a>
                                    </li>
                                <?php endfor; ?>

                                <li class="page-item <?= $currentPage == $totalPages ? 'disabled' : '' ?>">
                                    <a class="page-link"
                                        href="?page=<?= $currentPage + 1 ?>&search=<?= urlencode($searchTerm) ?>">
                                        Next
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <style>
            .table-group-header td {
                padding: 15px 20px;
                background-color: #f8f9fa !important;
                border-bottom: 2px solid #dee2e6;
            }

            .sub-coa td:first-child {
                padding-left: 35px !important;
                position: relative;
                color: #6c757d;
            }

            .sub-coa-indicator {
                position: absolute;
                left: 15px;
                color: #4a5568;
            }

            .main-coa td {
                font-weight: 600;
                background-color: #f8f9fa;
            }

            .sub-coa td:first-child::before {
                content: "";
                position: absolute;
                left: 25px;
                top: -50%;
                height: 200%;
                width: 1px;
                background-color: #e2e8f0;
            }

            .table-hover tbody tr:hover {
                background-color: rgba(0, 0, 0, 0.05);
            }
        </style>
    </div>
</div>
</div>
<?php require 'footer.php'; ?>
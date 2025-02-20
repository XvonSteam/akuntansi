<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Folder Contents</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .file-list {
            list-style-type: none;
            padding: 0;
        }
        .file-item {
            padding: 10px;
            border: 1px solid #ddd;
            margin-bottom: 5px;
            background: #fff;
            border-radius: 5px;
            display: flex;
            align-items: center;
        }
        .icon {
            margin-right: 10px;
            color: #007bff;
        }
    </style>
</head>
<body>

<h1><i class="fas fa-folder-open icon"></i> Isi Folder</h1>

<ul class="file-list">
    <?php
    // Tentukan folder yang ingin dibaca
    $directory = './'; // Ganti dengan path folder yang diinginkan

    // Memeriksa apakah folder ada
    if (is_dir($directory)) {
        // Membuka folder
        if ($handle = opendir($directory)) {
            // Membaca isi folder
            while (false !== ($entry = readdir($handle))) {
                // Mengabaikan '.' dan '..'
                if ($entry != "." && $entry != "..") {
                    // Menentukan ikon berdasarkan jenis file
                    $icon = 'fas fa-file'; // Default icon
                    if (is_dir($directory . $entry)) {
                        $icon = 'fas fa-folder'; // Ikon untuk folder
                    } elseif (pathinfo($entry, PATHINFO_EXTENSION) == 'txt') {
                        $icon = 'fas fa-file-alt'; // Ikon untuk file teks
                    } elseif (pathinfo($entry, PATHINFO_EXTENSION) == 'jpg' || pathinfo($entry, PATHINFO_EXTENSION) == 'png') {
                        $icon = 'fas fa-image'; // Ikon untuk gambar
                    }

                    // Menampilkan item file/folder
                    echo "<li class='file-item'><i class='$icon'></i> $entry</li>";
                }
            }
            closedir($handle);
        }
    } else {
        echo "<p><i class='fas fa-exclamation-triangle icon'></i> Folder tidak ditemukan.</p>";
    }
    ?>
</ul>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clickable PHP Files</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f4f4f4;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        a {
            text-decoration: none;
            color: #007bff;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<h1>Daftar File PHP</h1>

<table>
    <thead>
        <tr>
            <th>Nama File</th>
            <th>Ukuran (KB)</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $directory = './'; // Ganti dengan path folder yang diinginkan

        if (is_dir($directory)) {
            if ($handle = opendir($directory)) {
                while (false !== ($entry = readdir($handle))) {
                    if ($entry != "." && $entry != ".." && pathinfo($entry, PATHINFO_EXTENSION) == 'php') {
                        $fileSize = filesize($directory . $entry) / 1024; // Ukuran dalam KB
                        echo "<tr>
                                <td><a href='$entry'>$entry</a></td>
                                <td>" . round($fileSize, 2) . " KB</td>
                              </tr>";
                    }
                }
                closedir($handle);
            }
        } else {
            echo "<tr><td colspan='2'>Folder tidak ditemukan.</td></tr>";
        }
        ?>
    </tbody>
</table>

</body>
</html>

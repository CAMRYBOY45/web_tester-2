<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Download</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            text-align: center;
        }
        a {
            display: block;
            margin: 10px 0;
            color: blue;
            text-decoration: none;
        }
        a:hover {
            color: darkblue;
        }
    </style>
</head>
<body>
    <h1>File Tersedia untuk Diunduh</h1>
    <div class="file-container">
        <?php
        $dir = "uploads/";
        if (is_dir($dir)) {
            $files = array_diff(scandir($dir), array('.', '..')); // Ambil file selain "." dan ".."
            if (count($files) > 0) {
                foreach ($files as $file) {
                    echo "<a href='$dir$file' download>$file</a>";
                }
            } else {
                echo "<p>Tidak ada file yang tersedia.</p>";
            }
        } else {
            echo "<p>Folder uploads tidak ditemukan.</p>";
        }
        ?>
    </div>
</body>
</html>

<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'absenkaryawan');

$bulan = $_POST['bulan'];
$tahun = $_POST['tahun'];

$karyawan = mysqli_query($koneksi, "SELECT * FROM tb_absen WHERE DATE_FORMAT(tanggal, '%m') = '$bulan' AND DATE_FORMAT(tanggal, '%Y') = '$tahun'");; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title style="font-size:16">Laporan Absensi Apel</title>

    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        table,
        th,
        td {
            border: 1px solid black;
            padding: 8px 8px;

        }

        th,
        td {
            padding: 10px;
        }

        th {
            background-color: rgb(19, 110, 170);
            color: white;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pegawai</th>
                <th>Tanggal</th>
                <th>Jam</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($karyawan) : ?>
                <?php $no = 1; ?>
                <?php foreach ($karyawan as $row) : ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['tanggal']; ?></td>
                        <td><?php echo $row['jam']; ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>

    <script>
        window.print();
    </script>

</body>

</html>
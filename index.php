<?php
include "func.php";

$dataList = query("SELECT * FROM tbpraktikum");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Home Page</title>
</head>

<body>
    <div class="table-container">
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Jurusan</th>
                <th>Kelas</th>
                <th>Hari</th>
                <th>Waktu</th>
                <th>Materi</th>
                <th>Instruktur</th>
                <th>Lokasi</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php foreach ($dataList as $data) : ?>
                <tr>
                    <td><?= $data["id"] ?></td>
                    <td><?= $data["jurusan"] ?></td>
                    <td><?= $data["kelas"] ?></td>
                    <td><?= $data["hari"] ?></td>
                    <td><?= $data["waktu"] ?></td>
                    <td><?= $data["materi"] ?></td>
                    <td><?= $data["instruktur"] ?></td>
                    <td><?= $data["lokasi"] ?></td>
                    <td><a href="edit.php?id=<?= $data["id"] ?>&jurusan=<?= $data["jurusan"] ?>&kelas=<?= $data["kelas"] ?>&hari=<?= $data["hari"] ?>&waktu=<?= $data["waktu"] ?>&materi=<?= $data["materi"] ?>&instruktur=<?= $data["instruktur"] ?>&lokasi=<?= $data["lokasi"] ?>">Edit</a></td>
                    <td><a href="delete.php?id=<?= $data["id"] ?>">Delete</a></td>
                </tr>
            <?php endforeach ?>
        </table>

        <a href="insert.php"><button>Add new data</button></a>
    </div>
</body>

</html>
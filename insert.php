<?php
include "func.php";

if (isset($_POST["submit"])) {
    $insertStatus = insert($_POST);

    if ($insertStatus >= 1) {
        header("location: index.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>

<body>
    <div class="form-container">
        <form action="" method="post" class="form-background">
            <ul>
                <li>
                    <label for="jurusan">Jurusan</label>
                    <span id="radio-section">
                        <span>
                            <input id="tkj" name="jurusan" value="TKJ" type="radio" required>
                            <label for="tkj">TKJ</label>
                        </span>
                        <span>
                            <input id="akl" name="jurusan" value="AKL" type="radio" required>
                            <label for="akl">AKL</label>
                        </span>
                        <span>
                            <input id="pm" name="jurusan" value="PM" type="radio" required>
                            <label for="pm">PM</label>
                        </span>
                    </span>
                </li>

                <li>
                    <label for="kelas">Kelas:</label>
                    <input type="text" name="kelas" id="kelas" required>
                </li>

                <li>
                    <label for="hari">Hari:</label>
                    <input type="text" name="hari" id="hari" required>
                </li>

                <li>
                    <label for="waktu">Waktu:</label>
                    <input type="text" name="waktu" id="waktu" required>
                </li>

                <li>
                    <label for="materi">Materi:</label>
                    <input type="text" name="materi" id="materi" required>
                </li>

                <li>
                    <label for="instruktur">Instruktur:</label>
                    <input type="text" name="instruktur" id="instruktur" required>
                </li>

                <li>
                    <label for="lokasi">Lokasi:</label>
                    <input type="text" name="lokasi" id="lokasi" required>
                </li>

                <li>
                    <button name="submit" type="submit" class="add">Tambah Data</button>
                </li>
            </ul>
        </form>
    </div>
</body>

</html>
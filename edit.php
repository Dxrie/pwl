<?php
include "func.php";

if (isset($_POST["edit"])) {
    $_POST["id"] = $_GET["id"];

    $editStatus = edit($_POST);

    if ($editStatus >= 1) {
        header("location: index.php");
    } else {
        var_dump($editStatus);
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
                            <?= $_GET["jurusan"] === "TKJ" ? "<input id=\"tkj\" name=\"jurusan\" value=\"TKJ\" type=\"radio\" required checked>" : "<input id=\"tkj\" name=\"jurusan\" value=\"TKJ\" type=\"radio\" required>" ?>
                            <label for="tkj">TKJ</label>
                        </span>
                        <span>
                            <?= $_GET["jurusan"] === "AKL" ? "<input id=\"akl\" name=\"jurusan\" value=\"AKL\" type=\"radio\" required checked>" : "<input id=\"akl\" name=\"jurusan\" value=\"AKL\" type=\"radio\" required>" ?>
                            <label for="akl">AKL</label>
                        </span>
                        <span>
                            <?= $_GET["jurusan"] == "PM" ? "<input id=\"pm\" name=\"jurusan\" value=\"PM\" type=\"radio\" required checked>" : "<input id=\"pm\" name=\"jurusan\" value=\"PM\" type=\"radio\" required>" ?>
                            <label for="pm">PM</label>
                        </span>
                    </span>
                </li>

                <li>
                    <label for="kelas">Kelas:</label>
                    <input type="text" name="kelas" id="kelas" value="<?= $_GET["kelas"] ?>" required>
                </li>

                <li>
                    <label for="hari">Hari:</label>
                    <input type="text" name="hari" id="hari" value="<?= $_GET["hari"] ?>" required>
                </li>

                <li>
                    <label for="waktu">Waktu:</label>
                    <input type="text" name="waktu" id="waktu" value="<?= $_GET["waktu"] ?>" required>
                </li>

                <li>
                    <label for="materi">Materi:</label>
                    <input type="text" name="materi" id="materi" value="<?= $_GET["materi"] ?>" required>
                </li>

                <li>
                    <label for="instruktur">Instruktur:</label>
                    <input type="text" name="instruktur" id="instruktur" value="<?= $_GET["instruktur"] ?>" required>
                </li>

                <li>
                    <label for="lokasi">Lokasi:</label>
                    <input type="text" name="lokasi" id="lokasi" value="<?= $_GET["lokasi"] ?>" required>
                </li>

                <li>
                    <button name="edit" type="submit" class="add">Edit Data</button>
                </li>
            </ul>
        </form>
    </div>
</body>

</html>
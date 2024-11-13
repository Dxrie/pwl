<?php
$conn = mysqli_connect("localhost", "root", "", "dbujian");

function query($queryString)
{
    global $conn;

    $result = mysqli_query($conn, $queryString);

    $rows = [];

    while ($data = mysqli_fetch_assoc($result)) {
        $rows[] = $data;
    }

    return $rows;
}

function insert($data)
{
    global $conn;

    $jurusan = $data["jurusan"];
    $kelas = $data["kelas"];
    $hari = $data["hari"];
    $waktu = $data["waktu"];
    $materi = $data["materi"];
    $instruktur = $data["instruktur"];
    $lokasi = $data["lokasi"];

    $query = "INSERT INTO tbpraktikum (id, jurusan, kelas, hari, waktu, materi, instruktur, lokasi) VALUES (NULL, '$jurusan', '$kelas', '$hari', '$waktu', '$materi', '$instruktur', '$lokasi')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function delete($id)
{
    global $conn;

    $query = "DELETE FROM tbpraktikum WHERE id=$id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function edit($data)
{
    global $conn;

    $id = $data["id"];
    $jurusan = $data["jurusan"];
    $kelas = $data["kelas"];
    $hari = $data["hari"];
    $waktu = $data["waktu"];
    $materi = $data["materi"];
    $instruktur = $data["instruktur"];
    $lokasi = $data["lokasi"];

    $query = "UPDATE tbpraktikum SET jurusan='$jurusan', kelas='$kelas', hari='$hari', waktu='$waktu', materi='$materi', instruktur='$instruktur', lokasi='$lokasi' WHERE id=$id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

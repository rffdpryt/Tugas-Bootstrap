<?php

include_once('connect.php');

$sql = "SELECT * FROM scores, students WHERE scores.student_id = students.id";
$result = $conn->query($sql);
$data = $result->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg text-white bg-primary mb-4">
    <div class="container border">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <h1 class="h1 mr-1">Data XI RPL</h1>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Course</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Course</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="d-flex">
            <div class="col-md-4">
                <h2>Input Data</h2>
                <form class="boorder p-4">
                    <div class="form-group">
                        <label for="nama">Nama :</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukan Nama">
                    </div>
                    <div class="form-group">
                        <label for="umur">Umur :</label>
                        <input type="number" class="form-control" id="umur" placeholder="Masukan Umur">
                    </div>
                    <label for="Kelamin">Jenis Kelamin</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Laki - Laki
                        </label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Perempuan
                        </label>
                    </div>
                    <button type="submit" class="btn btn-warning">Kirim</button>
                </form>
            </div>
            <div class="col-md-8">
                <h2>Tabel Data</h2>
                <table class="table text-center table-hover">
                    <thead class="bg-warning text-white">
                        <tr>
                            <th class="border">No</th>
                            <th class="border">Nama</th>
                            <th class="border">Nilai</th>
                        </tr>
                    </thead>
                    <tbody class="border bg-secondary text-white">
                        <?php foreach($data as $key => $d): ?>
                          <tr>
                            <td><?= $key + 1 ?></td>
                            <td><?= $d['name'] ?></td>
                            <td><?= $d['score'] ?></td>
                          </tr>
                          <?php endforeach ?>
                    </tbody>
                    <tfoot class="bg-danger text-white">
                        <tr>
                            <th class="border">No</th>
                            <th class="border">Nama</th>
                            <th class="border">Nilai</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

    <footer class="text-center p-3 bg-primary">
        <p class="mb-0 text-white">ini ceritanya hak cipta</p>
    </footer>
</body>
</html>
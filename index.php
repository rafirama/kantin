<?php
include 'controller.php';
$jumlah = new jumlah();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>iKANTIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">


</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container">
            <a class="navbar-brand" href="index.php" class="fs-1"><i class="fa fa-shopping-cart"></i> iKantin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php"><i class="fa fa-home">
                            </i>Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-shopping-cart"></i> Beli</a>
                    </li>

                </ul>
            </div>

        </div>
    </nav>

    <div class="container">
        <div class="jumbotron mt-5 py-4 px-5 bg-primary ">
            <h1 class="display-7 text-white"> <i class="fa fa-shopping-cart"></i> Selamat Berbelanja
            </h1>
        </div>

        <div class="card">

            <div class="card-body">


                <img src="img/1.jpg" alt="" width="200" class="img-thumbnail rounded-circle" class="ms-5">
                <img src="img/2.jpeg" alt="" width="200" class="img-thumbnail rounded-circle">
                <img src="img/3.jpeg" alt="" width="200" class="img-thumbnail rounded-circle">
                <img src="img/4.jpeg" alt="" width="200" class="img-thumbnail rounded-circle">
                <!-- Button trigger modal -->
                <h3>Spesial Menu, Beli Sekarang !</h3>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="fa fa-shopping-cart"></i> Beli
                </button>

                <?php
                if (isset($_POST['check'])) {
                    $jmlSatu = $_POST['satu'];
                    $jmlDua = $_POST['dua'];
                    $jmlTiga = $_POST['tiga'];
                    $jmlEmpat = $_POST['empat'];

                    $jumlah = new jumlah();

                    if ($jmlSatu == null) {
                        $jumlah->getJumlah(0, $jmlSatu, $jmlTiga, $jmlEmpat);
                    } elseif ($jmlDua == null) {
                        $jumlah->getJumlah($jmlSatu, 0, $jmlTiga, $jml);
                    } elseif ($jmlTiga == null) {
                        $jumlah->getJumlah($jmlSatu, $jmlDua, 0, $jmlEmpat);
                    } elseif ($jmlEmpat == null) {
                        $jumlah->getJumlah($jmlSatu, $jmlDua, $jmlTiga, 0);
                    } else {
                        $jumlah->getJumlah($jmlSatu, $jmlDua, $jmlTiga, $jmlEmpat);
                    }

                    $jumlah->setHarga();
                    $jumlah->cetakStruk();
                }

                ?>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div>
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Form Pembelian</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" id="form">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Masukkan Jumlah Teh yang Dibeli</label>
                            <input type="number" class="form-control" name="satu" id="satu" value="0">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Masukkan Jumlah Jus yang Dibeli</label>
                            <input type="number" class="form-control" name="dua" id="dua" value="0">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Masukkan Jumlah Kopi yang Dibeli</label>
                            <input type="number" class="form-control" name="tiga" id="tiga" value="0">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Masukkan Jumlah Susu yang Dibeli</label>
                            <input type="number" class="form-control" name="empat" id="empat" value="0">
                        </div>

                        <div class="modal-footer">
                            <div class="">
                                <button type="submit" onclick="exit()" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                                <button type="submit" class="btn btn-primary" name="check"><i class="fa fa-check"></i>
                                    Cek Total</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

</body>

</html>

<script type="text/javascript">
    function Onlysatu() {
        document.getElementById("satu").readOnly = false;
        document.getElementById("dua").readOnly = true;
        document.getElementById("tiga").readOnly = true;
        document.getElementById("empat").readOnly = true;
        document.getElementById("btnsatu").disabled = true;
        document.getElementById("btndua").disabled = false;
        document.getElementById("btntiga").disabled = false;
        document.getElementById("btnempat").disabled = false;

    }

    function Onlydua() {
        document.getElementById("satu").readOnly = true;
        document.getElementById("dua").readOnly = false;
        document.getElementById("tiga").readOnly = true;
        document.getElementById("empat").readOnly = true;
        document.getElementById("btnsatu").disabled = false;
        document.getElementById("btndua").disabled = true;
        document.getElementById("btntiga").disabled = false;
        document.getElementById("btnempat").disabled = false;
    }

    function Onlytiga() {
        document.getElementById("satu").readOnly = true;
        document.getElementById("dua").readOnly = true;
        document.getElementById("tiga").readOnly = false;
        document.getElementById("empat").readOnly = true;
        document.getElementById("btnsatu").disabled = false;
        document.getElementById("btndua").disabled = false;
        document.getElementById("btntiga").disabled = true;
        document.getElementById("btnempat").disabled = false;

    }

    function Onlyempat() {
        document.getElementById("satu").readOnly = true;
        document.getElementById("dua").readOnly = true;
        document.getElementById("tiga").readOnly = true;
        document.getElementById("empat").readOnly = false;
        document.getElementById("btnsatu").disabled = false;
        document.getElementById("btndua").disabled = false;
        document.getElementById("btntiga").disabled = false;
        document.getElementById("btnempat").disabled = true;
    }

    function Semua() {
        document.getElementById("dua").readOnly = false;
        document.getElementById("satu").readOnly = false;
        document.getElementById("btnsatu").disabled = false;
        document.getElementById("btndua").disabled = false;
        document.getElementById("tiga").readOnly = false;
        document.getElementById("empat").readOnly = false;
        document.getElementById("btntiga").disabled = false;
        document.getElementById("btnempat").disabled = false;
    }

    function exit() {
        document.getElementById("dua").readOnly = true;
        document.getElementById("satu").readOnly = true;
        document.getElementById("tiga").readOnly = true;
        document.getElementById("empat").readOnly = true;
    }
</script>
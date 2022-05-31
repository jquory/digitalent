<?php 

    $nama = $_POST['nama'];

    if($nama == "") {
        header('location:login.php?nama='.$nama);
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>National Library</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" href="assets/logo.png">
    
</head>
<body>
    <div class="container">
    <nav class="pt-3">
        <div class="logo">
            <img src="assets/logo.png" alt="">
            <a href="index.php"><h3>National Library</h3></a>
        </div>
        <div class="navigation">
            <li><a href="index.php">Home</a></li>
            <div class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    Transaksi
                </a>

                <ul class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Transaksi Pinjaman</a></li>
                    <li><a class="dropdown-item" href="#">Transaksi Buku</a></li>
                </ul>
            </div>
            <li><a href="anggota.php">Anggota</a></li>
            <div class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    Laporan
                </a>

                <ul class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Laporan Anggota</a></li>
                    <li><a class="dropdown-item" href="#">Laporan Buku</a></li>
                </ul>
            </div>
        </div>
        <div class="users">
            <a href="login.php">LOGIN</a>
            <h5>Hai <?php echo $nama ?>, Apa kabar?</h5>
        </div>
    </nav>

    <main class="mt-4">
        <div class="words">
            <h2>Welcome to,</h2>
            <h1>National Library</h1>
            <button class="mt-4">Discover More</button>
        </div>
        <div class="image">
            <img src="assets/bg-1.webp" alt="">
        </div>
    </main>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Anggota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style/anggota.css">
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
            <h5>Hai, Apa kabar?</h5>
        </div>
    </nav>

    <main class="pt-5">
        <form action="" method="POST">
            <h1>Input Data Anggota</h1>
            <hr>
            <label>ID Anggota</label>
            <input type="text" name="idanggota" placeholder="Masukkan ID Anggota">
            <label>Nama</label>
            <input type="text" name="nama" placeholder="Masukkan Nama">
            <label>Jenis Kelamin</label>
            <div class="radio">
            <input type="radio" name="gender" value="laki-laki">
            <label>Laki - Laki</label>
            <input type="radio" name="gender" value="perempuan">
            <label>Perempuan</label>
            </div>
            <label>Alamat</label>
            <textarea name="alamat" id="" cols="50" rows="4" placeholder="Masukkan alamat sesuai KTP"></textarea>
            <button type="submit">Simpan</button>
        </form>
    </main>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    
</body>
</html>


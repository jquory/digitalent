<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/login.css">
    <title>LOGIN</title>
</head>
<body>
<nav class="pt-3">
        <div class="logo">
            <img src="assets/logo.png" alt="">
            <a href="index.php"><h3>National Library</h3></a>
        </div>
        <div class="navigation">
            <li><a href="index.php">Home</a></li>
        </div>
    </nav>
    <main>
        <form action="index.php" method="POST">
            <h1>LOGIN</h1>
            <hr>
            <label>Nama</label>
            <input type="text" name="nama" placeholder="Masukkan Nama" required>
            <label>Email</label>
            <input type="email" name="email" placeholder="Masukkan Email" required>
            <label>Password</label>
            <input type="password" placeholder="Masukkan Password" required>
            <button type="submit">Simpan</button>
        </form>
    </main>
</body>
</html>
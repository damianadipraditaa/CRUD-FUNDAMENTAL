<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <!-- form  -->
  <form action="prosesinput.php" method="post">
    <input type="text" name="nama" placeholder="Masukkan Nama Anda" required>
    <input type="text" name="kelas" placeholder="Masukkan Kelas Anda" required>
    <input type="text" name="nisn" placeholder="Masukkan Nisn Anda" required>
    <input type="text" name="jurusan" placeholder="Masukkan Jurusan Anda" required>
    <input type="text" name="alamat" placeholder="Masukkan Alamat Anda" required>
    <input type="submit" value="Kirim Data">
    <input type="reset" value="Reset">
    <input type="button" value="Lihat Data" onclick="window.location.href='pageview.php'">
  </form>
</body>

</html>
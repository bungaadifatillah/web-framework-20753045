<!DOCTYPE html>
<html>
<head>
    <title><?= $title; ?></title>
</head>
<body>
  <div class="container p-3">
    <div class="text-center">
      <h1>BIODATA MAHASISWA</h1>
    </div>
      <form action="vw_biodata.php" method="post">
        <table>
      <tr>
        <td>NPM</td>
        <td><input type="text" name="npm" placeholder="Masukkan NPM...."></td>
      </tr>
      <tr>
        <td>Nama</td>
        <td><input type="text" name="nama" placeholder="Masukkan Nama..."></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><input type="text" name="email" placeholder="Masukkan Email..."></td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td>
          <input type="checkbox" id="laki" name="jeniskelamin" value="Laki-laki"> Laki-laki
          <input type="checkbox" id="perempuan" name="jeniskelamin" value="Perempuan"> Perempuan
        </td>
      </tr>
      <tr>
        <td>Agama</td>
        <td><select id="agama" name="agama">
          <option value="Islam">Islam</option>
          <option value="Kristen">Kristen</option>
          <option value="Hindu">Hindu</option>
          <option value="Buddha">Buddha</option>
          <option value="Konghucu">Konghucu</option>
          <option value="Katolik">Katolik</option>
        </select></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td><textarea name="alamat" placeholder="Masukkan Email..."></textarea></td>
      </tr>
    </table>
      <input type="submit" name="submit" value="Simpan">
      <input type="reset" name="reset" value="Batal">
    </form>
  </div>
</body>
</html>
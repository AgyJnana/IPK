<!DOCTYPE html>
<html lang="en">

<head>
    <title>IPK Mahasiswa</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="container p-5 my-5 bg-dark text-white">
            <h2>Selamat datang</h2>
        </div>
        <div class="container p-5 my-5 border border-dark">
            <h2>Input Mahasiswa</h2>
            <form action="prosesIPK.php" method = "POST">
                <div class="mb-3 mt-3">
                    <label for="nim">nim :</label>
                    <input type="text" class="form-control" placeholder="Input NIM" name="nim" required>
                </div>
                <div class="mb-3 mt-3">
                    <label for="nama">Nama :</label>
                    <input type="text" class="form-control" placeholder="Input Nama" name="nama" required>
                </div>
                <div class="mb-3 mt-3">
                    <label for="nama">Jurusan :</label>
                    <select name="jurusan" class="form-select">
                        <option value="J01">Sistem Komputer</option>
                        <option value="J02">Sistem Informasi</option>
                        <option value="J03">Teknologi Informasi</option>
                    </select>
                    </div>
                <div class="mb-3 mt-3">
                    <label for="IPK">IPK :</label>
                    <input type="text" class="form-control" placeholder="Input IPK" name="IPK" required>
                </div>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
</div>
<br>
    <h2>Data Mahasiswa</h2>
    <table class="tabel">

        <tr>
            <th>NIM</th>
            <th>Nama Mhs</th>
            <th>Jurusan</th>
            <th>IPK</th>
        </tr>
        <?php 
            include "koneksi.php";
            $qry = "SELECT * FROM IPK_mahasiswa";
            $exec = mysqli_query($con, $qry);

            while($data = mysqli_fetch_assoc($exec)){
        ?>
        <tr>
            <td><?= $data['nim'] ?></td>
            <td><?= $data['nama_mhs'] ?></td>
            <td><?= $data['kode_jurusan'] ?></td>
            <td><?= $data['IPK'] ?></td>
            <td>
               <a href="editIPK.php?nim=<?= $data['nim'] ?>"><button>Edit</button></a>
               <a href="deleteIPK.php?nim=<?= $data['nim'] ?>"><button>Delete</button></a>
            </td>
        </tr>
        <?php } ?>
    </table>
        </div>
    </div>
</body>

</html>
 <?php
 include APPPATH . 'views/fragment/header.php';
 include APPPATH . 'views/fragment/menu.php';
 ?>
        <main>
        <h2> Daftar Karyawan <?h2>
        <h3><a href="<?= base_url() ?>karyawan/tambah")>Tambah</a></h3>
            <table class = "table table-bordered">
                <tr>
                    <th>Nama</th>
                    <th>Tanggal lahir</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Jabatan</th>
                    <th>Jenis Kelamin</th>
                    <th>Divisi</th>
                    <th>Aksi</th>
              </tr>
                    <?php
                    foreach ($records as $idx => $data) { //variabel $reocords diambil dari controller karyawan 
                    ?>
                <tr>
                    <td><?= $data['nama'] ?></td>
                    <td><?= $data['tgllahir'] ?></td>
                    <td><?= $data['email'] ?></td>
                    <td><?= $data['telpon'] ?></td>
                    <td><?= $data['jabatan'] ?></td>
                    <td><?= $data['jeniskelamin'] ?></td>
                    <td><?= $data['namadivisi'] ?></td> <!--alias dari namadiv di karyawan_model -->
                    <td><a href= "<?= base_url("karyawan/detail/{$data['karyawan']}") ?>">Detail</a>
                        <a href= "<?= base_url("karyawan/edit/{$data['karyawan']}") ?>">Edit</a>
                        <a onclick="return confirm('Akan Menghapus Data ?)"
                           href="<?= base_url("karyawan/hapus/{$data['karyawan']}") ?>">Hapus</a>
                     </td>
                     </tr>
                     <?php
    }
    ?>
    </table>
</main>
<?php
include APPPATH . 'views/fragment/footer.php';
?>

<html>
<body>
    <header>
        <h1> Daftar Divisi </h1>
        </header>
        <nav>
            <?php include APPPATH . 'views/fragment/menu.php' ?>
        </nav>
        <main>
            <a href="<?= base_url("divisi/tambah") ?>"> <b>Tambah</a>
            <table class="table table-bordered">
                <tr>
                    <th>Kode Divisi</th>
                    <th>Nama Divisi</th>
                    <th>Aksi</th>
                    </th>
                    <?php
                    foreach ($records as $idx => $data) { //variabel $reocords diambil dari controller Divisi 
                    ?>
                <tr>
                    <td><?= $data['kodediv'] ?></td>
                    <td><?= $data['namadiv'] ?></td>
                    <td><a href="<?= base_url("divisi/detail/{$data['divisiid']}") ?>">Detail</a>
                    <td><a href="<?= base_url("divisi/edit/{$data['divisiid']}") ?>">Edit</a>
                    <td><a onclick="return confirm('Akan menghapus data?')"
                     href="<? base_url("divisi/hapus/{$data['divisiid']}") ?>" Hapus</a> </td> 
                </tr> 
                    <?php
                }
                ?>
            </table>
            <?php
            if(isset($links)){ ?>
                 <?php echo $links ?>
            <?php
            } ?>
        </main>
        <?php
        include APPPATH . 'views/fragment/footer.php';
        ?>
</html>
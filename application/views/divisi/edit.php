<html>
<body>
<?php include APPPATH . 'views/fragment/header.php';
    <header>
        <h1> Edit Divisi </h1>
        </header>
        <nav><?php include APPPATH . 'views/fragment/menu.php'; ?> </nav>
        <main>
            <h3> </h3>
            <form action="<?= base_url("divisi/edit_save") ?>" //memanggil fungsi edit_save
                name="formedit"
                method="post"
                id="formedit">
                <input type=""
                <div>
                    <label for="kode"> Kode Divisi : </label>
                    <input type = "text" name = "kode" id="kode"
                    size="3" required="required">
                </div>
                <div>
                    <label for="nama"> Nama Divisi : </label>
                    <input type = "text" name = "nama" id="nama"
                    size="30" required= "required">
                </div>
                <div>
                     <input type = "submit" value = "simpan" id="submit" name="submit">
                </div>
              </form>
              </main>
              <?php include APPPATH . 'views/fragment/footer.php'; ?>
            </body> 
</html>
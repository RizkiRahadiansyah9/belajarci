<!DOCTYPE html>
<html>
<head>
          <title>Form Validation</title>
</head>
<body>
           <h1>Form Validation</h1>
           <?php echo Validation_errors(); ?>
           <?php echo form_open('form/aksi'); ?>
                 <label>Nama</label><br/> 
                 <input type="text" name="nama"><br/>
                 <label>Email</label><br/>
                 <input type="text" name="email"><br/>
                 <label>NIM</label><br/>
                 <input type="text" name="nim"><br/>
                 <label>Password</label><br/>
                 <input type="text" name="password"><br/>
                 <input type="submit" value="Simpan"> 
     </form>
</body>
</html>        
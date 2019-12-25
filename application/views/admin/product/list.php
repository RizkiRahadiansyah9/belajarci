<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
      <h1>Contoh Akses Database dengan Code Igniter</h1>

      <table border="1">
      <tr>
            <th>Nama Produk</th>  
            <th>Harga</th>  
            <th>Gambar</th>
            <th>Deskripsi</th>
      </tr>

      <?php foreach($products as $p){ ?>
      <!--
          products adalah variabel yang diparsing dari controller, berisi data produk  
          dalam bentuk array
          --->              
      <tr>
          <td><?php echo $p->name ?></td>
          <td><?php echo $p->price ?></td>
          <td><?php echo $p->image ?></td>
          <td><?php echo $p->description ?></td>
      </tr>
      <?php } ?>
      </table>
</body>
</html>
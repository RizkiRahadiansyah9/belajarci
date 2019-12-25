<html>
<head>
      <title>Menghubungkan codeigneter dengan database mysql</title>
</head>
<body>
      <h1>Mengenal Model Pada Codeigneter</h1>
      <table border="1">
          <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Pekerjaan</th>
          </tr>
          <?php foreach($user as $u){ ?>
          <!--
                user adalah variabel yang dipasring dari controller, berisi data user
                dalam bentuk array
                -->
          <tr>
                <td><?php echo $u->nama ?></td>
                <td><?php echo $u->alamat ?></td>
                <td><?php echo $u->pekerjaan ?></td>
          </tr>
          <?php } ?>
      </table>
</body>
</html>
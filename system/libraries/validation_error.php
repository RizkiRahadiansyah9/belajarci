<h1>Perkalian</h1>
<?php echo validation_errors(); ?>
<p>Silahkan masukan data berikut!:</p>
<?php echo form_open('hitung/perkalian');?>
<?php echo form_input('v1',$v1);?> x <?php echo form_input('v2',$v2);?><br>
<?php echo form_submit('submit','Hitung!!');?>
<?php echo form_close();?><br>
Hasil : <?php echo $hasil;?>
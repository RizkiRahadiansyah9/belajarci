<html>
    <head>
        <title>Calculator Codeigniter</title>
         
<style type="text/css">
body {
 background-color:#fff;
 font-family: Lucida Grande, Verdana, Sans-serif;
 margin:40px;
 font-size:14px;
  color: #4f55155;
}
 
a {
 color: #003399;
 background-color: transparent;
 font-weight: normal;
}
 
h1 {
 color: #444;
 background-color: transparent;
 border-bottom: 1px solid #d0d0d0;
 font-size: 16px;
 font-weight: bold;
 margin: 24px 0 2px;
 padding: 5px 0 6px 0;
}
</style>
    </head>
<body>
    <h1>Petambahan</h1>
    <?php echo validation_errors(); ?>
    <p>Silahkan Masukan data berikut</p>
    <?php echo form_open('hitung/pertambahan');?>
    <?php echo form_input('v1',$v1);?> +
    <?php echo form_input('v2',$v2);?><br>
    
    <?php echo form_submit('submit','Hitung');?>
    <?php echo form_close();?><br>
    Hasil: <?php echo $hasil;?>
    
    <p><br/>Page rendered in {elapsed_time} seconds</p>
</body></html>
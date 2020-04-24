<?php 

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$wilayah = $_POST['wilayah'];
$jp = $_POST['jumlahpositif'];
$jd = $_POST['jumlahdirawat'];
$js = $_POST['jumlahsembuh'];
$jm = $_POST['jumlahmeninggal'];


?>

<h3 align="center">Data Pemantauan Covid19 wilayah <?php echo "" . $wilayah; ?><br>
<?php echo date('l, d-m-Y  h:i:s a'); ?><br>
nama operator <?php echo "" . $nama; ?>  nim <?php echo "" . $nim; ?>
</h3>
<table width=400 border=0 align="center">
<body>
<table width="450" border="0" cellpadding="0" cellspacing="1" align="center">
<tr>
<td>jumlah positif </td>
<td>Jumlah Dirawat </td>
<td>jumlah sembuh  </td>
<td>jumlah meninggal</td>
</tr>
<tr>
<td><input type=”text” name="nama" width=”75" value="<?php echo "" . $jp; ?>"/></td>
<td><input type=”text” name="nama" width=”75" value="<?php echo "" . $jd; ?>"/></td>
<td><input type=”text” name="nama" width=”75" value="<?php echo "" . $js; ?>"/></td>
<td><input type=”text” name="nama" width=”75" value="<?php echo "" . $jm; ?>"/></td>
</tr>
</table>
</body>

<?php


echo "jumlah positif "  . $jp; 
echo "<br/>";
echo "jumlah dirawat " . $jd;
echo "<br/>";
echo "jumlah sembuh " . $js;
echo "<br/>";
echo "jumlah meninggal " . $jm;

?>
<?= $this->extend('layout/templateTugas');?>

<?= $this->section('content');?>
<div class="mt-4 p-5 bg-secondary text-white rounded">
<center>
            <h1 >Kartu Tanda Mahasiswa</h1>
</center>
</div>
<table class= "table table-bordered">
<tr>
<td colspan="3">
<center>KTM</center>
</td>
</tr>
<tr>
<td>Nama</td>
<td>Dwiki Widianto</td>
<td rowspan="5">
    <center>
    <img width='300' height = '200' src="Dwiki3.jpg">
</center>
</td>
</tr>
<tr>
<td>NIK</td>
<td>7326002543216</td>
</tr>
<tr>
<td>Tempat Lahir</td>
<td>Palopo</td>
</tr>
<tr>
<td>Tanggal Lahir</td>
<td>7 Mei 2004</td>
</tr>
<tr>
<td>Alamat:</td>
<td>Sembego,Maguwoharjo</td>
</tr>
</table>

<?= $this->endSection();?>
<?= $this->extend('layout/templateTugas');?>

<?= $this->section('content');?>
<div class="mt-4 p-5 bg-danger text-white rounded">
<center>
            <h1 >Kartu Tanda Penduduk</h1>
</center>
</div>

<table class= "table table-bordered">
<tr>
<td colspan="3">
<center>KTP</center>
</td>
</tr>
<tr>
<td>Nama</td>
<td>Dwiki Widianto</td>
<td rowspan="5">
    <center>
    <img width='150' height = '200' src="Dwiki2.jpg">
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
<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="/Ktp/ktm">KTM</a>
  </li>
</ul>
<?= $this->endSection();?>
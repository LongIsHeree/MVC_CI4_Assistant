<?= $this->extend('layout/template');?>

<?= $this->section('content');?>
<div class="mt-4 p-5 bg-warning text-white rounded">
<center>
            <h1 >Cari Asisten Praktikum</h1>
</center>
</div>
<div class="shadow-lg p-3 mb-5 bg-body rounded">
    <form action = "/AsistenController/search" method = "post">
        <?= csrf_field()?>
        <div class="mb-3">
    <label for="nim" class="form-label">NIM</label>
    <input class="form-control" id="key" name = "key" >
    <div id="nimHelp" class="form-text">NIM harus berjumlah 9(Sembilan) digit.</div>
  </div>
        <button type="submit" class="btn btn-primary">Cari</button>
</form>
<?php 
if(!empty($hasil)){
    echo"<h2> Hasil Pencarian</h2>";
    echo"Nama : ". $hasil['nama'];
    echo"<br> Praktikum : " . $hasil['praktikum'];
    echo"<br>IPK : " . $hasil['ipk'];
}
?>
</div>

<?= $this->endSection();?>
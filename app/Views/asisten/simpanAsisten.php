<?= $this->extend('layout/template');?>

<?= $this->section('content');?>
<div class="mt-4 p-5 bg-warning text-white rounded">
<center>
            <h1 >Pendaftaran Asisten Praktikum</h1>
</center>
</div>
<?php if(session()->getFlashdata('pesan')):?>
      <?= session()->getFlashdata('pesan');?>
    <?php endif;?>
<div class="shadow-lg p-3 mb-5 bg-body rounded">
    <form action="/AsistenController/simpan" method ="post">
    <?= csrf_field() ?>
<div class="mb-3">
    <label for="nim" class="form-label">NIM</label>
    <input class="form-control" id="nim" name = "nim" >
    <div id="nimHelp" class="form-text">NIM harus berjumlah 9(Sembilan) digit.</div>
  </div>
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input class="form-control" id="nama" name = "nama" >
    <div id="namaHelp" class="form-text">Nama yang dimasukkan adalah nama lengkap.</div>
  </div>
  <div class="mb-3">
    <label for="praktikum" class="form-label">Kelas Praktikum</label>
    <input class="form-control" id="praktikum" name = "praktikum" >
    <div id="praktikumHelp" class="form-text">Kelas praktikum tidak boleh disingkat.</div>
  </div>
  <div class="mb-3">
    <label for="ipk" class="form-label">IPK</label>
    <input class="form-control" id="ipk" name = "ipk" >
    <div id="ipkHelp" class="form-text">Masukkan IPK pada kolom diatas.</div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<?= $this->endSection();?>
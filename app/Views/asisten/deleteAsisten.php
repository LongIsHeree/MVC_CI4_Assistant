<?= $this->extend('layout/template');?>

<?= $this->section('content');?>
<div class="mt-4 p-5 bg-primary text-white rounded">
<center>
            <h1 >Penghapusan Asisten Praktikum</h1>
</center>
</div>
<?php if(session()->getFlashdata('pesan')):?>
      <?= session()->getFlashdata('pesan');?>
    <?php endif;?>
<div class="shadow-lg p-3 mb-5 bg-body rounded">
    <form action="/AsistenController/delete" method ="post">
    <?= csrf_field() ?>
<div class="mb-3">
    <label for="nim" class="form-label">NIM</label>
    <input class="form-control" id="nim" name = "nim" >
    <div id="nimHelp" class="form-text">NIM harus berjumlah 9(Sembilan) digit.</div>
  </div>
  <button type="submit" class="btn btn-danger">Hapus</button>
</form>
</div>


<?= $this->endSection();?>
<?= $this->extend('layout/template');?>

<?= $this->section('content');?>
<div class="shadow-lg p-3 mb-5 bg-body rounded">
  <form action="/Todo/save" method ="post">
    <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Masukkan Kegiatan" aria-label="Nama kegiatan" id="kegiatan"name="kegiatan">
  <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Tambahkan</button>
</div>
    <div id="kegiatanHelp" class="form-text">Masukkan kegiatan yang akan dilakukan pada textfield diatas.</div>
    <br>
</form>

<table class =table table-sm>
    <thead>
    <tr>
      <th>Daftar Kegiatan </th>
      <th> </th>
   
    </tr>
    </thead>
    <tbody>
      <?php foreach ($todo as $t) :?>
  <tr class=table>
   <td><?=$t['kegiatan'];?></td>
    </tr>
    <?php endforeach;?>
</tbody>
</table>

<?= $this->endSection();?>
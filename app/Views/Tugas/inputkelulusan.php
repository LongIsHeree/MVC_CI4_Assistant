<?= $this->extend('layout/templateTugas');?>

<?= $this->section('content');?>
<div class="mt-4 p-5 bg-warning text-white rounded">
<center>
            <h1 >Input Status Kelulusan</h1>
</center>
</div>
<div class="shadow-lg p-3 mb-5 bg-body rounded">
<form action="./prosesLulus" method="get">
<input type="text" class="form-control" placeholder="Masukkan NIM" aria-label="NIm" id="nim"name="nim">
<div id="idHelp" class="form-text">Masukkan NIM pada textfield diatas.</div>
<br>
<input type="text" class="form-control" placeholder="Masukkan Nama" aria-label="Nama" id="nama"name="nama">
<div id="idHelp" class="form-text">Masukkan Nama pada textfield diatas.</div>
<br>
Status Kelulusan :
<select class="form-select" aria-label=".form-select-lg example"name="status">
  <option value = "Dengan Pujian">Dengan Pujian</option>
  <option  value = "Memuaskan">Memuaskan</option>
  <option  value = "Sangat Memuaskan">Sangat Memuaskan</option>
</select>
<input type="submit" value="Kirim">
</form>
</div>
<?= $this->endSection();?>
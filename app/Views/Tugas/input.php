<?= $this->extend('layout/templateTugas');?>

<?= $this->section('content');?>
<div class="mt-4 p-5 bg-warning text-white rounded">
<center>
            <h1 >Mengirim Pesan</h1>
</center>
</div>
<div class="shadow-lg p-3 mb-5 bg-body rounded">
<form action="./proses" method="get">
<label for="pesan">Pesan</label>
<input type="text" name="pesan" id="pesan">
<input type="submit" value="Kirim">
</form>
</div>
<?= $this->endSection();?>
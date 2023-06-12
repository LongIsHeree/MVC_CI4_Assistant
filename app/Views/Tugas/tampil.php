<?= $this->extend('layout/templateTugas');?>

<?= $this->section('content');?>
<div class="mt-4 p-5 bg-success text-white rounded">
<center>
            <h1 >Pesan Terkirim</h1>
</center>
</div>
<div class="shadow-lg p-3 mb-5 bg-body rounded">
    Pesan :
<?= $pesan; ?>
</div>
<?= $this->endSection();?>
<?= $this->extend('layout/templateTugas');?>

<?= $this->section('content');?>
<div class="mt-4 p-5 bg-success text-white rounded">
<center>
            <h1 >Status Kelulusan Mahasiswa</h1>
</center>
</div>
<div class="shadow-lg p-3 mb-5 bg-body rounded">
   Mahasiswa dengan nama <?= $nim; ?> 
   NIM <?= $nama; ?> 
   berhasil menyelesaikan studi S1 dengan predikat <?= $status; ?>




</div>
<?= $this->endSection();?>
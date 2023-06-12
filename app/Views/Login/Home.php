<?= $this->extend('layout/template');?>

<?= $this->section('content');?>
<div class="mt-4 p-5 bg-dark text-white rounded">
<center>
            <h1 >HALAMAN HOME</h1>
</center>
<a class="btn btn-primary" href="/Login/logout" role="button">Logout</a>
</div>
<?= $this->endSection();?>
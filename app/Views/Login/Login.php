<?= $this->extend('layout/template');?>

<?= $this->section('content');?>
<div class="mt-4 p-5 bg-primary text-white rounded">
<center>
            <h1 >HALAMAN LOGIN</h1>
</center>
<a class="btn btn-dark" href="/Login/forgetpwd" role="button">Lupa Password</a>
</div>
<div class="shadow-lg p-3 mb-5 bg-body rounded">
<form action="/Login/check" method = "post">
    <?= csrf_field()?>
    <div class="mb-3">
    <label for="usr" class="form-label">User :</label>
    <input class="form-control" id="usr" name = "usr" >
    <div id="usrHelp" class="form-text">Masukkan username</div>
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label">Password :</label>
    <input class="form-control" id="pwd" name = "pwd" >
    <div id="pwdHelp" class="form-text">Masukkan Password</div>
  </div>
  <button type="submit" class="btn btn-primary" name = "submit" value = "login">Submit</button>
</form>
</div>
<?= $this->endSection();?>
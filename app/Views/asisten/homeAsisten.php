<?= $this->extend('layout/template');?>

<?= $this->section('content');?>

<div class="shadow-lg p-3 mb-5 bg-body rounded">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/AsistenController/home">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/AsistenController/login">Login</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Edit Data
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/AsistenController/simpan">Tambah Data</a></li>
            <li><a class="dropdown-item" href="/AsistenController/update">Update Data</a></li>
            <li><a class="dropdown-item" href="/AsistenController/delete">Hapus Data</a></li>
          </ul>
        </li>
      <form class="d-flex justify-content-center" action = "/AsistenController/search" method ="post">
      <?= csrf_field()?>
        <input class="form-control me-2" type="search" placeholder="Ketikkan NIM disini" aria-label="Search" name = "key" id = "key">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
  <a class="btn btn-primary" href="/AsistenController/logout" role="button">Logout</a>
</nav>
</div>
<?php 
if(!empty($hasil)){
    echo"<div class=\"shadow-lg p-3 mb-5 bg-body rounded\">";
    echo"Nama : ". $hasil['nama'];
    echo"<br> Praktikum : " . $hasil['praktikum'];
    echo"<br>IPK : " . $hasil['ipk'];
    echo"</div>";
}
?>
<div class="shadow-lg p-3 mb-5 bg-body rounded">
<table class =" table table-primary table-striped">
    <thead>
    <tr>
      <th>No</th>
      <th>NIM </th>
      <th>Nama</th>
      <th>Kelas Praktikum</th>
      <th>IPK</th>
    </tr>
    </thead>
    <tbody>
    <?php $i = 1;?>
      <?php foreach ($asisten as $a) :?>
  <tr class=table>
   
    <td><?=$i?></td>
   <td><?=$a['nim'];?></td>
   <td><?=$a['nama'];?></td>
   <td><?=$a['praktikum'];?></td>
   <td><?=$a['ipk'];?></td>
    </tr>
    <?php $i++;?>
    <?php endforeach;?>
</tbody>
</table>
      </div>
<?= $this->endSection();?>
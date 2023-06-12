<?= $this->extend('layout/template');?>

<?= $this->section('content');?>
<div class="mt-4 p-5 bg-warning text-white rounded">
<center>
            <h1 ><?= esc($title) ?></h1>
</center>
</div>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>
<div class="shadow-lg p-3 mb-5 bg-body rounded">
<form action="/news/create" method="post">
    <?= csrf_field() ?>

    <label for="title">Title</label>
    <input type="input" name="title" value="<?= set_value('title') ?>">
    <br>

    <label for="body">Text</label>
    <textarea name="body" cols="45" rows="4"><?= set_value('body') ?></textarea>
    <br>

    <button type="submit" class="btn btn-primary">Create New Item</button>
</form>
</div>
<?= $this->endSection();?>
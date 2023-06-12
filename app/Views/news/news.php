
<?= $this->extend('layout/template');?>

<?= $this->section('content');?>
<title><?= esc($title) ?></title>
<div class="mt-4 p-5 bg-dark text-white rounded">
    <center>
            <h1 >Read Our News!</h1>
</center>
</div>

<?php if (! empty($news) && is_array($news)): ?>

    <?php foreach ($news as $news_item): ?>
        <div class="shadow-lg p-3 mb-5 bg-body rounded">
        <h3><?= esc($news_item['title']) ?></h3>

        <div class="main">
            <?= esc($news_item['body']) ?>
        </div>
        <p><a href="/news/<?= esc($news_item['slug'], 'url') ?>">View article</a></p>
    </div>
    <?php endforeach ?>

<?php else: ?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

<?php endif ?>
<?= $this->endSection();?>
<?= $this->extend('default') ?>

<?= $this->section('content') ?>
<div class="row">
    <div class='col-md-offset-1'>
        <h2><?= $title?></h2>
        <h3>Name: <?= $item['name']?></h3>
        <p>Price: <?= $item['price']?></p>
        <p style='color:red;font-size:14pt;font-family:Verdana;'>Price Sale: <?= $item['price_sale']?></p>
        <p>Details: <?= $item['info']?></p>
    </div>
</div>
<?= $this->endSection() ?>
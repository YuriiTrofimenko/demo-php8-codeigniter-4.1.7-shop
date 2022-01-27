<?= $this->extend('default') ?>

<?php /*$this->include('header'); */?>
<?= $this->section('content') ?>
    <h2><?= $title?></h2>
    <table class="table">
        <thead>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">price</th>
            <th scope="col">quantity</th>
            <th scope="col">sale price</th>
        </thead>
        <tbody>
        <?php foreach ($items as $item):?>
            <tr>
                <th scope="row"><?= $item['id']?></th>
                <td><?= $item['name']?></td>
                <td><?= $item['price']?></td>
                <td><?= $item['quantity']?></td>
                <td><?= $item['price_sale']?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?= $this->endSection() ?>
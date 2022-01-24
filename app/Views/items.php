<h2><?= $title?></h2>

<table>
    <thead>
        <th>id</th>
        <th>name</th>
        <th>price</th>
        <th>quantity</th>
        <th>sale price</th>
    </thead>
    <tbody>
    <?foreach ($items as $item):?>
        <tr>
            <td><?= $item['id']?></td>
            <td><?= $item['name']?></td>
            <td><?= $item['price']?></td>
            <td><?= $item['quantity']?></td>
            <td><?= $item['price_sale']?></td>
        </tr>
    <? endforeach; ?>
    </tbody>
</table>
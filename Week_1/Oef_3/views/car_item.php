<div class="car">
    <h2><?= $item['brand'] ?> <?= $item['type'] ?></h2>
    <img src="cars/<?= $item['image']?>" alt="MERK en TYPE">
    <dl>
        <dt>Brandstof</dt>
        <dd><?= $item['fuel'] ?></dd>
        <dt>Prijs</dt>
        <dd>&euro; <?= $item['price_from'] ?>,-</dd>
    </dl>
</div>
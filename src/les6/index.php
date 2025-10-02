<?php
function dd($var)
{
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
}


$array = [];

    if (!empty($_GET['getal1'])){
        foreach ($_GET as $key => $value) {
            if(strlen($key) === 6) {
                $array[] = (int)$value;
            }
        }

        if ($_GET['order'] === 'asc') {
            sort($array);
        } else {
            rsort($array);
        }
    }
?>


<form action="" method="get">
    <?php for ($i = 0; $i < 5; $i++): ?>
    <div>
        <label>
            Getal <?= $i + 1?>:
            <input type="number" name="getal<?= $i+1?>" required>
        </label>
    </div>
    <?php endfor ?>

    <div>
        <label>
            Ascending
            <input type="radio" name="order" value="asc" checked>
        </label>
        <label>
            Descending
            <input type="radio" name="order" value="desc">
        </label>
    </div>
    <input type="submit" value="Verzenden">
</form>

<div>
    <h2>Gesorteerde getallen</h2>
    <ul>
        <?php foreach ($array as $value): ?>
        <li><?= $value ?></li>
        <?php endforeach ?>
    </ul>
</div>


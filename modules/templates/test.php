<?php
// Подключаем пространство имен
use function Helpers\get_fragment_path;

// Подключаем фрагмент
require get_fragment_path('__header')
?>

<div>
    <?php foreach ($test as $value) : ?>
        <h1><?= $value['title'] ?></h1>
        <p><?= $value['desc'] ?></p>
    <?php endforeach?>
</div>

<?php 
// Подключаем фрагмент
require get_fragment_path('__footer');
?>
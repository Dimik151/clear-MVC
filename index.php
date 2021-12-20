<?php 

// Общий каталог путь
$base_path = __DIR__ . '\\';

// Подключение файла с настройками
require_once $base_path . 'modules\settings.php';

/**
 * Функция подключения классов
 *
 * @param string $class_name
 * @return void
 */
function autoloader(string $class_name){
    global $base_path;
    require_once $base_path . 'modules\\' . $class_name . '.php';
}

// Автозагрузчик классов
spl_autoload_register('autoloader');

// Подключаем файл с роутами
require_once $base_path . 'modules\router.php';


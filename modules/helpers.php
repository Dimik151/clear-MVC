<?php 
// Функции помощники

// Подключаем пространство имен
namespace Helpers {

/**
 * Генерирует страницу на основе указанного шаблона
 *
 * @param string $template
 * @param array $context
 * @return void
 */
function render (string  $template, array $context)
{
    global $base_path;
    extract($context);
    require $base_path . '\modules\templates\\' . $template . '.php';
}


/**
 * Подключение фрагментов на страницу
 *
 * @param string $fragment
 * @return string
 */
function get_fragment_path (string $fragment) : string 
{
    global $base_path;
    return $base_path . '\modules\templates\fragments\\' . $fragment . '.inc.php';
}


}
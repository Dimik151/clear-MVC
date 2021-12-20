<?php 
// Объявляем пространство имен
namespace Controllers;

// Подключаем функции помощников
require_once $base_path . 'modules\helpers.php';

/**
 * Базовый контроллер, для всех классов
 */
class BaseController 
{
    protected function context_append(array &$context) 
    {

    }
    
    protected function render(string $template, array $context)
    {
        $this->context_append($context);
        \Helpers\render($template, $context);
    }
}
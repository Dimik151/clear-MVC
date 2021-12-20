<?php 
// Подключаем пространства имен
namespace Models;

/**
 * Тестовая модель
 */
class Test_Mod implements \Iterator
{   

    private const DATA = [
        ['title' => 'Вода', 'desc' => 'Океан'],
        ['title' => 'Огонь', 'desc' => 'Пожар'],
    ];

    private $current_index = 0;

    function current()
    {
        return self::DATA[$this->current_index];
    }

    function key()
    {
        return $this->current_index;
    }
    
    function next(): void
    {
        $this->current_index++;
    }

    function rewind(): void
    {
        $this->current_index = 0;
    }

    function valid() : bool
    {
        return isset(self::DATA[$this->current_index]);
    }
    
}
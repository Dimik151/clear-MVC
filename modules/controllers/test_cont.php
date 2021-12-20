<?php 

namespace Controllers;

/**
 * Тестовый контроллер
 */
class Test_Cont extends BaseController
{
    public function test()
    {
        $ctx = ['test' => new \Models\Test_Mod()];
        $this->render('test', $ctx);
    }
}


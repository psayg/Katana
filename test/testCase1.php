<?php declare(strict_types=1);

/* TestCase1 - Forma Manual
    Se evalua la existencia de un Administrador
    por medio de un conteo a la tabla correspondiente de User
    el resultado esperado debe ser '0' y si se obtiene mayor a eso
    es que ya existe un Administrador se toma como resultado erroneo.
*/

use PHPUnit\Framework\TestCase;
require "admin\core\modules\index\model\UserData.php";
final class testCase1 extends TestCase
{
    /** @test */
    public function test_existeAdmin()
    {
        $userdata = new userData();
        $this->assertEquals(
            0, $userdata->existeAdmin('adminf')
        );
    }
}

?>
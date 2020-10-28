<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
include('admin\core\modules\index\model\UserData.php');
include('admin\core\modules\index\model\ProductData.php');
include('admin\core\modules\index\model\ClientData.php');

final class TestCaseUnificado extends TestCase
{
    
        
    /* TestCase1 - Forma Manual
        Se evalua la existencia de un Administrador
        por medio de un conteo a la tabla correspondiente de User
        el resultado esperado debe ser '0' y si se obtiene algo diferente
        es que ya existe un Administrador se toma como resultado erroneo.
    */
    /** @test */
    public function test_existeAdmin2()
    {
        $userdata = new UserData();
        $this->assertEquals(
            0, $userdata->existeAdmin('administrador')
        );
    }

    
    /* TestCase2 - Forma Manual
        Se evalua la existencia de un producto 
        por medio de un codigo asignado a dicho producto
        el resultado esperado debe ser '1' de ser asi indica
        que ya existe dicho producto.
    */
    /** @test */
    public function test_existeProducto2()
    {
        $productdata = new ProductData();
        $this->assertEquals(
            1, $productdata->existeProducto('PRD-100')
        );
    }

    
    /* TestCase3 - Forma Manual
        Se obtiene el codigo de un producto
        por medio de una descripcion de dicho producto
        el resultado esperado debe ser 'PRD-100'
    */
    /** @test */
    public function test_codigoProducto2()
    {
        $productdata = new ProductData();
        $this->assertEquals('PRD-100',
            $productdata2->codigoProducto('HUAWEI MATE 10 PRO')
        );
    }

    /* TestCase4 - Forma Manual
        Se evalua la existencia de un Cliente
        por medio de un conteo a la tabla correspondiente de client
        el resultado esperado debe ser '0' y si se obtiene algo diferente
        es que ya existe un Cliente se toma como resultado erroneo.
    */

    /** @test */
    public function test_existeCliente2()
    {
        $clientdata = new ClientData();
        $this->assertEquals(
            0, $clientdata->existeCliente('umg2@correo.com')
        );
    }
    /* TestCase5 - Forma Manual
        Se obtiene el statis de un cliente
        por medio de su email de dicho cliente
        el resultado esperado debe ser '1' indicando que esta activo
    */
    /** @test */
    public function test_statusCliente2()
    {
        $clientdata = new ClientData();
        $this->assertEquals(
            1, $clientdata2->statusCliente('umg@correo.com')
        );
    }
}


?>
<?php

use PHPUnit\Framework\TestCase;
use \App\Models\ProductoModel;

class ProductoModelTest extends TestCase {

    public function tearDown(): void {
        Mockery::close();
    }

    public function testGetAllProductos() {
        $mock = Mockery::mock( 'alias:Config' );

        $mock->shouldReceive( 'HTTP_HOST' )
            ->once()
            ->with()
            ->andReturn( '' );

        //$this->assertNotEmpty()
        $data = ProductoModel::getAll();
        $this->assertInternalType( 'array', $data );
    }
}
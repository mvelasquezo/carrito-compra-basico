<?php

use PHPUnit\Framework\TestCase;
use \App\Models\ProductoModel;

//alias phpunit="./vendor/phpunit/phpunit/phpunit"

class ProductoModelTest extends TestCase {

    public function tearDown(): void {
        Mockery::close();
    }

    public function testProductoModelGetAll() {
        /*$mock = Mockery::mock( 'alias:Config' );

        $mock->shouldReceive( 'HTTP_HOST' )
            ->once()
            ->with()
            ->andReturn( '' );
        */
        //$this->assertNotEmpty()
        $data = ProductoModel::getAll();
        $this->assertIsArray( $data );
        
        //echo "\n";
        //var_dump( $data );
    }
}
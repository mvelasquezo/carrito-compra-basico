<?php

namespace App\Controllers;

use \Core\View;
use \App\Models\ProductoModel;

/**
 * Home controller
 *
 * PHP version 7.0
 */
class Home extends \Core\Controller {

    /**
     * Muestra la página principal de inicio
     *
     * @return void
     */
    public function indexAction() {
        View::renderTemplate('Home/index.html'
            , [
                'productos'		=> ProductoModel::getAll()
            ]
        );
    }
}
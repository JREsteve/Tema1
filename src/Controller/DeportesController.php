<?php
/**
 * Created by PhpStorm.
 * User: jep
 * Date: 2018-12-03
 * Time: 12:18
 */

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DeportesController
{
    /**
     * @Route("/deportes")
     */
    public function inicio() {
        return new Response('Mi página de Deportes!');
    }

    /**
     * @Route("/deportes/primer-articulo")
     */
    public function mostrar() {
        return new Response('Mi primera ruta Primer Artículo!');
    }


}
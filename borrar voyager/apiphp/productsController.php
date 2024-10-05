<?php

require 'productsModel.php';
$productosModel = new ProductsModel();

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        //echo 'solucitud Leer';
        $respuesta = $productosModel->getProducts();
        echo json_encode($respuesta);
        break;
    
    case 'POST':
        echo 'solucitud Guardar';
        break;

    case 'PUT':
        echo 'solucitud Actulizar';
        break;
        
    case 'DELETE':
        echo 'solucitud eliminar';
        break;
}
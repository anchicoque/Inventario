<?php

class ProductsModel{

    public $conexion;

    public function __construct(){
        $this->conexion = new mysqli('localhost','root','','apiphp');
        mysqli_set_charset($this->conexion,'utf8');
    }

    public function getProducts(){
        $products=[];
        $sql="SELECT * FROM products";
        $registros = mysqli_query($this->conexion,$sql);
        while($row = mysqli_fetch_assoc($registros)){
            array_push($products,$row);
        }
        return $products;
    }

}
<?php
    $r=0;
    if (isset($_GET['numeroa']) and isset($_GET['numerob']) and isset($_GET['operacion'])) {
        $numeroa = $_GET['numeroa'];
        $numerob = $_GET['numerob'];
        $operacion = $_GET['operacion'];
        
        switch ($operacion) {
            case 1:
                $r=$numeroa+$numerob;
                break;
            case 2:
                $r=$numeroa-$numerob;
                break;
            case 3:
                $r=$numeroa*$numerob;
                break;
            case 4:
                $r=$numeroa/$numerob;
                break;
            default:
                "debe digitar una opcion validad";
                break;
        }    
    }
?>
@extends('Layout')

@section('content')
    <div>
        <h2>
            Cotenido de calculadora        
        </h2>
    </div>
    <div>
        <form method="get" action="">
            <label>Numero a:</label>    
            <input type="number" name="numeroa" required>
            <br>
            <label>Numero b:</label>    
            <input type="number" name="numerob" required>
            <br>
            <label>Operacion: 1. para + 2. para - 3. para * y 4. para /</label>    
            <input type="number" name="operacion" required>
            <br>
            <input type="submit" value="Calcular">
        </form>
        <div>
            @php               
                echo "El resultado es:".$r;
            @endphp         
        </div>
    </div>
    
@endsection
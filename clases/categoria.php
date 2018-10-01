<?php

class categoria{

    public function registrar($conexion, $nombre, $descripcion, $codigo){
        
        $query = " call registar_Categoria('$nombre', '$descripcion', $codigo )";
        $consulta = mysqli_query($conexion, $query);
        
        if($consulta){
            $respuesta = "Categoria registrada";
        }else{
            $respuesta = " Problemas al registar";
        }
            return $respuesta;
    }

    public function consultar($conexion){
        $query = "SELECT * FROM ver_Categoria";
        $consulta = mysqli_query($conexion, $query);
        return $consulta;
    }
}


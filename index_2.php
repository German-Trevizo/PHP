<?php
// comentario

$id = 11;
$nombre ="Pepe";
if($nombre == ""){
    echo '<a href="">favor de iniciar sesion </a>';
    }else{
        echo "Bienvenido $nombre";
    }
    if($id == 10){
        echo '<h2 id="miId">Hola '.$id.'</h2>';
    }else{
        for($i=0;$i<$id;$i++){
        echo '<button> Hola </button>';    
        }
    }
?>

<h1>Hola </h1>
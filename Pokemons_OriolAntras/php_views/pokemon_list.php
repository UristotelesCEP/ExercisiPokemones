<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet'  href='/Pokemons_OriolAntras/UI/bootstrap-5.1.3-dist/css/bootstrap.min.css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../style/estilos.css">
    <script src='/Pokemons_OriolAntras/UI/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js'></script>

</head>
<body class="bodyFondo2">
    <?php
    //Creamos la navBar
    include '../php_partials/ElementsCode.php';
    
     ?>
    <div class="container-fluid">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 row-cols-lg-5 g-5">

        
       <?php 
        //Importamos pokemons precreados y los mostramos por pantalla
        include '../php_controllers/PokemonCreateControler.php';
        
        $Pokedex;
        $Pokemon1 = CrearPokemon(1,"Bulbasur","Hoen",array("Planta","Veneno"),70, 6.9, "Sense evolucionar","../media/001.png"); 
        $Pokemon2 = CrearPokemon(2,"Ivysaur","Hoen",array("Planta","Veneno"),100, 13, "Primera evolució","../media/002.png"); 
        $Pokemon3 = CrearPokemon(3,"Venusaur ","Jotho",array("Planta","Veneno"),60, 8.5, "Sense evolucionar","../media/003.png");    
        $Pokemon4 = CrearPokemon(4,"Charmander","Jotho",array("Fuego"),60, 8.5, "Sense evolucionar","../media/004.png");    
        $Pokemon5 = CrearPokemon(5,"Charmeleon","Jotho",array("Fuego"),60, 8.5, "Sense evolucionar","../media/005.png");    
        $Pokemon6 = CrearPokemon(5,"Charizard","Jotho",array("Fuego"),60, 8.5, "Sense evolucionar","../media/006.png");   
        
        
        $Pokedex = array($Pokemon1,$Pokemon2,$Pokemon3,$Pokemon4,$Pokemon5,$Pokemon6);
        //Los mostramos por pantalla
        foreach($Pokedex as $pkm)
        {
            echo '<div class="col">';
            echo CrearCardPokemon($pkm);
            echo '</div>';
        }
         ?> 
        <div class="paldiv1">

            <div class="paldiv2">
                <a href="../php_views/Pokemon.php" class="floating-button fs-1 btn border-0 bg-transparent fRight">
                    <i class="bi bi-plus-circle-fill" style="bottom: 0; font-size: 2.5rem; color: blue;"></i>
                </a>
            </div>

        </div>
        </div>
    </div>
    
    
        
        
    
    
</body>
</html>



<?php
function CrearCardPokemon($Pokemon)
{
$out = "";
$out .= '<div class="card marginCard">';
$out .= '<img class="card-img-top" src="'.$Pokemon["Imagen"].'" alt="Card image cap" width="100%" height="100%">';
$out .= '<div class="card-body">';
$out .= '<h5 class="card-title fw-bold">';
if($Pokemon["ID"] < 10)
{
    $out .= "00";
}
elseif($Pokemon["ID"] < 100)
{
    $out .= "0";
}
$out .= $Pokemon["ID"].'-'.$Pokemon["Nombre"].'</h5>';
foreach ($Pokemon["Tipo"] as $type)
{
    $out .= CrearBadage($type);
}
$out .= '</div>';
$out .= '<div class="card-footer ColorFooterCards" >';
$out .= '<button class="btn btn-outline-primary fr" value=""><i class="bi bi-pencil-square"></i></button>';
$out .= '<button class="btn btn-outline-danger fr" value=""><i class="bi bi-trash3"></i></button>';
$out .= '</div>';
$out .= '</div>';
return $out;
}
function CrearBadage($Tipo)
{
    $ListaTipos = array("Planta","Veneno","Fuego","Volador","Agua","Electrico","Hada","Bicho","Lucha","Psiquico");
    $out = '<span class="badge badge-primary marginbud ';
switch($Tipo)
{
    case $ListaTipos[0]:
        $out .= $ListaTipos[0].'">'.$ListaTipos[0];
        break;
    case $ListaTipos[1]:
        $out .= $ListaTipos[1].'">'.$ListaTipos[1];
        break;
    case $ListaTipos[2]:
        $out .= $ListaTipos[2].'">'.$ListaTipos[2];
        break;
    case $ListaTipos[3]:
        $out .= $ListaTipos[3].'">'.$ListaTipos[3];
        break;
    case $ListaTipos[4]:
        $out .= $ListaTipos[4].'">'.$ListaTipos[4];
        break;
    case $ListaTipos[5]:
        $out .= $ListaTipos[5].'">'.$ListaTipos[5];
        break;
    case $ListaTipos[6]:
        $out .= $ListaTipos[6].'">'.$ListaTipos[6];
        break;
    case $ListaTipos[7]:
        $out .= $ListaTipos[7].'">'.$ListaTipos[7];
        break;
    case $ListaTipos[8]:
        $out .= $ListaTipos[8].'">'.$ListaTipos[8];
        break;
    case $ListaTipos[9]:
        $out .= $ListaTipos[9].'">'.$ListaTipos[9];
        break;
    default:
        $out .= '">'.$Tipo;
        break;    
    }
    $out .= '</span>';

    return $out;
}




?>


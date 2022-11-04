<?php
function CrearPokemon($IDPokemon,$NombrePokemon,$RegionPokemon,$TipoPokemon,$AlturaPokemon,$PesoPokemon,$EvolucionPokemon,$ImatgePokemon)
{
    $Pokemon = [
        "ID" => $IDPokemon,
        "Nombre" => $NombrePokemon,
        "Region" => $RegionPokemon,
        "Tipo" => $TipoPokemon,
        "Altura" => $AlturaPokemon,
        "Peso" => $PesoPokemon,
        "Evolucion" => $EvolucionPokemon,
        "Imagen" => $ImatgePokemon
    ];
    return $Pokemon;
}
function AfegirPokemonAPokedex($Pokemon, &$Pokedex)
{
    $PokemonExistPos = PokemonExisteix($Pokemon["ID"],$Pokedex);
    if($PokemonExisteix == -1)
    {
        array_push($Pokedex, $Pokemon);
    }

    
}
//Metodo 1
function RemplacePokemon(&$Pokedex,$IdPokemon,$NombrePokemon,$RegionPokemon,$TipoPokemon,$AlturaPokemon,$PesoPokemon,$EvolucionPokemon,$ImatgePokemon)
{    
    $PokemonExistPos = PokemonExisteix($IdPokemon,$Pokedex);
    if($PokemonExistPos != -1)
    {         
        $newPokemon = CrearPokemon($IdPokemon,$NombrePokemon,$RegionPokemon,$TipoPokemon,$AlturaPokemon,$PesoPokemon,$EvolucionPokemon,$ImatgePokemon);    
        $Pokedex[$PokemonExistPos] = $newPokemon;
    }    
}
//Metodo 2
function RemplacePokemon2(&$Pokedex,$IdPokemon,$NombrePokemon,$RegionPokemon,$TipoPokemon,$AlturaPokemon,$PesoPokemon,$EvolucionPokemon,$ImatgePokemon)
{    
    $PokemonExistPos = PokemonExisteix($IdPokemon,$Pokedex);
    if($PokemonExistPos != -1)
    {         
        $Pokedex[$PokemonExistPos]["Nombre"] = $NombrePokemon;    
        $Pokedex[$PokemonExistPos]["Region"] = $RegionPokemon;
        $Pokedex[$PokemonExistPos]["Tipo"] = $TipoPokemon ;
        $Pokedex[$PokemonExistPos]["Altura"] = $AlturaPokemon;
        $Pokedex[$PokemonExistPos]["Peso"] = $PesoPokemon;
        $Pokedex[$PokemonExistPos]["Evolucion"] = $EvolucionPokemon;
        $Pokedex[$PokemonExistPos]["Imagen"] = $ImatgePokemon;
    }
}
function BorrarPokemon(&$Pokedex, $num) 
{
    $PokemonExistPos = PokemonExisteix($num,$Pokedex);
    if($PokemonExistPos != -1)
    {
        unset($Pokedex[$PokemonExistPos]);
        $pokedex = array_values($pokedex);
    }
    
}
function PokemonExisteix($Num, $pokedex)
{
    $ret = -1;
    $cnt = 0;
    while($ret == -1 && $cnt < (count($pokedex)))
    {        
        if($pokedex[$cnt]["ID"] == $Num)
        {
            $ret = $cnt; 
        }
        $cnt++;
    }
    return $ret;
}
function MostrarPokemonV1($Pokemon)
{
    echo TextToH(1, $Pokemon["Nombre"]);
    echo TextToH(3, $Pokemon["ID"]);
    echo TextToH(3, $Pokemon["Region"]);
    echo TextToH(3, $Pokemon["Tipo"]);
    echo TextToH(3, $Pokemon["Altura"]);
    echo TextToH(3, $Pokemon["Peso"]);
    echo TextToH(3, $Pokemon["Evolucion"]);
    echo TextToH(3, $Pokemon["Imagen"]);

}
function MostrarPokemonV2($Pokemon)
{
    foreach(array_keys($Pokemon) as $prop)
    {
        $out;
        if($prop == "Tipo")
        {
            //Para mostrar por pantalla los tipos del poquemon
            $out = $prop." = ";
            for($cnt = 0; $cnt < count($Pokemon[$prop]); $cnt++)
            {
                $out = $out.$Pokemon[$prop][$cnt];
                if(($cnt < count($Pokemon[$prop])-1))
                {
                    $out = $out.",";
                }
            }
           
        }
        else{
            $out = $prop." = ".$Pokemon[$prop];
        }
        
        if($prop == "Altura")
        {
            $out = $out."cm";
        }
        else if($prop == "Peso")
        {
            $out = $out."Kg";
        }
        
        $out = $out."<br>";
        echo $out;        
    }
}
function MostrarPokemons($Pokedex)
{
    foreach($Pokedex as $pokemon)
    {
        MostrarPokemonV2($pokemon);
        echo "<br>";
    }
}

function TextToH($Hvalue, $Texto)
{
    return "<h".$Hvalue.">".$Texto."</h".$Hvalue.">";
}



?>
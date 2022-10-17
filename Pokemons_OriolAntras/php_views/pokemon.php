<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Pokemons Uristoteles</title>
    
</head>

<body>   
    <form>
        <label for="NumeroId">Numero:</label>
        <input type="text" id="NumeroId" maxlength="3" placeholder="ID del Pokemon" autofocus><br>

        <label for="NombreId">Nombre:</label>
        <input type="text" id="NombreId" placeholder="Nombre del Pokemon"> <br>



        <label for="cbxRegionesId">Region:</label>
        <select name="cbxRegiones" id ="cbxRegionesId">
            <option value ="Kanto">Kanto</option>
            <option value ="Jotho">Jotho</option>
            <option value ="Hoenn">Hoenn</option>
            <option value ="Sinnoh">Sinnoh</option>
            <option value ="Teselia">Teselia</option>
        </select>

        <br>
        <label>Tipo:</label>

        <label for="chxPlanta">Planta</label> <input type="checkbox" id="chxPlanta" name="chxTipos[]">
        <label for="chxVeneno">Veneno</label> <input type="checkbox" id="chxVeneno" name="chxTipos[]">
        <label for="chxFuego">Fuego</label> <input type="checkbox" id="chxFuego" name="chxTipos[]">
        <label for="chxVolador">Volador</label> <input type="checkbox" id="chxVolador" name="chxTipos[]">
        <label for="chxAgua">Agua</label> <input type="checkbox" id="chxAgua" name="chxTipos[]">
        <label for="chxElectrico">Electrico</label> <input type="checkbox" id="chxElectrico" name="chxTipos[]">
        <label for="chxHada">Hada</label> <input type="checkbox" id="chxHada" name="chxTipos[]">
        <label for="chxBicho">Bicho</label> <input type="checkbox" id="chxBicho" name="chxTipos[]">
        <label for="chxLucha">Lucha</label> <input type="checkbox" id="chxLucha" name="chxTipos[]">
        <label for="chxPsiquico">Psiquico</label> <input type="checkbox" id="chxPsiquico" name="chxTipos[]">


        <br>

        <label for="alturaId">Altura:</label>
        <input type="Number" id="alturaId" min="1"><br>

        <label for="pesoId">Peso:</label>
        <input type="Number" id="pesoId" min="0" step ="0.01" ><br>

        <label >Evolucion:</label>
        <label for="rbSense">Sense evolució</label><input type="radio" name="rbevoluciones" id="rbSense" >
        <label for="rbPrimera">Primera evolución</label><input type="radio" name="rbevoluciones" id="rbPrimera" >
        <label for="rbOtras">Otras evoluciones</label><input type="radio" name="rbevoluciones" id="rbOtras" >


        <br>

        <label for="imagenId">Imagen:</label>
        <input type="file" id="imagenId" ><br>

        <button type="submit">Aceptar</button>
        <a href="">Cancelar</a>
    </form>
</body>
</html> 


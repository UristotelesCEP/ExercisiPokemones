<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Pokemons Uristoteles</title>
    <link rel='stylesheet'  href='/Pokemons_OriolAntras/UI/bootstrap-5.1.3-dist/css/bootstrap.min.css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../style/estilos.css">
    <script src='/Pokemons_OriolAntras/UI/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js'></script>
</head>

<body class="bodypokemons">   
<div class="container">
    <div class="card mx-auto">
        <div class="card-header">   
            <h5><img src="../media/pokebola.png" alt="" width="50" height="50">Pokemon</h5>
        </div>
        <div class="card-body">
            
            <form>
                <div class="input-group mb-3">
                    <label for="NumeroId" class="form-label col-sm-2" >Numero:</label>
                    <div class="col-sm-10">
                    <input type="text" id="NumeroId" maxlength="3" placeholder="ID del Pokemon " class="form-control" autofocus>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <label class="col-sm-2" for="NombreId">Nombre:</label>
                    <div class="col-sm-10">
                    <input class="form-control" type="text" id="NombreId" placeholder="Nombre del Pokemon">
                    </div>
                </div>

                <div class="input-group mb-3">
                    <label class="col-sm-2" for="cbxRegionesId">Region:</label>
                    <div class="col-sm-10">
                    <select class="form-select" name="cbxRegiones" id ="cbxRegionesId">
                        <option value ="Kanto">Kanto</option>
                        <option value ="Jotho">Jotho</option>
                        <option value ="Hoenn">Hoenn</option>
                        <option value ="Sinnoh">Sinnoh</option>
                        <option value ="Teselia">Teselia</option>
                    </select>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <label class="col-sm-2">Tipo:</label>
                    <div class="col-sm-10">
                        <input class="form-check-input" type="checkbox" id="chxPlanta" name="chxTipos[]"> <label class="form-check-label" for="chxPlanta">Planta</label> 
                        <input class="form-check-input" type="checkbox" id="chxVeneno" name="chxTipos[]"> <label class="form-check-label" for="chxVeneno">Veneno</label> 
                        <input class="form-check-input" type="checkbox" id="chxFuego" name="chxTipos[]"> <label class="form-check-label" for="chxFuego">Fuego</label> 
                        <input class="form-check-input" type="checkbox" id="chxVolador" name="chxTipos[]"> <label class="form-check-label" for="chxVolador">Volador</label> 
                        <input class="form-check-input" type="checkbox" id="chxAgua" name="chxTipos[]"> <label class="form-check-label" for="chxAgua">Agua</label> 
                        <input class="form-check-input" type="checkbox" id="chxElectrico" name="chxTipos[]"> <label class="form-check-label" for="chxElectrico">Electrico</label> 
                        <input class="form-check-input" type="checkbox" id="chxHada" name="chxTipos[]"> <label class="form-check-label" for="chxHada">Hada</label> 
                        <input class="form-check-input" type="checkbox" id="chxBicho" name="chxTipos[]"> <label class="form-check-label"  for="chxBicho">Bicho</label> 
                        <input class="form-check-input" type="checkbox" id="chxLucha" name="chxTipos[]"> <label class="form-check-label" for="chxLucha">Lucha</label> 
                        <input type="checkbox" id="chxPsiquico" name="chxTipos[]"> <label class="form-check-label" for="chxPsiquico">Psiquico</label> 

                    </div>
                </div>

                <div class="input-group mb-3">
                    <label class="col-sm-2" for="alturaId">Altura:</label>
                    <div class="col-sm-9">
                    <input class="form-control" type="Number" id="alturaId" min="1">
                    </div>
                    <span class="input-group-text col-sm-1 centerText">cm</span>
                </div>

                <div class="input-group mb-3">
                <label class="col-sm-2" for="pesoId">Peso:</label>           
                    <div class="col-sm-9">
                    <input class="form-control" type="Number" id="pesoId" min="0" step ="0.01" >            
                    </div>
                    <span class="input-group-text col-sm-1 centerText">kg</span>
                </div>    

                <div class="input-group mb-3">
                    <label class="col-sm-2">Evolucion:</label>
                    <div class="col-sm-10">
                    <input class="form-check-input" type="radio" name="rbevoluciones" id="rbSense" checked> <label class="form-check-label" for="rbSense" >Sense evolució</label>
                    <input class="form-check-input"  type="radio" name="rbevoluciones" id="rbPrimera" > <label class="form-check-label" for="rbPrimera">Primera evolución</label>
                    <input class="form-check-input"  type="radio" name="rbevoluciones" id="rbOtras" > <label class="form-check-label" for="rbOtras">Otras evoluciones</label>

                    </div>
                </div>

                <div class="input-group mb-3">
                    <label for="formFile" class="form-label col-sm-2">Imagen</label>
                    <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile">
                    </div>
                </div>

                <a href="#" class="btn btn-primary BotonDerecha">Aceptar</a>
                <a href="../php_views/pokemon_list.php" class="btn btn-secondary BotonDerecha">Cancelar</a>
            </form>

        </div>
    </div>
</div>
</body>
</html> 


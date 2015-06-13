<!DOCTYPE html> 
    <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Registro de Candidato</title>
    
    <link href="css/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/css/dashboard.css" rel="stylesheet">
    <style id="holderjs-style" type="text/css"></style></head>

    <body>
        
        <div class="row">
            <div class="col-md-4">
                
            </div>
            <div class="col-md-4">
                
                  
                                    <form name="Votacion" action="Tipo de Registro.php">
                      <center><h3>Registro de Candidato</h3></center></br>
                      <center><h5>DUI</h5></center><input type="text" name="DUI" value="" placeholder="00000000-0" class="form-control" required=""/><br>
                      <center><h5>Apellido</h5></center><input type="text" name="Apellido" value="" placeholder="Introdusca sus Apellidos" class="form-control" required=""/></br>
                      <center><h5>Nombre</h5></center><input type="text" name="Nombre" value="" placeholder="Introdusca sus Nombres" class="form-control" required=""/></br>
                      <center><h5>Foto del Candidato</h5></center><input type="file" name="imagen" class="" required=""/></br>
                      <center><h5>Genero</h5></center>
                      <center><b>Masculino</b></label>
                      <input type="radio" name ="radgenero" value="Masculino"  required="">
                      <label><b>Femenino</b></label>
                      <input type="radio" name ="radgenero" value="Femenino" ></center></br>
                      <center><h5>Tipo Candidato</h5></center>
                      <center><b>Partidario</b></label>
                      <input type="radio" name ="CC1" value="Partidario"  required="">
                      <label><b>Independiente</b></label>
                      <input type="radio" name ="CC1" value="Independiente" ></center></br>
                      <center><h5>Partido Politico:</h5></center><select name="Seleccion" class="form-control"></br>
                      <option value=""></option>
                      <option value="">Partido 1</option>
                      <option value="">Partido 2</option>
                      <option value="">Partido 3</option></select></br>
                      <center><h5>Departamento:</h5></center><select name="Seleccion" class="form-control"></br>
                      <option value=""></option>
                      <option value="">Ahuachapan</option>
                      <option value="">Santa Ana</option>
                      <option value="">Sonsonate</option>
                      <option value="">Chalatenango</option>
                      <option value="">Cuscatlan</option>
                      <option value="">San Salvador</option>
                      <option value="">La Libertad</option>
                      <option value="">La Paz</option>
                      <option value="">San Vicente</option>
                      <option value="">Cabañas</option>
                      <option value="">Usulutan</option>
                      <option value="">San Miguel</option>
                      <option value="">Morazan</option>
                      <option value="">La Union</option></select></br>
                      <center><input type="submit" value="Registrar" name="Registrar" class="btn btn-primary"/></center>
         
        </form>
            </div>
            <div class="col-md-4">
                
            </div>
               
        
        </div>
        <br>
        <br>
        <br>
       <center><footer id="footer">
  Diseño y Creacion <a href="http://www.facebook.com/JorgeAyala">Jorge Ayala</a> y <a href="http://www.facebook.com/Melvin100">Melvin Palacios</a> ITCA-Fepade  Megatec-Zacatecoluca
  <p> &copy; Copyright JHMP 2015 Sistema Electronico de Votacion </p></center>

</footer> 
    </body>
</html>


<!DOCTYPE html>
<html>
    <head>
        <title>DEPENDENCIAS</title>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        
        <font color="Silver" face="Comic Sans MS,arial">
            <h1 align="center">DEPENDENCIAS</h1>
        </font> 

            <style type="text/css">

                .Select { 
                    color: Silver; 
                }

                .Selects {
                    width: 200%;
                    max-width: 200px;
                    margin: 0 550px;
            } 


</style>

    </head>
    <body style="background-color:rgb(68, 0, 255)">
        <div class="Selects">
        <form action="" method="post">
            
            <div>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                <label for="dependencia" >Seleccione una dependencia:</label><br>
                <select id="0" name="dependencia">
                    <option></option>
                    <option value="1">Decanatura</option>
                    <option value="4">Departamento de sistemas</option>
                    <option value="5">Departamento de electrónica</option>                
                </select><br><br>
            </div>
            <div>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                <br><label for="subdependencia">Seleccione una subdependencia:</label><br>
                <select id="1" name="subdependencia"></select><br><br>
            </div>

            <div>
                <input type="submit" name="boton" value="Enviar Datos" onclick="this.form.submit()">
            </div>

            <div>
                <br><br>Gestionar un etiquetado para los documento emitidos por la facultad.
            </div>

        </form>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>       
            $("#0").on("change",function()
            {
                var datos = "";
                var dep = $(this).val();
                if(dep == "1")
                {
                    datos = datos + '<option value = "1">Decano</option>';
                    datos = datos + '<option value = "2">Secretaría General</option>';
                    $("#1").html(datos);
                    $("#1").on("change",function()
                    {
                        var subDep = $(this).val();                       
                    });
                }
                else if(dep == "4")
                {
                    datos = datos + '<option value = "1">Jefe de Departamento</option>';
                    datos = datos + '<option value = "2">Tesoreria</option>'; 
                    $("#1").html(datos);
                    $("#1").on("change",function()
                    {
                        var subDep = $(this).val();                       
                    });
                }
                else if(dep == "5")
                {
                    datos = datos + '<option value = "1">Jefe de Departamento</option>';
                    datos = datos + '<option value = "2">Tesoreria</option>'; 
                    $("#1").html(datos);
                    $("#1").on("change",function()
                    {
                        var subDep = $(this).val();                       
                    });
                }
                else{
                    datos = datos + '<option</option>';
                    $("#1").html(datos);
                    $("#1").on("change",function()
                    {
                        var subDep = $(this).val();                       
                    });
                }
            });
        </script> 
    </div>       
    </body>
</html>

<?php  
    function guardarDatos($dep, $subDep)
    {   
        $dep = intval($dep);
        $subDep = intval($subDep);
        $datos = file_get_contents("dependencias.json");
        $datosAux = json_decode($datos, true);
        
        
        
        if($datosAux['Dependencias'][0]['dependencia'] == $dep)
        {
            if($datosAux['Dependencias'][0]['Subdependencias'][0]['subdependencia'] == $subDep)
            {
                $datosAux['Dependencias'][0]['Subdependencias'][0]['numDocumento'] = $datosAux['Dependencias'][0]['Subdependencias'][0]['numDocumento'] + 1;
                $numDocumeto = intval($datosAux['Dependencias'][0]['Subdependencias'][0]['numDocumento']);            
            }
            if($datosAux['Dependencias'][0]['Subdependencias'][1]['subdependencia'] == $subDep)
            {
                $datosAux['Dependencias'][0]['Subdependencias'][1]['numDocumento'] = $datosAux['Dependencias'][0]['Subdependencias'][1]['numDocumento'] + 1;
                $numDocumeto = intval($datosAux['Dependencias'][0]['Subdependencias'][1]['numDocumento']);            
            }
            $resultado = "8.".$dep.".".$subDep."/".$numDocumeto;
            echo "<input type='text' name='tVar' value=$resultado style='background-color: rgb(20,80,100)' />";       
        }
        if($datosAux['Dependencias'][1]['dependencia'] == $dep)
        {
            if($datosAux['Dependencias'][1]['Subdependencias'][0]['subdependencia'] == $subDep)
            {
                $datosAux['Dependencias'][1]['Subdependencias'][0]['numDocumento'] = $datosAux['Dependencias'][1]['Subdependencias'][0]['numDocumento'] + 1;
                $numDocumeto = intval($datosAux['Dependencias'][1]['Subdependencias'][0]['numDocumento']);            
            }
            if($datosAux['Dependencias'][1]['Subdependencias'][1]['subdependencia'] == $subDep)
            {
                $datosAux['Dependencias'][1]['Subdependencias'][1]['numDocumento'] = $datosAux['Dependencias'][1]['Subdependencias'][1]['numDocumento'] + 1;
                $numDocumeto = intval($datosAux['Dependencias'][1]['Subdependencias'][1]['numDocumento']);            
            }
            $resultado = "8.".$dep.".".$subDep."/".$numDocumeto;
            echo "<input type='text' name='tVar' value=$resultado style='background-color: rgb(10,40,70)' />";       
        }
        if($datosAux['Dependencias'][2]['dependencia'] == $dep)
        {
            if($datosAux['Dependencias'][2]['Subdependencias'][0]['subdependencia'] == $subDep)
            {
                $datosAux['Dependencias'][2]['Subdependencias'][0]['numDocumento'] = $datosAux['Dependencias'][2]['Subdependencias'][0]['numDocumento'] + 1;
                $numDocumeto = intval($datosAux['Dependencias'][2]['Subdependencias'][0]['numDocumento']);            
            }
            if($datosAux['Dependencias'][2]['Subdependencias'][1]['subdependencia'] == $subDep)
            {
                $datosAux['Dependencias'][2]['Subdependencias'][1]['numDocumento'] = $datosAux['Dependencias'][1]['Subdependencias'][1]['numDocumento'] + 1;
                $numDocumeto = intval($datosAux['Dependencias'][2]['Subdependencias'][1]['numDocumento']);            
            }  
            $resultado = "8.".$dep.".".$subDep."/".$numDocumeto;  
            echo "<input type='text' name='tVar' value=$resultado style='background-color: rgb(200,100,15)' />";
        }
        
        $nuevosDatos = json_encode($datosAux);
        file_put_contents('dependencias.json', $nuevosDatos);  
        
    }

    $boton="";        
    if(isset($_POST['boton']))$boton=$_POST['boton'];
    if($boton)
    {     
        $dep = $_POST["dependencia"];
        if($dep == "" ){
            echo"<script  language='javascript'> window.alert('¡DEBE SELECCIONAR UNA DEPENDENCIA!');</script>";
        }
        else{
            $subDep = $_POST["subdependencia"];
            guardarDatos($dep, $subDep);
            
        }   
    }
?>

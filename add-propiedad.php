<?php

/********************************************************/
//SELECCIONAMOS LOS TIPOS DE PROPIEDADES
//nos conectamos a la base de datos
include("conex.php");

//Armamos el query para seleccionar los tipos
$query = "SELECT * FROM tipos";

//Ejecutamos la consulta
$resultado_tipos = mysqli_query($conn, $query);
/******************************************************/

/********************************************************/

//nos conectamos a la base de datos
include("conex.php");

//Armamos el query para seleccionar los paises
$query = "SELECT * FROM paises";

//Ejecutamos la consulta
$resultado_paises = mysqli_query($conn, $query);
/********************************************************/


/******************************************************* */
//GUARDAMOS LA PROPIEDAD
if (isset($_POST['agregar'])) {
    //nos conectamos a la base de datos
    include("conex.php");

    //tomamos los datos que vienen del formulario
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $tipo = $_POST['tipo'];
    $ubicacion = $_POST['ubicacion'];
    $habitaciones = $_POST['habitaciones'];
    $banios = $_POST['banios'];
    $pisos = $_POST['pisos'];
    $garage = $_POST['garage'];
    $dimensiones = $_POST['dimensiones'];
    $precio = $_POST['precio'];
    $url_foto_principal = "url";
    $url_galeria = "url";
    $estado = $_POST['estado'];
    $propietario = $_POST['nombre_propietario'];
    $telefono_propietario = $_POST['telefono_propietario'];

    //armamos el query para insertar en la tabla propiedades
    $query = "INSERT INTO propiedades (id, fecha_alta, titulo, descripcion, tipo, ubicacion, habitaciones, banios, pisos, garage, dimensiones, precio,  url_foto_principal, estado, propietario, telefono_propietario, activo)
    VALUES (NULL,CURRENT_TIMESTAMP, '$titulo', '$descripcion','$tipo','$ubicacion','$habitaciones','$banios','$pisos','$garage','$dimensiones','$precio', '', '$estado','$propietario','$telefono_propietario' , 0)";

    //insertamos en la tabla propiedades
    if (mysqli_query($conn, $query)) { //Se insertó correctamente
        include("procesar-foto-principal.php");
        include("procesar-fotos-galeria.php");
        $mensaje = "La propiedad se inserto correctamente";
    } else {
        $mensaje = "No se pudo insertar en la BD" . mysqli_error($conn);
    }
}


/******************************************************* */


?>


<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUBIR CASA</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="superadmin/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="superadmin/assets/libs/css/style.css">
    <link rel="stylesheet" href="superadmin/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="estilo.css">

    <script>
        function muestraselect(str) {
            var conexion;

            if (str == "") {
                document.getElementById("ciudad").innerHTML = "";
                return;
            }
            if (window.XMLHttpRequest) {
                conexion = new XMLHttpRequest();
            }

            conexion.onreadystatechange = function() {
                if (conexion.readyState == 4 && conexion.status == 200) {
                    document.getElementById("ciudad").innerHTML = conexion.responseText;
                }
            }

            conexion.open("GET", "ciudad.php?c=" + str, true);
            conexion.send();

        }
    </script>
</head>

<body>
    <?php include("header.php"); ?>

    <div id="contenedor-admin">
        <?php include("contenedor-menu.php"); ?>

        <div class="contenedor-principal">
            <div id="nueva-propiedad">
                <h2>Nueva propiedad</h2>
                <hr>

                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data" method="post">
                    <div class="fila-una-columna">
                        <label for="titulo">Título de la Propiedad</label>
                        <input type="text" name="titulo" required class="input-entrada-texto">
                    </div>

                    <div class="fila-una-colummna">
                        <label for="descripcion">Descripción de la Propiedad</label>
                        <textarea name="descripcion" id="" cols="30" rows="10" class="input-entrada-texto"></textarea>
                    </div>

                    <div class="fila">
                        

                        <div class="box">
                            <label for="tipo">Elija estado de la propiedad</label>
                            <select name="tipo" id="" class="input-entrada-texto">
                                <option value="renta">Renta</option>
                                <option value="venta">Venta</option>
                            </select>
                        </div>

                        <div class="box">
                            <label for="ubicacion">Ubicación</label>
                            <input type="text" name="ubicacion" class="input-entrada-texto">
                        </div>
                    </div>

                    <div class="fila">
                        <div class="box">
                            <label for="habitaciones">Habitaciones</label>
                            <input type="text" name="habitaciones" class="input-entrada-texto">
                        </div>

                        <div class="box">
                            <label for="baños">Baños</label>
                            <input type="text" name="banios" class="input-entrada-texto">
                        </div>

                        <div class="box">
                            <label for="pisos">Pisos</label>
                            <input type="text" name="pisos" class="input-entrada-texto">
                        </div>
                    </div>

                    <div class="fila">
                        <div class="box">
                            <label for="garage">Garage</label>
                            <select name="garage" id="" class="input-entrada-texto">
                                <option value="No">No</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <div class="box">
                            <label for="dimensiones">Dimensiones</label>
                            <input type="text" name="dimensiones" class="input-entrada-texto">
                        </div>

                        <div class="box">
                            <label for="precio">Precio (Alquiler o Venta)</label>
                            <input type="text" name="precio" class="input-entrada-texto" required>
                        </div>
                    </div>

                    <div>
                        <h2>Galería de fotos</h2>
                        <label for="foto1" class="btn-fotos"> Foto Principal</label>
                        <output id="list" class="contenedor-foto-principal">
                            <img src="<?php  echo $propiedad['url_foto_principal'] ?>" alt="">
                        </output>
                        <input type="file" id="foto1" accept="image/*" name="foto1" style="display:none">
                    </div>
                    <div>
                        <label for="fotos" class="btn-fotos"> Galería de Fotos </label>
                        <div id="contenedor-fotos-publicacion">
                        </div>
                        <input type="file" id="fotos" accept="image/*" name="fotos[]" value="Foto" multiple="" required style="display:none">
                    </div>


                    <h2>Ubicación y datos del Propietario</h2>
                    <div class="fila">
                        <div class="box">
                            <label for="estado">Seleccione Estado  de la Propiedad</label>
                            <select name="estado" id="estado" class="input-entrada-texto">
                            <option value="no">Seleccione uno...</option>
      <option value="Aguascalientes">Aguascalientes</option>
      <option value="Baja California">Baja California</option>
      <option value="Baja California Sur">Baja California Sur</option>
      <option value="Campeche">Campeche</option>
      <option value="Chiapas">Chiapas</option>
      <option value="Chihuahua">Chihuahua</option>
      <option value="CDMX">Ciudad de México</option>
      <option value="Coahuila">Coahuila</option>
      <option value="Colima">Colima</option>
      <option value="Durango">Durango</option>
      <option value="Estado de México">Estado de México</option>
      <option value="Guanajuato">Guanajuato</option>
      <option value="Guerrero">Guerrero</option>
      <option value="Hidalgo">Hidalgo</option>
      <option value="Jalisco">Jalisco</option>
      <option value="Michoacán">Michoacán</option>
      <option value="Morelos">Morelos</option>
      <option value="Nayarit">Nayarit</option>
      <option value="Nuevo León">Nuevo León</option>
      <option value="Oaxaca">Oaxaca</option>
      <option value="Puebla">Puebla</option>
      <option value="Querétaro">Querétaro</option>
      <option value="Quintana Roo">Quintana Roo</option>
      <option value="San Luis Potosí">San Luis Potosí</option>
      <option value="Sinaloa">Sinaloa</option>
      <option value="Sonora">Sonora</option>
      <option value="Tabasco">Tabasco</option>
      <option value="Tamaulipas">Tamaulipas</option>
      <option value="Tlaxcala">Tlaxcala</option>
      <option value="Veracruz">Veracruz</option>
      <option value="Yucatán">Yucatán</option>
      <option value="Zacatecas">Zacatecas</option>
                                    </option>
                                
                            </select>
                        </div>
                       

                        <div class="box">
                            <label for="propietario">Nombre del propietario</label>
                            <input type="text" name="nombre_propietario" class="input-entrada-texto">
                        </div>


                    </div>
                    <div class="fila">
                        <div class="box">
                            <label for="telefono_propietario">Teléfono del propietario</label>
                            <input type="text" name="telefono_propietario" class="input-entrada-texto" >
                        </div>
                    </div>
                    <div style="visibility: hidden;">
                        
                        <input type="text" name="activo" class="input-entrada-texto" value="0">
                    </div>
                    <hr>
                    <input type="submit" value="Agregar Propiedad" name="agregar" class="btn-accion">

                </form>

            </div>
        </div>
    </div>

    <?php if (isset($_POST['agregar'])) : ?>
        <script>
            alert("<?php echo $mensaje ?>");
            window.location.href = 'index.php';
        </script>
    <?php endif ?>

    <script>
        $('#link-add-propiedad').addClass('pagina-activa');
    </script>

    <script src="subirfoto.js"></script>
    <script src="scriptFotos.js"></script>
</body>

</html>

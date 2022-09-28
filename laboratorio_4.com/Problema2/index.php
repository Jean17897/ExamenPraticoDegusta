<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema2</title>
</head>
<body>
<?php 
    /*Se pide crear un algoritmo que calcule el porcentaje de alumnos y alumnas de un salón de 
    clase.
    Por ejemplo, si hay 25 alumnos y 20 alumnas la salida debe ser:
    Porcentaje de alumnos: (25/45)*100 = 55.55555%
    Porcentaje de alumnas: (20/45)*100 = 44.44444%
    Generar una tabla html con los resultados
     */
    require_once("alumnos.php");
    $obj = new alumnos();
    $alumnos=$_GET["Alumnos"];
    $alumnas=$_GET["Alumnas"];
    $obj->alumnos= $alumnos;
    $obj->alumnas= $alumnas;
    ?>
    <div class="container-sm">
    <h2> <?php echo "El Total de Alumnos es de ----> " . $obj->MostrarTotalAlumnos() . "<br> El Porcentaje de Alumnos es del %".$obj->MostrarPorcentajeAlumnos() . "<br> El Porcentaje de Alumnos es del %".$obj->MostrarPorcentajeAlumnas() ; ?> </h2>
    </div>
     

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema4</title>
</head>
<body>
    
    <?php 
    /**
     * Crear una clase que tenga 2 atributos: password y salt. La clase debe tener métodos para cifrar la contraseña
    *concatenada al salt enviado como parámetro GET. 
    */
    require_once("contrasena.php");
    $obj = new contrasena();
    $password=$_GET["texto"];
    $salt=$_GET["salt"];
    $obj->password= $password;
    $obj->salt= $salt;
    ?>
    <div class="container-lg">
    <h1>Cifrado de Texto </h1>    
    <table class="table table-ligth table-striped table-hover table-bordered table-sm table-responsive-lg">
        <thead>
            <tr>
                <th scope="col">Contraseña a cifrar</th>
                <th scope="col"> <?php echo $password ?> </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">Salt</th>
                <th scope="row"> <?php echo $salt ?> </th>
            </tr>
            <tr>
                <th scope="row">base64_encode</th>
                <td> <?php echo $obj->Mostrarbase64_encode(); ?> </td>
            </tr>
            <tr>
                <th scope="row">md5</th>
                <td> <?php echo $obj->Mostrarmd5(); ?> </td>
            </tr>
            <tr>
                <th scope="row">sha1</th>
                <td> <?php echo $obj->Mostrarsha1(); ?> </td>
            </tr>
            <tr>
                <th scope="row">crc32</th>
                <td> <?php echo $obj->Mostrarcrc32(); ?> </td>
            </tr>
            <tr>
                <th scope="row">crypt</th>
                <td> <?php echo $obj->Mostrarcrypt(); ?> </td>
            </tr>
            <tr>
                <th scope="row">hash-sha224</th>
                <td> <?php echo $obj->Mostrarsha224(); ?> </td>
            </tr>
            <tr>
                <th scope="row">hash-sha512</th>
                <td> <?php echo $obj->Mostrarsha512(); ?> </td>
            </tr>
            <tr>
                <th scope="row">hash-whirlpool</th>
                <td> <?php echo $obj->Mostrarwhirlpool(); ?> </td>
            </tr>
            <tr>
                <th scope="row">hash-snefru</th>
                <td> <?php echo $obj->Mostrarsnefru(); ?> </td>
            </tr>
            <tr>
                <th scope="row">hash-haval128,3</th>
                <td> <?php echo $obj->Mostrarhaval1283(); ?> </td>
            </tr>
            <tr>
                <th scope="row">hash-haval128,5</th>
                <td> <?php echo $obj->Mostrarhaval1285(); ?> </td>
            </tr>
        </tbody>
    </table>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
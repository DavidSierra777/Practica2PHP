<?php
$resultado="";
#Esto se utiliza para verificar si la solicitud se realizo mediante el metodo POST
if ($_SERVER["REQUEST_METHOD"] === "POST") 
{
    $numero = $_POST["numero"];
    $conversion = $_POST["opciones"];

    switch ($conversion) 
    {
        case "binario":
            $resultado = decbin($numero);
            break;
        case "octal":
            $resultado = decoct($numero);
            break;
        case "hexadecimal":
            $resultado = dechex($numero);
            break;
        default:
            $resultado = "Opción no válida";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0"
    crossorigin="anonymous">
    <title>Document</title>
</head>

<style>
    .container
        {
            background-color:rgb(236, 9, 104) ;
            border-radius: 20px;
            
            text-align: center ;
            color: rgb(255, 255, 255);
            padding-top: 3%;
            padding-right: 20%;
            padding-left: 20%;
            padding-bottom: 20px;            
        }
</style>
<body>
<div class="container">
<form method="post">
        <h2>Conversión de números</h2><br>
        <select name="opciones" class="form-select mb-3" id="control1">
            <option value="binario">Binario</option>
            <option value="octal">Octal</option>
            <option value="hexadecimal">Hexadecimal</option>
        </select><br><br>
        <label for="numero">Ingresa un número:</label>
        <input class="dato" type="number" name="numero" id="numero" required><br><br>
       
        <button type="submit"  value="Convertir" class="btn btn-primary">Convertir</button><br><br>
        <label for="">El resultado es:</label><br>
        <h2><span><?php echo "$resultado"; ?></span></h2>
    </form>
</div> 

</body>
</html>








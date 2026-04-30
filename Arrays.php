<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejercicio 1</h1>
    <?php
        $datos = array("nombre" => "Sara", "apellido" => "Martinez", "edad" => 23, "ciudad" => "bcn");

        $counter = 1;

        foreach ($datos as $value) {
            echo "dato " . $counter . "º: " . $value ."<br>";
            $counter ++;
        }
    ?>

    <br>
    <h1>Ejercicio 2</h1>
    <?php
        $datos = array("nombre" => "Sara", "apellido" => "Martinez", "edad" => 23, "ciudad" => "bcn");
        foreach ($datos as $key => $value) {
            echo $key . ": " . $value ."<br>";
        }
    ?>

    <br>
    <h1>Ejercicio 3</h1>
    <?php
        $datos = array("nombre" => "Sara", "apellido" => "Martinez", "edad" => 24, "ciudad" => "bcn");

        $counter = 1;

        foreach ($datos as $value) {
            echo "dato " . $counter . "º: " . $value ."<br>";
            $counter ++;
        }
    ?>

    <br>
    <h1>Ejercicio 5</h1>
    <?php
    $letters = "a,b,c,d,e,f";
    $Explode = explode( ",", $letters);
    for ($i=5; $i >= 0; $i--) {
        # code...
        echo "Letter " . ($i+1) . "º " . $Explode[$i] . "<br>";
    }
    ?>

    <br>
    <h1>Ejercicio 6</h1>
    <?php
        $datos = array("Miguel" => 5, "Luis" => 7, "Marta" => 10, "Isable" => 8, "Aitor" => 4, "Pepe" => 1);
        arsort($datos);
        echo "Nota de los estudiantes: ";
        foreach ($datos as $key => $value) {
            echo $key . ": " . $value . " ";
        }
    ?>

    <br>
    <h1>Ejercicio 7</h1>
    <?php
        $datos = array("Miguel" => 5, "Luis" => 7, "Marta" => 10, "Isable" => 8, "Aitor" => 4, "Pepe" => 1);
        $media = array_sum($datos) / count($datos);
        $media = number_format($media, 2);
        echo $media;
        echo "<br>" . "Alumnos con nota por encima de la media: " . "<br>";
        foreach ($datos as $key => $value) {
            if ($value > $media) {
                # code...
                echo $key . "<br>";
            }
        }
    ?>

    <br>
    <h1>Ejercicio 8</h1>
    <?php
        $datos = array("Miguel" =>  5, "Luis" => 7, "Marta" => 10, "Isable" => 8, "Aitor" => 4, "Pepe" => 1);
        $alta = 0;
        foreach ($datos as $key => $value) {
            # code...
            if($alta < $value){
                $alta = $value;
                $estudiante = $key;
            }
        }
        echo "La nota mas alta es: " . $alta . " y el mejor alumno es: " . $estudiante;

    ?>


</body>
</html>
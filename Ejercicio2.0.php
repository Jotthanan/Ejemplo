<?php
$registros = array();
if (($fichero = fopen("datos.csv", "r")) !== FALSE) {
    // Lee los nombres de los campos
    $nombres_campos = fgetcsv($fichero, 0, ",", ",");
    $num_campos = count($nombres_campos);
    // Lee los registros
    while (($datos = fgetcsv($fichero, 0, ",", ",")) !== FALSE) {
        // Crea un array asociativo con los nombres y valores de los campos
        $registro = array();
        for ($icampo = 0; $icampo < $num_campos; $icampo++) {
            $registro[$nombres_campos[$icampo]] = $datos[$icampo];
        }
        // Añade el registro leído al array de registros
        $registros[] = $registro;
    }
    fclose($fichero);

    echo "Leidos " . count($registros) . " registros<br>";
    foreach ($registros as $registro) {
        foreach ($registro as $nombre_campo => $valor) {
            echo $nombre_campo . ":" . $valor . "<br>";
        }
    }
}
?>

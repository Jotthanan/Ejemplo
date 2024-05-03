<?php
$archivo_csv = fopen('calif.csv', 'w');

if ($archivo_csv)
{
    fputs($archivo_csv, "NC, Nombre, Calif".PHP_EOL);
    
    $fila="19290300,ENRIQUE OROZCO,90";
    fputs($archivo_csv, $fila.PHP_EOL);
    
    $fila="19290440, FERNANDO QUINTERO,100";
    fputs($archivo_csv, $fila.PHP_EOL);

    fclose($archivo_csv);
    echo "El archivo fue creado correctamente";
    echo '<a href="calif.csv" download><button>Descargar CVS</button></a>'; //Método para descargar el XML

}
else
{
    echo "El archivo no existe o no se pudo crear";
}

?>

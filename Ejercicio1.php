<?php
crear();//archivo XML
leer();//archivo 

//Funcion para crear el archivo
function crear()
{
    //jajajajajajajjajajajHJHSHSJSJ
    //declarar a XML
    $xml = new DomDocument('1.0', 'UTF-8');
    ////Crear raiz
    $escuela = $xml->createElement('Escuela');
    $escuela = $xml->appendChild($escuela);
    //Crear nodo
    $alumno = $xml->createElement('alumno');
    $alumno = $escuela->appendChild($alumno);
    // Agregar un atributo al alumno
    $alumno->setAttribute('carrera', 'informática');
    //Agregar subnodo del primer dato
    $datos1 = $xml->createElement('nc', '19290300');
    $datos1 = $alumno->appendChild($datos1);
    //Agregar subnodo del segundo dato
    $datos2 = $xml->createElement('nombre', 'Enrique Orozco');
    $datos2 = $alumno->appendChild($datos2);
    //Crear nodo
    $alumno = $xml->createElement('alumno');
    $alumno = $escuela->appendChild($alumno);
    //Agregar atributo al alumno
    $alumno->setAttribute('carrera', 'informática');
    //Agregar subnodo del primer dato
    $datos1 = $xml->createElement('nc', '19290440');
    $datos1 = $alumno->appendChild($datos1);
    //Agregar subnodo del segundo dato
    $datos2 = $xml->createElement('nombre', 'Fernando Artiaga');
    $datos2 = $alumno->appendChild($datos2);

    //Vaciar $xml a un archivo físicamente
    $xml->formatOutput = true;
    $el_xml = $xml->saveXML();
    $xml->save('alumnos.xml');

    //Mostramos el XML puro
    echo "<p><b>El XML ha sido creado.... Mostrando en texto plano:</b></p>"
        . htmlentities($el_xml) . "<hr>";
}
//Para leerlo
function leer()
{
    echo "<p><b>Ahora muestra datos con estilo</b></p>";
    $xml = simplexml_load_file('alumnos.xml');
    $salida = "";
    $c = 0;
    foreach ($xml->alumno as $item) {
        $salida = $salida . "<b>NC: </b> " . $item->nc . "" . "<b>
        Nombre:</b>" . $item->nombre . "" . "<hr/>";
        //en $Salida se concatena cada elemento encontrado con la etiqueta alumno
        $c++;
    }
    echo $salida."\n";
    echo $c. " <br/>";
}
echo '<a href="alumnos.xml" download><button>Descargar XML</button></a>'; //Método para descargar el XML

?>

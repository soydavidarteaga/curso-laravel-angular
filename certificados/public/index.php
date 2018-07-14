<?php
    require '../vendor/autoload.php';
    use App\Template;
    use App\Pdf;

    //Aqui se llena la informacion a mostrar en el certificado
    $datos = array("nombre" => "David Arteaga","curso" => "Laravel","instructor" => "Jose Cuicas");
    //Generamos el html
    $html = Template::generarHtml($datos,"/pdf/certificado");
    //Generar el Pdf
    Pdf::generarPDF($html,"certificado");

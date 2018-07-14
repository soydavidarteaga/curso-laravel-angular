<?php
    namespace App;
    //Llamamos al DOMpdf -> libreria para 
    use Dompdf\Dompdf;

    class Pdf{
        public static function generarPDF($html,$archivo){
            //Instanciamos a la libreria de pdf's
            $dompdf = new Dompdf();
            //Aqui se le asigna el html
            $dompdf->loadHtml($html);
            //Se renderiza el archivo html
            $dompdf->render();
            //Se renderiza stream
            $dompdf->stream($archivo.".pdf");            
        }
    }
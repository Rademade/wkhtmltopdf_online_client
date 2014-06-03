<?php
require '../WkHtmlToPdf/Converter.php';

$converter = new WkHtmlToPdf_Converter();
file_put_contents('test.pdf', $converter->convert( file_get_contents('test.html') ));
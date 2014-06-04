wkhtmltopdf-online-client
=========================

PHP library for wkhtmltopdf-online

Usage example
--------------

``` php
require_once '/WkHtmlToPdf/WkHtmlToPdf/Converter.php';

$pdfGenerator = new WkHtmlToPdf_Converter();
$pdfContent = $pdfGenerator->convert( '<h1>HTML example</h1>' );
file_put_contents('1.pdf', $pdfContent);
```

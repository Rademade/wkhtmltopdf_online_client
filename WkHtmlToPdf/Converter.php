<?php
require 'Browser.php';

class WkHtmlToPdf_Converter {

    const SERVER_URI = 'http://wkhtmltopdf.rademade.com/';

    public function convert($html) {
        $browser = new WkHtmlToPdf_Browser();
        $browser->setPostData([ 'html' => $html ]);
        return $browser->download( self::SERVER_URI );
    }

}

<?php
class WkHtmlToPdf_Browser {

	private $_curl;

	public function __construct() {
        $this->__initCurl();
        $this->__initCurlParams();
    }

    public function setPostData(array $data) {
        curl_setopt($this->_curl, CURLOPT_POST, true);
        curl_setopt($this->_curl, CURLOPT_POSTFIELDS, $data);
    }

	public function download($url) {
        curl_setopt($this->_curl, CURLOPT_URL, $url );
        $result = curl_exec( $this->_curl );
        curl_close( $this->_curl );
        return $result;
    }

    protected function __initCurl() {
        $this->_curl = curl_init();
    }

    protected function __initCurlParams() {
        curl_setopt($this->_curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($this->_curl, CURLOPT_VERBOSE, false);
        curl_setopt($this->_curl, CURLOPT_HEADER, false);
        curl_setopt($this->_curl, CURLOPT_NOSIGNAL, false);
        curl_setopt($this->_curl, CURLINFO_HEADER_OUT, false);
        curl_setopt($this->_curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->_curl, CURLOPT_NOPROGRESS, true);
        curl_setopt($this->_curl, CURLOPT_FOLLOWLOCATION, true);
    }
	
}
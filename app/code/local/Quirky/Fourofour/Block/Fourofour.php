<?php
class Quirky_Fourofour_Block_Fourofour extends Mage_Core_Block_Template {
    public function getQuery() {
        $q="/catalogsearch/result/?q=";
        $host = $_SERVER['HTTP_HOST'];
        $query = substr($_SERVER['REQUEST_URI'],1);
        if (substr($query,-1)=="/") $query = substr($query,0, -1);
        $query = str_replace("/", "+", $query);
        $query = str_replace("-", "+", $query);
        echo $_SERVER['https'];
        if ($_SERVER['SERVER_PORT']  == 443) {$http="https://";} else {$http="http://";}
        return $http.$host.$q.$query;
    }
}


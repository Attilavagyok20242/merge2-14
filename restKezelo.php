<?php
class RestKezelo{
    private $httpVersion ="HTTP/1.1";
    public function sethttpsfejlec($statusKod){
        $statusUzenet=$this->gethttpStatusUzenet($statusKod);
        header($this->httpVersion." ".$statusKod." ".$statusUzenet);
        header("Content-Type: Application/json; charset=utf-8");
    }
    public function gethttpStatusUzenet($statusKod){
        $httpStatus=array(
            200 =>'ok',
            400 =>'Bad Request',
            404 => 'Not Found');
        return ($httpStatus[$statusKod]);
    }
}
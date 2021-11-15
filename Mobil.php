<?php
defined('BASEPATH') OR exit('No direct script acccess allowed');


class Mobil extends CI_Controller{

    public function warna(){
        echo "Mobil itu berwarna " .$this->url->segment('3');
        
    }
}